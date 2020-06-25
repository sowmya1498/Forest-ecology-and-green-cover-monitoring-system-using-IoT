<?php
session_start();
unset($_SESSION['use']);
unset($_SESSION['link']);
if(!isset($_SESSION['link']))
 {
           header("Location:home.html");  
       }
?>

