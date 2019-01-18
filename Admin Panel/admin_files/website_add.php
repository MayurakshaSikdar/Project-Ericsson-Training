<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Website Add | WebRater.com</title>
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
        <li class="breadcrumb-item active">Add Site</li>
       </ol>
      <div class="row">
        <div class="col-12">
          <h3>Add New Website</h3>
          <div class="col-6">
          	<form name="website" id="frm" method="post" enctype="multipart/form-data" action="website_add_code.php">
<!--
            	<div class="form-group">
                	<label>Enter Name of the Type</label>&nbsp &nbsp &nbsp
					<select name="type_name" class="form-control dropdown">
                    <option value="def" class="dropdown-item">--Select Type--</option>
					<option value="Veg">Veg</option>
					<option value="Non-Veg">Non-Veg</option>
					</select>
				</div>
-->
				<br>
				<div class="form-group">
                	<label>Website URL *</label>
                    <input type="url" name="url" class="form-control" required>
				</div>
				<div class="form-group">
                	<label>Company Name *</label>
                    <input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
                	<label>Email *</label>
                    <input type="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
                	<label>Mobile Number *</label>
                    <input type="tel" name="mobile" size="10" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" required>
				</div>
				<div class="form-group">
                	<label>Company Address</label>
					<textarea rows="5" id="ftext" name="address" class="form-control" form="frm" wrap="soft"></textarea>
				</div>
				<div class="form-group">
                	<label>Description</label>
                    <textarea rows="5" id="fdesc" name="desc" form="frm" class="form-control" wrap="soft"></textarea>
				</div>
				<div class="form-group">
                	<label>Company Logo</label>
                    <input type="file" name="ff" class="form-control-file">
				</div>
				<br>
				<input type="submit" class="btn btn-primary" name="ok" value="Add New">
           		<br><br><br>
            </form>
          </div>
        </div>
      </div>      
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   	<?php
	require("footer.php");
	?>