<?php
//Declaramos la conexion con el servidor de base de datos
require_once('../database/config.php');

//define page title
$title = 'Home';

//include header template
require('header.php'); 
?>
<div class="container" id="cont">
    <form role="form" method="post" action="../Controllers/dataController.php" autocomplete="off">
				<h2>Please insert your api key and the dates you want to track</h2>
				<hr>
				<div class="form-group">
					<input type="date" name="from" id="from" class="form-control input-lg" value="" tabindex="1">
				</div>
        <div class="form-group">
					<input type="text" name="fromH" id="fromH" class="form-control input-lg" placeholder="Time to start (hh:mm:ss)" value="" tabindex="1">
				</div>

        <div class="form-group">
					<input type="date" name="till" id="till" class="form-control input-lg" value="" tabindex="1">
				</div>
        <div class="form-group">
					<input type="text" name="tillH" id="tillH" class="form-control input-lg" placeholder="Time to end (hh:mm:ss)" value="" tabindex="1">
				</div>

				<div class="form-group">
					<input type="text" name="apikey" id="apikey" class="form-control input-lg" placeholder="Your api key" tabindex="3">
				</div>
				
				<div class="row">
					<div class="col-xs-9 col-sm-9 col-md-9">
						 <a href='register.php'>Don't have an account? Register</a>
					</div>
				</div>
				
				<hr>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" id="btlogin" value="Login" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
    </div>