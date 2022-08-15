<?php 

session_start();
session_destroy();

////to validate the cookie
if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
{
	$email = $_COOKIE['email'];
	$password = $_COOKIE['password'];
    setcookie('email',$email, time()-1); //to destroy the cookie
    setcookie('password',$password, time()-1); //to destroy the cookie
}

header("Location: login.php");

?>