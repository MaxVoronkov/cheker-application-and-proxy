<?php
include_once('./db.php');
$all_app_data = mysqli_query($connection, " SELECT * FROM `android_app`");
while ($app = mysqli_fetch_assoc($all_app_data)) {
$link_check = $app['link'];
$app_name = $app['name'].'-is disabled';
$active = "Disabled";
$data = file_get_contents($link_check);

if ($data == false) {
	$tgid = '1315514566';
	file_get_contents('https://api.telegram.org/bot/sendMessage?chat_id='.$tgid.'&text=App -'.$app_name.'  link:'.$link_check);
	mysqli_query($connection, "UPDATE `android_app` SET `active` = '$active' WHERE `id` =" . (int) $app['id'] );
}
}
?>
 <script type="text/javascript">
location.replace("../index.php");
</script>
