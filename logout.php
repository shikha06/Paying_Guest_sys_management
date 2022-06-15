<?php
session_start();
session_destroy();

if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
  {
       $un = $_COOKIE['email'];
       $password = $_COOKIE['password'];
       setcookie('email' , $un, time()-1);
       setcookie('password' , $password, time()-1);
  }
header("location:home2.php");
?>