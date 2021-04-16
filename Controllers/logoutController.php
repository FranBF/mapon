<?php
if(isset($_COOKIE['user'])){
    setcookie('user', '', time() - 1);
    header("Location:../views/login.php");
}else{
    echo "No hay cookie";
}
