<?php
//Declaramos la conexion con el servidor de base de datos
require_once('../database/config.php');

//define page title
$title = 'Register';

//include header template
require('header.php'); 
?>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="registerController.php" autocomplete="off">
				<h2>Please introduce your credentials</h2>
				<p><a href='./'>Go to home</a></p>
				<hr>
				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Username" value="" tabindex="1">
				</div>

				<div class="form-group">
					<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" value="" tabindex="1">
				</div>

				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
				</div>
				
				<div class="row">
					<div class="col-xs-9 col-sm-9 col-md-9">
						 <a href='login.php'>Login</a>
					</div>
				</div>
				
				<hr>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" id="btlogin" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
		</div>
	</div>



</div>
<div id="mostrar"></div>

<?php 
//include header template
require('footer.php'); 
?>