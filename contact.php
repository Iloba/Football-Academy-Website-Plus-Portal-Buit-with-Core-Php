<?php 
    require ('server.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logo.png">
    <title>Contact Us</title>
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
        <a class="navbar-brand" id="brand" href="index.php">P & A Football Academy</a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="                    navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a  id="nav_white" class="nav-link"   href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
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
                     <?php 
                            if (isset($err)) {
                                echo "<div class='alert alert-danger text-center alt'><b>{$err}</b></div>";
                            }
                            if (isset($good)) {
                                echo "<div class='alert alert-success text-center '>{$good}</div>";
                            }

                     ?>
                    <h3 class="text-center about">Contact Us Today<br> P & A Football Academy</h3><br>
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
    </div><br>
    <div class="place">
                        <div class="placebox">
                            <p class="text-center">To Place a Request on our players, Place an Order on our Jerseys and Products, Kindly  Kindly Fill the Form Below ..Tell Us about your Interest in the Player/Jersey/Product of your Choice and We will Get Back to you</p>
                        </div>
                    </div>
    <marquee><h4>Reach  our Players for Sale.. Place Orders on our jerseys and Products Contact Us Today</h4></marquee>
    <div class="contact_form" data-aos="fade-up" data-aos-duration="2000"><br>
          <h2 class="text-center contact">Contact Us Today</h2>
        <div class="container">
            <div class="row main-form">
                <div class="col-md-2">
                    &nbsp;
                </div>
                <div class="col-md-8">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"><br>
                        <label>Your Full Name</label>
                        <input type="text" name="cname" class="form-control" placeholder="Enter Your Full Name " required><br>
                          <label>Email Address</label>
                        <input type="text" name="cemail" class="form-control" placeholder="Enter Your Email Address or Phone Number" required><br>
                        <label>Message</label>
                        <textarea class="form-control" rows="9" name="cmsg" placeholder="Enter Message" required></textarea><br>
                        <button class="btn btn-success btn-block" name="submit" type="submit">Contact Us</button>
                    </form><br>
                </div>
                <div class="col-md-2">
                   &nbsp;
                </div>
            </div>
        </div>
    </div>
    <div class="contactTwo">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    &nbsp;
                </div>
                 <div class="col-md-3">
                    <p class="addr"><span class="color">Visit Us today @</span> <br> No 3 Malali Road Malali Kaduna</p>
                </div>
                 <div class="col-md-3">
                    <p class="addr"><span class="color">Call us On </span><br> +234(0)943356733 <br>+234(0)943356733 <br> +234(0)943356733</p>
                </div>
                <div class="col-md-2">
                    <p class="addr"><span class="color">Send Us a Mail</span> <br> p&aacademy@gmail.com <br> p&aacademy@gmail.com</p>
                </div>
                 <div class="col-md-2">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
    <footer data-aos="fade-up" data-aos-duration="2000">
            <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2"><br><br>
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
                                <h5>Language</h5>
                                <br>
                                <p class="height">
                                    <a class="footer_link" href="#">English</a><br>
                                    <a class="footer_link" href="#">Espanyol</a><br>
                                    <a class="footer_link" href="#">French</a><br>
                                    <a class="footer_link" href="#">Deutsch</a><br>
                                    <a class="footer_link" href="#">More....</a>
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
                                </p>
                            </div>
                            <div class="col-md-2"><br><br>
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
                            <a href="#"><img class="icon_size" src="img/facebook.png"></a>&nbsp;&nbsp;&nbsp;
                            <a href="#"><img class="icon_size" src="img/twitter.png"></a>&nbsp;&nbsp;&nbsp;
                            <a href="#"><img class="icon_size" src="img/insta.png"></a>&nbsp;&nbsp;&nbsp;
                            <a href="#"><img class="icon_size" src="img/google.png"></a>&nbsp;&nbsp;&nbsp;
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
    <script type="text/javascript">
     $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
        $('nav').toggleClass('dark', $(this).scrollTop() > 700);
     });
    </script>
    <script src="https://unpkg.com/vue@2.5.3"></script>
</body>
</html>