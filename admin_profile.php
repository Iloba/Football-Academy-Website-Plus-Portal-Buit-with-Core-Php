<?php

 include 'server.php'; 
 if (empty($_SESSION['uname'])) {
      header('location: login.php');
  }

 ?>
<?php 
    require ('server.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logo.png">
    <title>Admin Profile</title>
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
                   <div class="card">

                       <div class="card-header">
                           <h1 class="text-center">Your Profile</h1>
                       </div>
                       <div class="card-body">
                            <h1 class="text-center">Welcome, <?php if (isset($_SESSION['uname'])) {
                                  echo $_SESSION['uname'];
                                }; ?></h1><br>
                                <h2 class="text-center">Here are your Details</h2> <br>
                                <p class="text-center ad_det">  username: <b><?php if (isset($_SESSION['uname'])) {
                                  echo $_SESSION['uname'];
                                }?></b> <br>
                                  Password: <b><?php if (isset($_SESSION['upass'])) {
                                    echo $_SESSION['upass'];
                                  } ?></b>
                                </p><br>
                                <div class="text-center">
                                  <label>Edit Profile:</label><br>
                                  <a href="admin_editprofile.php?edita=<?php echo $_SESSION['id'];  ?>" class=" text-center btn btn-info" target="_blank">Edit Profile <?php echo $_SESSION['id']; ?></a>
                                </div><br>
                                <div class="text-center">
                                  <a href="apa.php">Back</a>
                                </div>
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