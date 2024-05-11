<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Font Awesome icones CDN Link -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Sign Up</title>
	<!-- Linking css code file -->
	<link rel="stylesheet" href="./css/logindesign.css">
</head>
<body>
<h1 class="project-title">Welcome to Hulk-Bulk Fitness</h1>
	<div class="main-content">
	<div class="logo">
	<img src="./img/logo.png" alt="">
	</div>
	<div class="sign-in">
	<div class="container">
		<div >
			<h1>Sign Up</h1>
			<h5>Welcome to Hulk-BUlk</h5>
			<form action="" method="post">
			<div>
				<p><label for="email">Email</label></p>
				<input type="text" id="email" name="user_email" required value="<?php echo isset( $_POST['user_email'] ) ? $_POST['user_email'] : ''; ?>">
			</div>

			<div>
				<p><label for="username">Username</label></p>
				<input type="text" id="username" name="user_name" required value="<?php echo isset( $_POST['user_name'] ) ? $_POST['user_name'] : ''; ?>" >
			</div>
			<div>
				<p><label for="password">Password</label></p>
				<input type="password" id="password" name="password" required >
			</div>

			<!-- <div>
			<input type="checkbox" onclick="myFunction()">Show Password
			</div> -->

			<button type="submit" id="btn">Sign Up</button>
			<p>Already Registered? <a href="login.php">Log In</a></p>
			</form>
			<div></div>  
			<!-- Social media icones -->
			<div class="socialIcons">
				<h6><strong>Or connect with us - </strong></h6>
				<div class="icon"><i class="fab fa-instagram"></i></div>
				<div class="icon"><i class="fab fa-facebook"></i></div>
				<div class="icon"><i class="fab fa-twitter"></i></i></div>
			</div>
		</div>
		
	</div>
	</div>
	</div>

	<script src="./js/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
</body>
</html>


<?php
session_start();

	require 'connection.php';
	require 'functions.php';


if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	//something was posted
	$user_email      = $_POST['user_email'];
	$user_name       = $_POST['user_name'];
	$password        = $_POST['password'];
	$emailpattern    = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
	$passwordpattern = '#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#';

	if ( ! preg_match( $emailpattern, $user_email ) ) {
		echo "<script>
         Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please enter a valid email address!',
          })
         
         </script>";
	} elseif ( ! preg_match( $passwordpattern, $password ) ) {
		echo "<script>
         Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.',
          })
         
         </script>";
	} elseif ( ! empty( $user_email ) && ! empty( $user_name ) && ! empty( $password ) ) {

		//save to database
		$user_id = random_num( 20 );


		$query = "insert into users (user_id,email,user_name,password) values ('$user_id','$user_email','$user_name','$password')";

		if ( mysqli_query( $con, $query ) ) {
			header( 'Location: login.php?registered=true' );
			die;
		} else {
			echo "ERROR: Could not able to execute $query. " . mysqli_error( $con );
		}
	} else {
		echo "<script>
         Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Please enter some valid information!!,
          })
         
         </script>";
	}
}
?>
