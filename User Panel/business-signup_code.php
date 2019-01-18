<?php
	require("config.php");
if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
	$url = $_POST['url'];
	$cpyName = $_POST['company_name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$desc = $_POST['description'];
	$fname=$_FILES['logo']['name'];
	$ftype=$_FILES['logo']['type'];
	$fsize=$_FILES['logo']['size'];
	
	$temp_loc=$_FILES['logo']['tmp_name'];
	$fpath="".rand(00000000,99999999).$fname;
	$type_arr=array("jpg","JPG","JPEG","jpeg","png","PNG");
	$type=explode(".",$fname);
	$ext=end($type);

	
	$src = "SELECT * FROM `validate_web_table` WHERE url='$url' AND email='$email'";
	$rs = mysqli_query($con, $src) or die(mysqli_error($con));

	
	if(mysqli_num_rows($rs) == 0){
		if(in_array($ext,$type_arr)){
		if($fsize<=1024*1024*1.5 && $_FILES['logo']['error']==0){
			if(move_uploaded_file($temp_loc,"../Company Images/Validate Images/".$fpath)){

				$src = "INSERT INTO `validate_web_table` (url, name, description, logo, email, contact, address) VALUES ('$url', '$cpyName', '$desc', '$fpath', '$email', '$mobile', '$address')";
				$rs = mysqli_query($con, $src) or die(mysqli_error($con));
					if($rs==1){
						//echo "File uploaded successfully";
//						echo "<script>alert('File uploaded successfully')</script>";
//						header('location:business-signup.php?msg=File uploaded successfully');
						echo header('location:business-signup.php?msg=We will Validate your Registration then List it on WebRater.com');
						exit;
					}else{
						//echo "File not upload";
						echo "<script>alert('File not upload');</script>";
						header('location:business-signup.php?msg=File not upload');
						exit;
					}
			}else{
				//echo "File not upload";
				echo "<script>alert('Please try again');</script>";
				header('location:business-signup.php?msg=Please try again');
				exit;
			}
		}
		else{
			echo "<script>alert('The image not more than 1.5MB')</script>";
			header('location:business-signup.php?msg=The image not more than 1.5MB');
			exit;
		}
	}
		else{
		echo "<script>alert('Please select jpg or jpeg or png image file')</script>";
		header('location:business-signup.php?msg=Please select jpg or jpeg or png image file');
		exit;
		}
	}

	if(mysqli_num_rows($rs) > 0)
	{
		$msg = '<center>
					<h2 style="color: #233E96"></h2>
			  </center>';
		echo header('location:business-signup.php?msg=Website Already Exists !');
//		header("location: business-signup.php?msg=");
//		exit();
	}
//	elseif(strcmp($conPass, $pass) == 0)
//	{
//		
//	}
	else;
//	echo $_POST['url']." ".$_POST['mobile']." ".$_POST['email']." ".$_POST['cpyName']." ".$_POST['address']." ".$_POST['desc'];
//echo "<p>Hello World</p>";
}
?>