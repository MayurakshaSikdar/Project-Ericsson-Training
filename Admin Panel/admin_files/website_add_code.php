<?php
	require('config.php');
	require('check_session.php');
?>
		<?php
			if(isset($_POST["ok"]))
			{
				$url = $_POST['url'];
				$name = $_POST["name"];
				$email = $_POST["email"];
				$mobile = $_POST['mobile'];
				$desc = $_POST['desc'];
				$address = $_POST['address'];
				$fname=$_FILES['ff']['name'];
				$ftype=$_FILES['ff']['type'];
				$fsize=$_FILES['ff']['size'];
				$temp_loc=$_FILES['ff']['tmp_name'];
				$logo="Company Images/".rand(00000000,99999999).$fname;
				$type_arr=array("jpg","JPG","JPEG","jpeg","png","PNG");
				$type=explode(".",$fname);
				$ext=end($type);
				$src = "SELECT name, url FROM website_table WHERE name='$name' AND url='$url'";
				$rs=mysqli_query($con,$src) or die(mysqli_error($con));
				if(mysqli_num_rows($rs)>0){
					echo "<br>This Website/Company Type Already Exists!";
				}
				else
				{
					if(in_array($ext,$type_arr)){
						if($fsize<=1024*1024*1.5 && $_FILES['ff']['error']==0){
							if(move_uploaded_file($temp_loc,"../../".$logo)){
								$sql = "INSERT INTO website_table (url, name, description, logo, contact, email, address) VALUES('$url', '$name', '$desc', '$logo', '$mobile', '$email', '$address')";	
								$res = mysqli_query($con, $sql) or die(mysqli_error($con));
								if($res==1){
									//echo "File uploaded successfully";
									echo "<script>alert('File uploaded successfully')</script>";
									header('location:website.php?msg=File uploaded successfully');
									exit;
								}else{
									//echo "File not upload";
									echo "<script>alert('File not upload');</script>";
									header('location:website.php?msg=File not upload');
									exit;
								}
							}
							else{
								//echo "File not upload";
								echo "<script>alert('Please try again');</script>";
								header('location:website.php?msg=Please try again');
								exit;
							}
						}
						else{
							echo "<script>alert('The image not more than 1.5MB')</script>";
							header('location:website.php?msg=The image not more than 1.5MB');
							exit;
						}
					}
					else{
						echo "<script>alert('Please select jpg or jpeg or png image file')</script>";
						header('location:website.php?msg=Please select jpg or jpeg or png image file');
						exit;
					}
				}
			}
		?>