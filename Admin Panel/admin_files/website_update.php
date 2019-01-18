<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Website Update | WebRater.com</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php require("header.php") ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><a href="website.php">Website</a></li>
        <li class="breadcrumb-item active">Update Website</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h3>Update or Modify Website</h3>
          <div class="col-6">
          	<?php
				$id=$_GET['id'];
				$src="SELECT * FROM website_table WHERE webid='$id'";
				$rs=mysqli_query($con,$src)or die(mysqli_error($con));
				$rec=mysqli_fetch_assoc($rs);
			?>
          	
            <form name="updateWebsite" id="update" method="post" enctype="multipart/form-data" action="website_update_code.php">
				<br>
				<div class="form-group" style="display: none">
                	<label>Website ID *</label>
                    <input type="hidden" name="webid" class="form-control" required value="<?php echo $rec['webid'] ?>">
				</div>
				<div class="form-group">
                	<label>Website URL *</label>
                    <input type="url" name="url" class="form-control" required value="<?php echo $rec['url'] ?>">
				</div>
				<div class="form-group">
                	<label>Company Name *</label>
                    <input type="text" name="name" class="form-control" required value="<?php echo $rec['name'] ?>">
				</div>
				<div class="form-group">
                	<label>Email *</label>
                    <input type="email" name="email" class="form-control" required value="<?php echo $rec['email'] ?>">
				</div>
				<div class="form-group">
                	<label>Mobile Number *</label>
                    <input type="tel" name="mobile" size="10" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" required value="<?php echo $rec['contact'] ?>">
				</div>
				<div class="form-group">
                	<label>Company Address</label>
					<textarea rows="5" id="ftext" name="address" class="form-control" form="update" wrap="soft"> <?php echo $rec['address'] ?></textarea>
				</div>
				<div class="form-group">
                	<label>Description</label>
                    <textarea rows="5" id="fdesc" name="desc" form="update" class="form-control" wrap="soft"><?php echo $rec['description'] ?></textarea>
				</div>
				<div class="form-group">
                	<label>Company Logo</label>
                    <input type="file" name="ff" class="form-control-file" value="<?php echo $rec['logo'] ?>">
				</div>
				<br>
				<input type="submit" class="btn btn-primary" name="ok" value="Add New">
           		<br><br><br>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   	<?php
	require("footer.php");
	?>