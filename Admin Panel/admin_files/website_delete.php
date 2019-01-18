<?php require('config.php');
	  require('check_session.php');
 ?>
<?php 
	if('<script type="text/javascript">confirm("Delete this WEBSITE ?")</script>')
	{
		$d = $_GET['id'];
		$del = "DELETE FROM website_table WHERE webid = '$d'";
		$rs = mysqli_query($con, $del) or die(mysqli_error($con));
		header('location: website.php');
	}
	else
	{
		header('location: website.php');
	}
?>