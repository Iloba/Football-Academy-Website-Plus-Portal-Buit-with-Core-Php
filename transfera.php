<?php  

	require 'server.php';
	 if (empty($_SESSION['uname'])) {
      header('location: login.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Transfer Manager</title>
	<link rel="icon" href="img/logo.png">
    <title>Upload Picture</title>
    <meta charset="utf-8">
    <meta name="description" content="P & A Football Academy Kaduna & Investments">
    <meta name="keywords" content="p & a, pa, football academy, kaduna academy, printing press in kaduna, embroidery, general, contracts,
    scouting, young football stars, football academy, good players">
    <meta name="author" content="Emeka Iloba Timothy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>   
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 col-sm-4 col-xs-12"><br>
				<div class="card">
					<div class="card-header">
						<img class="rounded mx-auto d-block logop" src="img/logo.png">
						<h2 class="text-center">Uploaded Pictures</h2>
					</div>
					<div class="card-body">
						<div class="row">
							
								<?php 

									require ('conn.php');
								if (isset($_POST['delete_btn'])) {
									$delete_id = $_POST['delete_id'];

									$query = "DELETE FROM transfer WHERE id = '$delete_id'";
									$run_query = mysqli_query($conn, $query);
									if ($run_query) {
										$good = "Delete Successful";
									}else{
										$error = "Delete Failed";
									}
								}


								 if (isset($err)) {
                   					 echo "<div class='alert alert-danger text-center alt'><b>{$err}</b></div>";
                			}
               				 		if (isset($good)) {
                  			 		 echo "<div class='alert alert-success text-center '>{$good}</div>";
               					 }
         


											
									
								
								$query = "SELECT * FROM transfer";
								$run_query = mysqli_query($conn, $query);
								if (mysqli_num_rows($run_query) > 0) :
									?>
									
									<?php 

									while ($timages = mysqli_fetch_assoc($run_query)) :
										?>
										<div class="col-md-3 col-sm-4 col-xs-12 rem"><br>
											
											<img class="img-fluid rem" src="transfers /<?php echo $timages['tpimg']; ?>">
											 <h4 class=" p_name"><b>Name:</b>  <?php echo $timages['tpname'];  ?></h4>
											<small><h4 class=" img_date"><b>Age:</b>  <?php echo $timages['tpage']; ?></h4></small>
											<small><h4 class="img_date"><b>Height:</b>  <?php echo $timages['tphgt']; ?></h4></small>
											<small><h4 class=" img_date"><b>Position:</b>  <?php echo $timages['tppos']; ?></h4></small>
											<small><h4 class=" img_date"><b>Bestfoot:</b>  <?php echo $timages['tpbfoot']; ?></h4></small>
											<form method="POST">
												<input type="hidden" name="delete_id" value="<?php echo $timages['id']; ?>">
												<center><input type="submit" name="delete_btn" value="Delete" class="btn btn-danger btn-sm"></center>
											</form>
										</div>
									<?php
								endwhile;
								endif;


								?>
						</div>
						<center><a href="apa.php">Back</a></center>
					</div>
				</div><br>
				
			</div>
		</div>
	</div>
</body>
</html>