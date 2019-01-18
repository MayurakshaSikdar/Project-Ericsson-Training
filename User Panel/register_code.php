<?php
	require("config.php");
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$pass = $_POST['password'];
	$src = "SELECT * FROM `user_table` WHERE email='$email' OR mobile='$mobile'";
	$rs = mysqli_query($con, $src) or die(mysqli_error($con));
	if(mysqli_num_rows($rs) > 0)
	{
		header("location: register.php?msg=User Already Exists !");
		exit();
	}
	else
	{
		$src = "INSERT INTO user_table(name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$pass')";
		$rs = mysqli_query($con, $src) or die(mysqli_error($con));
		$sr = "SELECT * FROM user_table WHERE email='$email'";
		$r = mysqli_query($con, $sr) or die(mysqli_error($con));
		$rec = mysqli_fetch_assoc($r);
		$_SESSION['user'] = $rec;
		header("location: index.php");
	}
?>