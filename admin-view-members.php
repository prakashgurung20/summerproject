<?php
session_start();


require 'connection.php';
require 'functions.php';


$row = check_login($con);

?>

<?php
require 'members_connection.php';
require 'members.php';


$query = "select * from members";

$result = mysqli_query($members_connection, $query);

// Check for errors
if (!$result) {
	die("Query failed: " . mysqli_error($con));
}

// Fetch all rows into an array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}

// Reverse the array
$reversed_rows = array_reverse($rows);
?>


<html>

<head>
	<!-- <meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./owlcarousel/dist/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="./owlcarousel/dist/assets/owl.theme.default.min.css" />
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./css/styles.css" />
	<link rel="stylesheet" href="./css/gym.css">


	<title>HULK-BULK FITNESS</title>
</head>

<body>

	<header class="header">
		<div class="container">
			<nav class="header-nav" aria-label="navigation">
				<div class="logo-content">
					<img src="./img/hlogo.png" alt="Logo" class="nav-icon" width="70" height="60" />
					<div class="logo">Hulk-Bulk Fitness</div>
				</div>
				
				<ul>
					<li>
						<a href="./admin-messages.php">View Messages</a>
					</li>
					<li>
						<a href="./admin-view-members.php">Members</a>
					</li>
					<li>
						<a href="./logout.php">Logout</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<main>
		<section class="section-memberships" id="memberships">
			<div class="container memberships">
				<div class="members-header">
                    <h2 class="title">Members</h2>
                    <a class="add-member-button" href="./admin-add-members.php">Add New Member</a>
                </div>
				<div class="user-info">
					<?php
					// Loop through each row in the result set
					foreach ($reversed_rows as $row) {
					?>
						<div class="user-card" data-aos="flip-left">
							<div>
								<h2 class="user-name">Name:</h2>
								<p><?php echo $row['u_name']; ?></p>
							</div>
							<div>
								<h2 class="user-email">Email:</h2>
								<p><?php echo $row['u_email']; ?></p>
							</div>
							<div>
								<h2 class="user-phone">Phone:</h2>
								<p><?php echo $row['u_phone']; ?></p>
							</div>
							<div>
								<h2 class="user-address">Address</h2>
								<p><?php echo $row['u_address']; ?></p>
							</div>
							<div>
								<h2 class="user-join-date">Join Date</h2>
								<p><?php echo $row['u_join_date']; ?></p>
							</div>
							<div>
								<h2 class="user-expire-date">Expire Date</h2>
								<p><?php echo $row['u_expire_date']; ?></p>
							</div>
						</div>
					<?php
					}
					?>
				</div>
			</div>
			</div>
		</section>
	</main>

	<footer class="section-footer" id="footer">
		<div class="footer-box container">
			<div class="contact-details">
				<h2>Hulk-Bulk Fitness</h2>
				<div class="contact-company-address">
				Aarubari,Bouddha,<br />
				Kathmandu<br />Nepal
				</div>
				<div class="contact-social-links">
					<img src="./assets/whatsapp.png" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="./assets/facebook.png" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="./assets/instagram.png" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="./assets/twitter.png" alt="navigation icon" class="nav-hamburger" width=35" height="35" />
				</div>
			</div>
			<nav class="footer-nav" aria-label="navigation">
				<p>Quick Links</p>
				<ul>
					<li>
						<a href="#aboutus">About</a>
					</li>
					<li>
						<a href="#memberships">Memberships</a>
					</li>
					<li>
						<a href="#ourteam">Our Team</a>
					</li>
					<li>
						<a href="#contact">Contact </a>
					</li>
					<li>
						<a href="#reviews">Reviews</a>
					</li>
				</ul>
			</nav>
			<div class="newsletter">
				<p>News Letter</p>
				<input type="email" placeholder="email@domain.com" /><button>&#10003;</button>
			</div>
		</div>
		<hr />
		<div class="container copyrights">
			<div>Copyright © by HulkBulk Fitness</div>
		</div>
	</footer>



	<script src="./js/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
	<script src="./owlcarousel/dist/owl.carousel.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="./js/carousel.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js" integrity="sha512-5efjkDjhldlK+BrHauVYJpbjKrtNemLZksZWxd6Wdxvm06dceqWGLLNjZywOkvW7BF032ktHRMUOarbK9d60bg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="./js/script.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
	<script>
		AOS.init({
			offset: 120,
			delay: 50,
			duration: 400,
			once: true,
		});
	</script>


</body>



</html>


<?php

function successfulLogin()
{
	echo ("<script>
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'Successfully Logged In',
    showConfirmButton: false,
    timer: 2000
  })
</script>");
}


if (isset($_SESSION['successMessage'])) {
	echo $_SESSION['successMessage' . successfulLogin()];
	unset($_SESSION['successMessage']);
}

?>