<?php require('config.php');
	  require('check_session.php');
 ?>

<?php
$url = $_POST['url'];
$name=$_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$address = $_POST['address'];
$desc = $_POST['desc'];
$webid = $_POST['webid'];;
/*print_r($_FILES['ff']);
exit;*/
if(empty($_FILES['ff']['name'])){
	//echo "Hi";
	$upd="UPDATE `website_table` SET `url`='$url', `name`='$name', `email`='$email', `contact`='$mobile', `address`='$address', `description`='$desc' WHERE `webid`='$webid'";
	//echo $upd;
	$res=mysqli_query($con,$upd) or die( mysqli_error($con));
		if($res==1){
			//echo "File uploaded successfully";
			header('location:website.php?msg=Update successfully');
			exit;
		}else{
			//echo "File not upload";
			header('location:website.php?msg=unsuccessful update');
			exit;
		}
}else{
	$fname=$_FILES['ff']['name'];
	$ftype=$_FILES['ff']['type'];
	$fsize=$_FILES['ff']['size'];
	$temp_loc=$_FILES['ff']['tmp_name'];
	$fpath="Company Images/".rand(00000000,99999999).$fname;
	$type_arr=array("jpg","JPG","JPEG","jpeg","png","PNG");
	$type=explode(".",$fname);
	$ext=end($type);
	if(in_array($ext,$type_arr)){
		if($fsize<=1024*1024*1.5 && $_FILES['ff']['error']==0){
			if(move_uploaded_file($temp_loc,"../../".$fpath)){
				$upd="UPDATE `website_table` SET `url`='$url', `name`='$name', `email`='$email', `contact`='$mobile', `address`='$address', `description`='$desc', `logo`='$fpath' WHERE `webid`='$webid'";
				$res=mysqli_query($con,$upd) or die( mysqli_error($con));
					#echo $res;
					if($res==1){
						//echo "File uploaded successfully";
						header('location:website.php?msg=Update successfully');
						exit;
					}else{
						//echo "File not upload";
						header('location:website.php?msg=File not uploaded');
						exit;
					}
			}else{
				//echo "File not upload";
				header('location:website.php?msg=Please try again');
				exit;
			}
		}
		else{
			header('location:website.php?msg=The image not more than 1.5MB');
			exit;
		}
	}else{
		header('location:website.php?msg=Please select jpg or jpeg or png image file');
		exit;
	}
}
?>