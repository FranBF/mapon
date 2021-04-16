<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)){ echo $title; }?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6R8IXHPvaAG0Ju8Ks2zGu8av5w5atmuE&callback=initMap"
  type="text/javascript"></script>
    <script src="../public/js/main.js"></script>
    <script>
      $(document).ready(function(){
        $.ajax({
          url:'../Controllers/dataController.php',
          type:"get",
          success:function(data){
            console.log(data);
            $("#floating-panel").html(data);
          }
        })
      })
    </script>
</head>
<body>
<div role="navigation" class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">MAPON</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">HOME</a></li>
            <li class=""><a href="../Controllers/logoutController.php">Logout</a></li>
            <li class=""><a href="#"><?php if(isset($_COOKIE['user'])){echo strtoupper($_COOKIE['user']);} ?></a></li>
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>