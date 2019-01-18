<?php

require('config.php');

if(isset($_POST['type']) && $_POST['type']=='search'){
	$str = mysqli_real_escape_string($con,$_POST['name']);
	$output = [];
	$sql = mysqli_query($con, "SELECT `webid`,`url`,`name` FROM `website_table` WHERE name LIKE '%$str%'") or die(mysqli_query($con));
	if(mysqli_num_rows($sql) > 0){
		while($data = mysqli_fetch_assoc($sql)){
			$output[]=$data;
		}
	}
	echo json_encode($output);
	exit();
}

if(isset($_POST['name']) && isset($_POST['url']) && isset($_POST['title']) && isset($_SESSION['user'])){
	$uid = intval($_SESSION['user']['uid']);
	$name = $_POST['name'];
	$url = $_POST['url'];
	$title = $_POST['title'];
	$comment = $_POST['comment'];
	$sql = mysqli_query($con, "SELECT webid FROM `website_table` WHERE name='$name'") or die(mysqli_query($con));
	if(mysqli_num_rows($sql) == 0)
		echo "NO SUCH WEBSITE EXIST IN THE SYSTEM";
	else{
		$rs = mysqli_fetch_assoc($sql);
		$webid = $rs['webid'];
		$query = mysqli_query($con, "INSERT INTO `comments_table` (webid, uid, title, comment) VALUES ('$webid', '$uid', '$title', '$comment')") or die(mysqli_error($con));
		echo '<h1>Comment Has Been Added.<br>
			  Thanks for Commenting</h1>';
		$output = shell_exec('python Sentiment.py 2>&1');
		echo $output;
		//header('location: company_view.php?webid='.$webid);
	}
}
else{header('location:login.php');}
?>