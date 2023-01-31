<?php
session_start();
 if($_SESSION['status_login']!=false){
 header('location: login.php');
 }
?>