<?php
session_start();
if (isset($_SESSION['login'])) {
include('./db.php');
        
  mysqli_query($connection, "DELETE  FROM `android_app` WHERE `active` ='Disabled'");
  header("Location: ../index.php");	

}else{
  header("Location: /login.php");
}
?>