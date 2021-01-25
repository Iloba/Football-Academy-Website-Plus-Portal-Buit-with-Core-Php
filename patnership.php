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
                <a class="nav-link"   href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"   href="investment.php">P&A Investments</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link"    href="patnership.php">Patnerships</a>
            </li>
        </ul>
    </div>
  </nav>
  <div class="PatnerHead" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="row"><br>
                <div class="col-md-1">
                    &nbsp;
                </div>
                <div class="col-md-10"><br>
                    <?php 
                            if (isset($err)) {
                                echo "<div class='alert alert-danger text-center alt'><b>{$error}</b></div>";
                            }
                            if (isset($good)) {
                                echo "<div class='alert alert-success text-center '>{$good}</div>";
                            }

                     ?>
                    <h3 class="text-center about">We are Affiliated with The NFF, <br> We are Patnered with International Clubs through Memorandum of Understanding (Mou)</h3><br>
                    <p class="text-center aboutpa">
                        
                    </p><br>
                </div><br>
                <div class="col-md-1">
                    &nbsp;
                </div><br><br>
            </div>
        </div>
    </div>
    <div class="patnerwhite" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <div class="col-md-12">
                <img class="img-fluid nff2 mx-auto d-block" src="img/nff.png">
                <p class="text-center nffw">We are Fully Registered under the Nigerian Football Federation</p>
            </div>
        </div>
    </div>
    <div class="patnershipOne">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    &nbsp;
                </div>
                <div class="col-md-10">
                   <h4 style="color: #fff;" class="text-center welcome ">Our Patnerships</h4>
                   <p class="teamdet1">
                    P & A Football Academy Nigeria as a Sporting Organization is in Patnership with a number of International Clubs. we also Promote players through Regular Scouting Programmes.
                  </p>
                  
                </div>
                <div class="col-md-1">
                    &nbsp;
                </div>
            </div>
        </div>
    </div>
    <div class="contact_form" data-aos="fade-up" data-aos-duration="2000"><br>
          <h2 class="text-center contact">Become a Patner Today</h2>
        <div class="container">
            <div class="card card-body">
                <div class="row main-form">
                    <div class="col-md-2">
                        &nbsp;
                    </div>
                    <div class="col-md-8">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"><br>
                            <label>Full Name</label>
                            <input type="text" name="pname" class="form-control" placeholder="Enter Your Full Name " required><br>
                            <label>Email</label>
                            <input type="Email" name="pemail" class="form-control" placeholder="Enter Your Email Address or Phone Number" required><br>
                            <label>Contact Address</label>
                            <input type="text" name="padr" class="form-control" placeholder="Enter Your Contact Address" required><br>
                            <label>Tell Us how you want to Patner with us</label>
                            <textarea class="form-control" rows="9" name="pmsg" placeholder="Tell Us how you want to patner with us" required></textarea><br>
                            <button class="btn btn-info btn-block" name="reg_patner" type="submit">Submit</button>
                        </form><br>
                    </div>
                    <div class="col-md-2">
                       &nbsp;
                    </div>
            </div>
            </div>
        </div>
    </div>
    <div class="sectionThree" data-aos="fade-up" data-aos-duration="2000">
            
    </div>
        
   <div style="padding: 50px;" class="bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                      <p class="addr"><span class="color">Visit Us Our Training Ground</span> <br>Open Correctional Centre, Television, Kaduna. </p>
                </div>
                 <div class="col-md-3">
                    <p class="addr"><span class="color">Visit Us today @</span> <br> NL 16 Constitution Road, Opp. Ahmadu Bello Stadium, Kaduna, Nigeria. </p>
                </div>
                 <div class="col-md-3">
                    <p class="addr"><span class="color">Call us On </span><br> +234(0)943356733 <br>+234(0)943356733 <br> +234(0)943356733</p>
                </div>
                <div class="col-md-2">
                    <p class="addr"><span class="color">Send Us a Mail</span> <br> p&aacademy@gmail.com <br> p&aacademy@gmail.com</p>
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
</body>
</html>