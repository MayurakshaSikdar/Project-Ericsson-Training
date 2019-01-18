<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Comments | WebRater.com</title>
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
        <li class="breadcrumb-item active">Comments</li>
      </ol>
      <div class="row">
        <div class="col-12">
<!--
          <h3>All Websites</h3>
          <a href="website_add.php" class="btn btn-warning">Add New Website</a>
-->
          <br>
          <?php
		  $src="SELECT c.*, u.name AS Uname, w.name AS WebName FROM `comments_table` c, `website_table` w, `user_table` u WHERE c.webid=w.webid AND c.uid=u.uid ORDER BY c.rating DESC";
		  $rs=mysqli_query($con,$src) or die(mysqli_error($con));
		  if(mysqli_num_rows($rs)>0){
			  ?>
              <br>
              <table cellpadding="10" class="col-12 table-hover table-bordered text-center table-striped" id="cat_table">
              <thead class="text-white bg-dark">
              	<tr>
                	<th>Sr. No.<i class="fa float-right fa-sort-alpha-asc" onClick="sortTable(0)" style="cursor: pointer"></i></th>
                    <th>Comment(s)</th>
                    <th>User Name<i class="fa float-right fa-sort-alpha-asc" onClick="sortTable(2)" style="cursor: pointer"></i></th>
                    <th>Company Name<i class="fa float-right fa-sort-alpha-asc" onClick="sortTable(3)" style="cursor: pointer"></i></th>
                    <th>Rating<i class="fa float-right fa-sort-alpha-asc" onClick="sortTable(4)" style="cursor: pointer"></i></th>
                    <th>Remove</th>
                </tr>
              </thead>
              <tbody>
              	<?php
				$sl=1;
				while($row=mysqli_fetch_assoc($rs)){
					?>
                   
                    <tr>
						<td><?php echo $sl ?></td>
						<td style="word-wrap: break-word;min-width: 160px;max-width: 256px;"><?php echo $row['comment']?></td>
						<td><?php echo $row['Uname']; ?></td>
						<td><?php echo $row['WebName']; ?></td>
<!--						<td><img src="<?php //echo "../../Company Images/Validate Images/".$row['logo']?>" width="50"></td>-->
						<td><?php echo $row['rating'] ?></td>
						<td align="center"><a href="comments_remove.php?id=<?php echo $row['cid'] ?>"><img src="../images/delete.png"></a></td>
                    </tr>
					<?php
					$sl++;
				}
				?>
              </tbody>
              </table>
			  <?php
		  }else{
			  echo "<br>No Comment(s) Found";
		  }
		  ?>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
    <script>
		function sortTable(n) {
		  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		  table = document.getElementById("cat_table");
		  switching = true;
		  // Set the sorting direction to ascending:
		  dir = "asc"; 
		  /* Make a loop that will continue until
		  no switching has been done: */
		  while (switching) {
			// Start by saying: no switching is done:
			switching = false;
			rows = table.rows;
			/* Loop through all table rows (except the
			first, which contains table headers): */
			for (i = 1; i < (rows.length - 1); i++) {
			  // Start by saying there should be no switching:
			  shouldSwitch = false;
			  /* Get the two elements you want to compare,
			  one from current row and one from the next: */
			  x = rows[i].getElementsByTagName("TD")[n];
			  y = rows[i + 1].getElementsByTagName("TD")[n];
			  /* Check if the two rows should switch place,
			  based on the direction, asc or desc: */
			  if (dir == "asc") {
				if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
				  // If so, mark as a switch and break the loop:
				  shouldSwitch = true;
				  break;
				}
			  } else if (dir == "desc") {
				if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
				  // If so, mark as a switch and break the loop:
				  shouldSwitch = true;
				  break;
				}
			  }
			}
			if (shouldSwitch) {
			  /* If a switch has been marked, make the switch
			  and mark that a switch has been done: */
			  rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
			  switching = true;
			  // Each time a switch is done, increase this count by 1:
			  switchcount ++; 
			} else {
			  /* If no switching has been done AND the direction is "asc",
			  set the direction to "desc" and run the while loop again. */
			  if (switchcount == 0 && dir == "asc") {
				dir = "desc";
				switching = true;
			  }
			}
		  }
		}
	</script>
  	
   	<?php
	require("footer.php");
	?>