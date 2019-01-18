<?php require('config.php');
	  require('check_session.php');
 ?>
<?php 
	if('<script type="text/javascript">confirm("Delete this WEBSITE ?")</script>')
	{
		$d = $_GET['id'];
		$del = "DELETE FROM validate_web_table WHERE valid = '$d'";
		$rs = mysqli_query($con, $del) or die(mysqli_error($con));
		header('location: validate.php');
	}
	else
	{
		header('location: validate.php');
	}
?>