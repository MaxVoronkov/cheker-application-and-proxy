<?php
session_start();
if (isset($_SESSION['login'])) {
include('./db.php');	
$name = $_POST['name'];
$link = $_POST['link'];
$active = "Active";

 mysqli_query($connection, "INSERT INTO `android_app`(`id`, `name`, `link`, `active`) VALUES  (NULL, '$name', '$link','$active');");
?>
 <script type="text/javascript"> 
location.replace("../index.php"); 
</script>

<?php
}else{
  header("Location: ../login.php");
}
?>