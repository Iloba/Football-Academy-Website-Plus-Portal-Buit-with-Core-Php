<?php 
    require ('server.php');
    if (empty($_SESSION['uname'])) {
      header('location: login.php');
  }
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logo.png">
    <title>Register Player</title>
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
    <div class="contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-10"><br>
                   <?php 
                            if (isset($err)) {
                                echo "<div class='alert alert-danger text-center alt'><b>{$err}</b></div>";
                            }
                            if (isset($good)) {
                                echo "<div class='alert alert-success text-center '>{$good}</div>";
                            }

                     ?>
                   <div class="card">

                       <div class="card-header">
                       </div>
                       <div class="card-body">
                            <div class="form_players">
                              <h1 class="text-center lh1">Register Players</h1>
                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                    <input type="text" name="pname" class="form-control" placeholder="Enter Player Name" required><br>
                                    <input type="number" name="page" class="form-control" placeholder="Enter Player Age" required><br>
                                    <input type="text" name="ppos" class="form-control" placeholder="Enter Player Position" required><br>
                                    <input type="text" name="pbfoot" class="form-control" placeholder="Enter Player Best Foot" required><br>
                                    <input type="text" name="phgt" class="form-control" placeholder="Enter Player Height" required><br>
                                    <input type="submit" name="psubmit" class="btn btn-success btn-block" value="Register Player" >
                                    
                                </form>
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