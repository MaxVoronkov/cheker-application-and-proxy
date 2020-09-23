<?php
session_start();
if (isset($_SESSION['login'])) {
include('./header.php');
include('./nav.php');
include_once('./function/db.php');
$all_app_data = mysqli_query($connection, " SELECT * FROM `android_app`");
$n = 1;
while ($app = mysqli_fetch_assoc($all_app_data)) {
	echo $n.':'.$app['name'].'/<strong>'.$app['active'].'</strong>';?>
	<a href="<?php echo $app['link']?>" target="_blank"><button>link</button></a><a href="function/delete.php?id=<?php echo $app['id'];?>"><button>Delete</button></a><br>
	<?php
	$n++;
}
include('./footer.php');
}else{
  header("Location: /login.php");
}
?>