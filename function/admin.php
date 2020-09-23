<?php
	session_start();
	$login = $_GET["login"];
	$password = $_GET["password"];
	if ($login == "Admin" ) {
		if ($password == "checkapp" ) {
			$_SESSION['login'] = $login;
?>
		 <script type="text/javascript">
		location.replace("../index.php");
		</script>
<?php
		}

	} else{
	?>
		 <script type="text/javascript">
		location.replace("../login.php");
		</script>
<?php
	}

 ?>