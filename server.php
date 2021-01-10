<?php 
	session_start();
	require("conn.php");

	
	//Register Admin
	$runame = "";
	$rpass = "";
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['rsubmit'])) {
			$runame = strip_tags($_POST['runame']);
			$rpass = strip_tags($_POST['rpass']);

			if (strlen($rpass) < 8){
				$err = "Password Too Short It Must Be up to Eight Digits";
			}elseif(strlen($runame) < 8){
				$err = "Username Too Short It Must Be up to Eight Digits";
			}
			else{
				$query = "INSERT INTO admin(uname, upass) VALUES ('$runame', '$rpass')";
				$run_query = mysqli_query($conn, $query);
				if ($run_query) {
					$good  = "Registration Successful";
				}else{
					$err = "Registration Failed";
				}
			}
		}
	}

	//Log Admin Into Dashboard
	if (isset($_POST['lsubmit'])) {
		$luname = strip_tags( $_POST['luname']);
		$lpass = strip_tags($_POST['lpass']);


		if (strlen($luname) < 5) {
			$err = "Username Not Recognized";
		}else{
			$query = "SELECT * FROM admin where  uname = '$luname' && upass = '$lpass' Limit 1";
			$run_query = mysqli_query($conn, $query);
			if (mysqli_num_rows($run_query) == 1) {
				$_SESSION['uname'] = $luname;
				$_SESSION['success'] = "you are now logged in Admin";
				$_SESSION['upass'] = $lpass;
				$_SESSION['id'] = $id;
				header('location: apa.php');
			}else{
				$err = "Wrong Username/Password Match Please Check and Try again";
			}
		}
	}


	//Logout User
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['uname']);
		unset($_SESSION['success']);
		unset($_SESSION['upass']);
		header("location: login.php");
		exit();
	}





	//Contact Section
	$cname ="";
	$cemail ="";
	$cmsg = "";
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if (isset($_POST['submit'])) {
			$cname = strip_tags($_POST['cname']);
			$cemail = strip_tags($_POST['cemail']);
			$cmsg = strip_tags($_POST['cmsg']);

			$query =  "INSERT INTO contact (name, email, msg) VALUES ('$cname', '$cemail', '$cmsg')";
			$run_query = mysqli_query($conn, $query);
			if ($run_query) {
				$good = "Message Sent Successfuly Kindly Be Patient We Will Get Back to You";
			}else{
				$err = "Failed To Send Message Pls Check Form Details and Try Again";
			}
		}
	}


	//PatnerShip Section
	$pname = "";
	$pemail = "";
	$padr = "";
	$pmsg = "";
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		if (isset($_POST['reg_patner'])) {
			$pname = strip_tags($_POST['pname']);
			$pemail = strip_tags($_POST['pemail']);
			$padr = strip_tags($_POST['padr']);
			$pmsg = strip_tags($_POST['pmsg']);

			$query = "INSERT INTO patners (name, email, Address, Msg) VALUES ('$pname', '$pemail', '$padr', '$pmsg')";
			$run_query = mysqli_query($conn, $query);
			if ($run_query) {
				$good = "Message Sent Successfuly Kindly Be Patient We Will Get Back to You";
			}else{
				$err = "Failed To Send Message Pls Check Form Details and Try Again";
			}
		}
	}


	//Register Player
	$playername = "";
	$playerage = "";
	$playerpos = "";
	$playerbf = "";
	$playerh = "";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		if (isset($_POST['psubmit'])) {
			$playername = $_POST['pname'];
			$playerage = $_POST['page'];
			$playerpos = $_POST['ppos'];
			$playerbf = $_POST['pbfoot'];
			$playerh = $_POST['phgt'];

			$query = "INSERT INTO players (playername, playerage, playerpos, playerbf, playerh) VALUES ('$playername', '$playerage', '$playerpos', '$playerbf', '$playerh')";
			$run_query = mysqli_query($conn, $query);
			if ($run_query) {
				$good = "Player Registered Successfully";
			}else{
				$err = "An Error Occured While Registering the Player";
			}
		}
	}



	//Upload Picture to Gallery
	if (isset($_POST['picsubmit'])) {
		

		//Path to Store the Uploaded Files
		$target = "pics/" .basename($_FILES['image']['name']);

		//Collect All Submitted Data
		$image = $_FILES['image']['name'];
		$text = $_POST['pictext'];
		$date = $_POST['date'];

		//Store all Submitted Data to Data Base
		$query = "INSERT INTO img(image, text, date) VALUES ('$image', '$text', '$date')";
		$run_query = mysqli_query($conn, $query);

		//Move Uploaded Images to Folder
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$good = "Upload Successful";
		}else{
			$err = "Upload Failed";
		}
	}

	//transfer market

	if (isset($_POST['tsubmit'])) {
		

		//Path to Store the Uploaded Files
		$target = "transfers/" .basename($_FILES['ppas']['name']);

		//Collect All Submitted Data
		$timg = $_FILES['ppas']['name'];
		$pname = $_POST['pname'];
		$page = $_POST['page'];
		$phgt = $_POST['phgt'];
		$ppos = $_POST['ppos'];
		$pbfoot = $_POST['pbfoot'];
		
		

		//Store all Submitted Data to Data Base
		$query = "INSERT INTO transfer(tpimg, tpname, tpage, tphgt, tppos, tpbfoot) VALUES ('$timg', '$pname', '$page', '$phgt', '$ppos', '$pbfoot')";
		$run_query = mysqli_query($conn, $query);

		//Move Uploaded Images to Folder
		if (move_uploaded_file($_FILES['ppas']['tmp_name'], $target)) {
			$good = "Upload Successful";
		}else{
			$err = "Upload Failed";
		}
	}


 ?>