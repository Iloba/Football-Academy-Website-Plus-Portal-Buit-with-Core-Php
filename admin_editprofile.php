<?php 
    require ('server.php');


   
  if (isset($_GET['edita'])) {
    $edit_id = $_GET['edita'];

    
    $query = "SELECT * FROM admin WHERE id = '$edit_id'";
    $run_query = mysqli_query($conn, $query);
    if (mysqli_num_rows($run_query) > 0) {
      while ($adata = mysqli_fetch_assoc($run_query)) {
        $id = $adata['id'];
        $username = $adata['uname'];
        $password = $adata['upass'];
         echo "<br>";
        echo " <h2 class='text-center'> Welcome, $username you Can Now Edit your Profile to your Own Specification</h2>";

      }
     } 
    


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['update'])) {
      $new_username = $_POST['new_username'];
      $new_password = $_POST['new_password'];



      if (strlen($new_password) < 5) {
        $error = "Password Strenght Too Weak";
      }else{
        $query = "UPDATE admin SET 
              uname = '{$new_username}',
              upass = '{$new_password}' ";
              $run_query = mysqli_query($conn, $query);
              if ($run_query) {
                $good = "Update Successful";
              }else{
                $err = "Update Failed Please Try Again";
              }
      }
    }
  }
  
  }
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logo.png">
    <title>Admin Profile- Edit</title>
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
    <div class="Contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-10"><br>
                  <?php 

                    if (isset($err)) {
                      echo "<div class='alert alert-danger text-center alt'>{$err}</div>";
                    }
                    if (isset($good)) {
                      echo "<div class='alert alert-success text-center '>{$good}</div>";
                    }
                  ?>
                   <div class="card">

                       <div class="card-header">
                           <h1 class="text-center"> Edit Your Profile</h1>
                           <form class="up_form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                            <label>New Username:</label>
                            <input type="text" name="new_username" class="form-control" placeholder=" Enter New Username"  value="" required><br>
                            <label>New Password:</label>
                            <input type="password" name="new_password" class="form-control" placeholder="Enter New Password" value="" required><br>
                            <input type="submit" name="update" class="btn btn-info btn-block" value="Update">
                            <center><a href="apa.php">Back</a></center>
                          </form>
                       </div>
                      
                   </div>
                   <a href="apa.php">Back</a>
                </div>
                <div class="col-md-1">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=59b6c4433bc6590014ffc442&product=inline-share-buttons"></script> 
    <!---Change Nav on Scroll--->
    <script type="text/javascript">
     $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
        $('nav').toggleClass('dark', $(this).scrollTop() > 700);
     });
    </script>
    <script src="https://unpkg.com/vue@2.5.3"></script>
</body>
</html>