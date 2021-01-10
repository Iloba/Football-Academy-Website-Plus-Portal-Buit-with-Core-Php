<?php 
    require ('server.php');
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="img/logo.png">
    <title>Our Players</title>
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
                           <h1 class="text-center">Our Players</h1>
                       </div>
                       <div class="card-body">
                           <div class="table table-responsive">
                               <table class="table table-bordered">
                                   <?php 

                                        
                                        
                     

                                        require('conn.php');

                                        //Delete  Message
                                        if (isset($_POST['delete_btn'])) {
                                            $delete_id = $_POST['delete_id'];

                                            $query = "DELETE FROM players WHERE id = '$delete_id'";
                                            $run_query = mysqli_query($conn, $query);
                                            if ($run_query) {
                                                $good = "Delete Succesful";
                                            }else{
                                                $err ="Delete Failed";
                                            }
                                        }

                                       $query = "SELECT * FROM players";
                                       $run_query = mysqli_query($conn, $query);
                                       if (mysqli_num_rows($run_query) > 0) :
                                           # code...
                                       ?>
                                       <thead>
                                                <tr class="text-center">
                                                    <th>ID</th>
                                                    <th> Player Name</th>
                                                    <th>Player Age</th>
                                                    <th>Player Position</th>
                                                    <th>Player Best Foot</th>
                                                    <th>Player Height</th>
                                                    <th>Action</th>
                                                </tr>
                                       </thead>
                                       <?php if (isset($err)) {
                                            echo "<div class='alert alert-danger text-center alt'><b>{$err}</b></div>";
                                        }
                                        if (isset($good)) {
                                            echo "<div class='alert alert-success text-center '>{$good}</div>";
                                        }
                                         ?>
                                    <?php
                                        while ($pl = mysqli_fetch_assoc($run_query)) :
                                        
                                    ?>

                                    <tbody>

                                        <tr class="text-center">
                                            <td><?php echo $pl['id']; ?></td>
                                            <td><?php echo $pl['playername']; ?></td>
                                            <td><?php echo $pl['playerage']; ?></td>
                                            <td><?php echo $pl['playerpos']; ?></td>
                                            <td><?php echo $pl['playerbf']; ?></td>
                                            <td><?php echo $pl['playerh']; ?></td>
                                            <td>
                                                <form method="POST">
                                                    <input type="hidden" name="delete_id" value="<?php echo $pl['id']; ?>">
                                                    <input type="submit" name="delete_btn" value="Delete" class="btn btn-danger">
                                                </form>
                                            </td>
                                           
                                        </tr>
                                    </tbody>
                                    <?php
                               endwhile;
                           endif;
                           ?>

                               </table>
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