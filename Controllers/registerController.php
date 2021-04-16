<?php
include_once('config.php');
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$options = ['cost'=>12];
$pass_h = password_hash($password, PASSWORD_BCRYPT, $options);

try{
    $query = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $db->prepare($query);
    $stmt->execute(array(":username"=>$username, ":email"=>$email, "password"=>$pass_h));
    $row = $stmt->rowCount();
    if($row == 1){
        header("Location:login.php");
    }
}catch(Exception $e){
    echo "Error Line".$e->getLine();
}