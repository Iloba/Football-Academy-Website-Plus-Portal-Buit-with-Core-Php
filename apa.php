<?php 
    
   require ('server.php');
  

  if (empty($_SESSION['uname'])) {
      header('location: login.php');
  }

        


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <link rel="icon"  href="./img/logo.png">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>P & A Admin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
            <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <?php 
        if (isset($_SESSION['uname'])) {
            echo $_SESSION['success'];
        }


    ?> 
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="apa.php"></a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="contact.php"><i class="icon-envelope"></i></a></li>
                            <li><a href="charts.php"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-header">Useful Links</li>
                                    <li><a href="playersa.php">Players</a></li>
                                    <li><a href="trasnfer.php">Transfer</a></li>
                                    
                                </ul>
                            </li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="img/ceo.jpg" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="admin_profile.php" target="_blank">Your Profile</a></li>
                                    <li><a href="admin_editprofile.php?edita=<?php echo $_SESSION['id'];  ?>" target="_blank">Edit Profile</a></li>
                                    <li class="divider"></li>
                                    <li><a href="apa.php?logout='1'">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper" id="sidemenu">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="apa.php" ><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="register_players.php" target=""><i class="menu-icon icon-bullhorn"></i>Register Players </a>
                                </li>
                                <li><a href="transfer.php" target=""><i class="menu-icon icon-bullhorn"></i>Upload Player for Transfer</a>
                                </li>
                                <li><a href="pics.php" target=""><i class="menu-icon icon-bullhorn"></i>Upload Picture to Gallery </a>
                                </li>
                                 <li><a href="register.php" target=""><i class="menu-icon icon-bullhorn"></i>Register a New Admin User </a>
                                </li>
                                <li><a href="apa.php?logout='1'" target=""><i class="menu-icon icon-bullhorn"></i>Logout </a>
                                </li>
                            </ul>
                            <!--/.widget-nav-->
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="playersa.php" target="" class="btn-box big span4"><i class=" icon-user"></i><b id="alert"></b>
                                        <p class="text-muted">
                                            Players Manager</p>
                                    </a><a href="gallerya.php" target="" class="btn-box big span4"><i class="icon-picture"></i><b id="alert"></b>
                                        <p class="text-muted">
                                            Gallery Manager</p>
                                    </a><a href="transfera.php" class="btn-box big span4"><i class="icon-group"></i><b id="alert"></b>
                                        <p class="text-muted">
                                            Transfer Manager</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                
                                                <a href="contacts.php" target="" class="btn-box small span4"><i class="icon-envelope"></i><b id="alert"> Messages/Contacts </b>
                                                </a><a href="patners.php" target="" class="btn-box small span4"><i class="icon-group"></i><b id="alert">  Patners</b>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                     </div>
                </div>
        </div>
   
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; P & A Football Academy </b>All rights reserved.
            </div>
        </div>

<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="scripts/common.js" type="text/javascript"></script>
    </body>
</html