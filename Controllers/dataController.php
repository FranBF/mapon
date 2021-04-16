<?php
use Mapon\MaponApi;

include __DIR__ . '/../vendor/autoload.php';

date_default_timezone_set('GMT');

$apiKey = '2ab183444385fa5024dcedece4ed0f4c0be4cb06 ';
$apiUrl = 'https://mapon.com/api/v1/';


/* $apiKey = $_REQUEST['apikey'];
$apiUrl = 'https://mapon.com/api/v1/';


$from = $_REQUEST['from'];
$fromH = $_REQUEST['fromH'];
$fromC = strval($from)."T".$fromH."Z";
$fromT = $fromC;
$fromDate = date("Y-m-d H:i:s", strtotime($fromC));



$till = $_REQUEST['till'];
$tillH = $_REQUEST['tillH'];
$tillC = strval($till)."T".$tillH."Z";
$tillT = strtotime($tillC);
$tillDate = date("Y-m-dZH:i:sT", strtotime($tillC)); */
















$api = new MaponApi($apiKey, $apiUrl);

$result = null;

/* if(isset($apiKey) && isset($from) && isset($till)){ */
    try {
        $result = $api->get('route/list', array(
            'from' => '2021-04-13T13:15:05Z',
            'till' => '2021-04-13T18:15:05Z',
            'include' => array('polyline', 'speed')
        ));
    } catch (\Mapon\ApiException $e) {
        echo 'API Error! Code: ' . $e->getCode() . ' Message: ' . $e->getMessage();
    }
/* }else{
    echo "You need to fill all the data";
} */

$pos = [];

if ($result && $result->data) {
    foreach ($result->data->units as $unit_id => $unit_data) {
        foreach ($unit_data->routes as $route) {
            if ($route->type == 'route') {
                if(isset($route->start)){
                    $pos = ["start_lat"=>$route->start->lat, "start_lng"=>$route->start->lng];
                    if(isset($route->end)){
                        
                        $pos = ["start_lat"=>$route->start->lat, "start_lng"=>$route->start->lng, "end_lat"=>$route->end->lat, "end_lng"=>$route->end->lng];
                        
                        echo "Origin: <input type='text' value='(".$pos['start_lat'].",".$pos['start_lng'].")'  id='origin' /> Destination:
                        <input type='text' value='(".$pos['end_lat'].",".$pos['end_lng'].")'  id='destination' /><br />
                        Heading: <input type='text'  id='heading' /> degrees";
                        /* header("Location:../views/index.php"); */
                        
                    }else{
                        echo "There's no end of route yet";
                    }
                }
                if (isset($route->polyline)) {
                    $points = $api->decodePolyline($route->polyline, $route->speed, strtotime($route->start->time));
                }
            }
        }
    }
}
