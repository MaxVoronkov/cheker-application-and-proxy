<?php
session_start();
if (isset($_SESSION['login'])) {
include('./db.php');
if(isset($_GET['id']))
{        
  mysqli_query($connection, "DELETE  FROM `android_app` WHERE `id` =" . (int) $_GET['id']);
  header("Location: ../index.php");	
}
}else{
  header("Location: ../login.php");
}
?>