<?php
	session_start();
	if(!ISSET($_SESSION['admin_id'])){
		header("location:index.php");
	}
?>
<html>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</html>
