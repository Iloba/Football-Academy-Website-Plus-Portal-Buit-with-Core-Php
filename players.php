<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="img/logo.png">
    <title>P & A Football Academy</title>
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
    <nav class=" height sticky-top navbar navbar-expand-lg navbar-dark bg-dark">
            <a style="margin-left: 60px;" class="navbar-brand" id="brand" href="index.php"><img  class="navbar-brand" src="img/logo-nav.png"></a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="                    navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
           <!--  <li class="nav-item">
                <a  id="nav_white" class="nav-link"   href="index.php">Home <span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item">
                 <a class="nav-link"   href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"   href="team.php">Our Team</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"   href="players.php">Players</a>
            </li>
             <li class="nav-item">
                <a class="nav-link"   href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"   href="contact.php">Get in Touch</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"   href="investment.php">P&A Investments</a>
            </li>
             <li class="nav-item">
                <a class="nav-link"   href="shop.php">Shop</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link"    href="patnership.php">Patnerships</a>
            </li>
        </ul>
    </div>
  </nav>
  <div class="teamHead" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-1">
                    &nbsp;
                </div>
                <div class="col-md-10"><br>
                    <h3 class="text-center about">Our Players<br> P & A Football Academy</h3><br>
                    <p class="text-center aboutpa">
                        P & A  is a football and media management outfit based in Kaduna Nigeria.
                        We are Fully Registered with the FA and Affiliated with the Nigerian Football Federation
                        We Recruit and Market Players of Different Categories of U17, U20 and Above

                    </p><br>
                </div><br>
                <div class="col-md-1">
                    &nbsp;
                </div><br><br>
            </div>
        </div>
    </div>
    <div class="teamTwo">
        <div class="container">
            <div class="row">
               <div class="col-md-2">
                    &nbsp;
                </div>
                <div class="col-md-8">
                    <h2 class="text-center teama">Our Players</h2>
                    <p class="text-center vtext">
                      
                    </p>
                    <div class="place">
                        <div class="placebox">
                            <p class="text-center">To Place a Request on our players, Kindly Click the Reach Player Button..you will be Redirected to a Contact Form, Kindly Fill the Form..Tell Us about your Interest in the Player of your Choice and We will Get Back to you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
    <div class="teamplayers">
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
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
                                         <div class="col-md-3">
                                                <div class="card card-body">
                                            
                                            <img class="img-fluid rem" src="transfers /<?php echo $timages['tpimg']; ?>">
                                             <h5 class=" p_name"><b>Name:</b>  <?php echo $timages['tpname'];  ?></h5>
                                            <small><h5 class="p_name img_date"><b>Age:</b>  <?php echo $timages['tpage']; ?></h5></small>
                                            <small><h5 class="p_name img_date"><b>Height:</b>  <?php echo $timages['tphgt']; ?></h5></small>
                                            <small><h5 class="p_name img_date"><b>Position:</b>  <?php echo $timages['tppos']; ?></h5></small>
                                            <small><h5 class="p_name img_date"><b>Bestfoot:</b>  <?php echo $timages['tpbfoot']; ?></h5></small>
                                            <a class="btn btn-success" href="contact.php">Reach Player</a>
                                          </div>
                                          </div>  
                                       
                                    <?php
                                endwhile;
                                endif;


                                ?>
                  
            </div>
        </div>
    </div>
   <footer data-aos="fade-up" data-aos-duration="2000">
            <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3"><br><br>
                                &nbsp;
                            </div>
                            <div class="col-md-2 "><br><br>
                                <h5>Our Network</h5>
                                <br>
                                <p class="height">
                                    <a class="footer_link" href="about.php">Address</a><br>
                                    <a class="footer_link" href="about.php">Phone</a><br>
                                    <a class="footer_link" href="about.php">Email</a><br>   
                                </p>
                            </div>
                            <div class="col-md-2"><br><br>
                                <h5>Site Links</h5>
                                <br>
                                <p class="height">
                                    <a class="footer_link" href="index.php">Home</a><br>
                                    <a class="footer_link" href="about.php">About</a><br>
                                    <a class="footer_link" href="team.php">Our Team</a><br>
                                    <a class="footer_link" href="players.php">Players</a><br>
                                </p>
                                
                            </div>
                            <div class="col-md-2"><br><br>
                                <h5>About Us</h5>
                                <br>
                                <p class="height">
                                    <a class="footer_link" href="about.php">About Us</a><br>
                                    <a class="footer_link" href="team.php">Our Team</a><br>
                                    <a class="footer_link" href="players.php">Our Players</a><br>
                                    <a class="footer_link" href="contact.php">Contact Us</a><br>
                                    <a class="footer_link" href="login.php" target="_blank">Admin</a><br>
                                </p>
                            </div>
                            <div class="col-md-3"><br><br>
                                &nbsp;
                            </div>
                            
                        </div> <br> <br>
                    </div>  

                    </div>
            </div>
            <!---line--->
            <div class="line">
                    <hr style="border: 0.5px solid #fff;">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        
                        <div class="flex">
                            <a class="footer_link" href="index.php"><h5>P & A Football Academy</h5></a>&nbsp;&nbsp;&nbsp;
                            <a target="_blank" href="https://www.facebook.com/PA-Football-Academy-106349401441629"><img class="icon_size" src="img/facebook.png" alt=" P & A Football Academy"></a>&nbsp;&nbsp;&nbsp;
                            <a target="_blank" href="https://twitter.com/PAFootballAcad1"><img class="icon_size" src="img/twitter.png" alt=" P & A Football Academy"></a>&nbsp;&nbsp;&nbsp;
                            <a target="_blank" href="https://www.instagram.com/p_a_football_academy/"><img class="icon_size" src="img/insta.png" alt=" P & A Football Academy"></a>&nbsp;&nbsp;&nbsp;
                            <a  target="_blank" href="https://www.linkedin.com/in/p-a-football-academy-kaduna-bb5531205/"><img class="icon_size" src="img/linkedin.png" alt=" P & A Football Academy"></a>&nbsp;&nbsp;&nbsp; <br>
                            <a  target="_blank" style="font-size: 12px;" href="https://sney.netlify.app">Website Design</a>
                        </div>
                            
                    </div>
                    
                    <div class="col-md-1">
                        &nbsp;
                    </div>
                    <div class="col-md-6">
                        <span>&copy; P  & A Football Academy, All rights Reserved  Terms of Use | Privacy Policy</span>
                         <div class="share"><div class="sharethis-inline-share-buttons"></div></div>
                    </div>
                </div>
            </div>
            <div class="line">
                <hr style="border: 0.5px solid #fff;">
            </div><br>
    </footer>
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
    <!-- <script type="text/javascript">
     $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
        $('nav').toggleClass('dark', $(this).scrollTop() > 700);
     });
    </script> -->
</body>
</html>