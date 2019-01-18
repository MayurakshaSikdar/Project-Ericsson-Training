<?php require('config.php');
	  require('check_session.php');
 ?>
<?php 
	if('<script type="text/javascript">confirm("Approve this WEBSITE ?")</script>')
	{
		$id = $_GET['id'];
		$s = "SELECT * FROM `validate_web_table` WHERE valid='$id'";
		$del = mysqli_query($con, $s) or die(mysqli_error($con));
		$rec = mysqli_fetch_assoc($del);
		$url = $rec['url'];
		$name = $rec['name'];
		$desc = $rec['description'];
		$mobile = $rec['contact'];
		$email = $rec['email'];
		$address = $rec['address'];
		$fpath = $rec['logo'];
		//echo '<script type="text/javascript">alert('.print_r($rec).')</script>';
		$move = copy("../../Company Images/Validate Images/".$fpath, "../../Company Images/".$fpath);
		$delFile = unlink("../../Company Images/Validate Images/".$fpath) or die("Can't Remove File");
		$logo = "Company Images/".$fpath;
		$query = "INSERT INTO `website_table` (`url`, `name`, `description`, `logo`, `contact`, `email`, `address`) VALUES ('$url', '$name', '$desc', '$logo', '$mobile', '$email', '$address')";
		$sql = mysqli_query($con, $query) or die(mysqli_error($con));
		mysqli_query($con, "DELETE FROM `validate_web_table` WHERE valid='$id'") or die(mysqli_error($con));
		header('location: validate.php');
	}
	else
	{
		header('location: validate.php');
	}
?>