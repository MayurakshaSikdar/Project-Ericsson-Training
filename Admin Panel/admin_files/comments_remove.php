<?php require('config.php');
	  require('check_session.php');
 ?>
<?php 
	if('<script type="text/javascript">confirm("Delete this COMMENT ?")</script>')
	{
		$d = $_GET['id'];
		$del = "DELETE FROM `comments_table` WHERE cid = '$d'";
		$rs = mysqli_query($con, $del) or die(mysqli_error($con));
		header('location: comments.php');
	}
	else
	{
		header('location: comments.php');
	}
?>