<?php
session_start();
if (isset($_SESSION['login'])) {
include('./header.php');
include('./nav.php');
?>
<form action="function/add_app.php" method="post">
<p>App Name</p>
<input type="text" name="name">
<p>App link</p>
<textarea rows="4" cols="40" name="link"></textarea><br><br>
<input type="submit" value="ok"><input type="reset" name="reset"  value="reset">
</form>
<?php
include('./footer.php');
}else{
  header("Location: /login.php");
}
?>