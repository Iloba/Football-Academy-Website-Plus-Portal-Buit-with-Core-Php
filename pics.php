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
    <div class="contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    
                </div>
                <div class="col-md-10"><br>
                   <?php if (isset($err)) {
                        echo "<div class='alert alert-danger text-center alt'><b>{$err}</b></div>";
                    }
                    if (isset($good)) {
                        echo "<div class='alert alert-success text-center '>{$good}</div>";
                    }
                     ?>
                   <div class="card">

                       <div class="card-header">
                           <h1 class="text-center">Upload Picture to Gallery</h1>
                       </div>
                       <div class="card-body">
                            <div class="form_players">
                                <form method="POST" action="" enctype="multipart/form-data">
                                  <input type="hidden" name="size" value="10000000">
                                  <label><b>Choose File (Images Only)</b></label>
                                    <input type="file" name="image" class="form-control" placeholder="Enter Player Name" required><br>
                                    <input type="text" name="pictext" class="form-control" placeholder="Enter Picture Text" required><br>
                                    <input type="text" name="date" class="form-control" placeholder="01-12-2020" required><br> 
                                    <input type="submit" name="picsubmit" class="btn btn-success btn-block" value="Upload Pic" >
                                    
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