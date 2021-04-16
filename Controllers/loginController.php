<?php
include_once('config.php');
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

$query = "SELECT * FROM users WHERE username=:username LIMIT 1";
$stmt = $db->prepare($query);
$stmt->execute(array(":username"=>$username));
$rowC = $stmt->rowCount();
$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
if($rowC == 1){
    $user = $row[0];
    $res = password_verify($password, $user['password']);
    if($password == $res){
        setcookie("user", $username, time()+3600 * 24, "/", "/localhost");
        header("Location:index.php");
    }else{
        header("Location:login.php");
    }
}else{
    header("Location:login.php");
}