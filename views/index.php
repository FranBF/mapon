<?php
//Declaramos la conexion con el servidor de base de datos
require_once('../database/config.php');

//define page title
$title = 'Home';

//include header template
require('header.php'); 
 if(isset($_COOKIE['user'])){
   ?><div id="map"></div>
   <div id="floating-panel">
   </div>
   <div id="mostrar"></div>
   <?php
 }else{
   header("Location:login.php");
 }

    