<?php
require 'contact_connection.php';
require 'message.php';
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
					<img src="./img/hlogo.png" alt="Logo" class="nav-icon" width="60" height="60" />
					<div class="logo">Hulk-BUlk Fitness</div>
				</div>
				
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
						<a href="#contact">Join Us</a>
					</li>
					<li>
						<a href="login.php">Admin</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<main>
		<section class="section-hero" id="section-hero">
			<div class="container hero-box">
				<div class="hero-image-content">
					<h1 class="heading">HOME OF THE STRONGEST CREW</h1>
					<p class="description">Experience the Ultimate Fitness Journey with Functional Training, Plyometric Boxes, Aerobics Classes, sauna & steam, and More</p>
					
				</div>
			</div>
		</section>

		<section class="section-aboutus" id="aboutus">
			<div class="container aboutus">
				<div class="section-aboutus-info" data-aos="fade-down">
					<h2>About HUlk-BUlk</h2>
					<p>
						At Hulk-BUlk, we're not just a fitness center; we're a community dedicated to transforming lives through health and wellness. Founded with a passion for helping individuals
						achieve their fitness goals, our mission is to empower, inspire, and support you on your journey to a healthier, happier life.
					</p>
					<h2>Our Vision</h2>
					<p>
						Our vision is to be your trusted partner in achieving optimal well-being. We believe that a strong and healthy body is the foundation for a successful, fulfilling life.
						Whether you're new to fitness or a seasoned athlete, we're here to guide you on your path to success.
					</p>
				</div>
				<div class="section-aboutus-images">
					<figure class="about-box__image">
						<img src="https://vfitclub.netlify.app/image/about-image1.jpg" alt="navigation icon" class="nav-hamburger" width=320" height="190" style="--i: 0" data-aos="fade-down-right" />
						<img src="https://vfitclub.netlify.app/image/about-image2.jpg" alt="navigation icon" class="nav-hamburger" width="320" height="190" style="--i: 1" data-aos="fade-down" />
						<img src="https://vfitclub.netlify.app/image/about-image3.jpg" alt="navigation icon" class="nav-hamburger" width="320" height="190" style="--i: 2" data-aos="fade-down-left" />
					</figure>
				</div>
			</div>
		</section>


		<section class="section-ourteam" id="ourteam">
			<div class="container ourteam" data-aos="fade-down">
				<h2 class="title">Our Team</h2>
				<div class="team-members">
					<div class="team-member">
						<img src="./img/team1.jpg" alt="Logo" class="member-logo" />
						<div class="team-memmber-info">
							<div class="member-name">Sujin Maharjan</div>
							<div class="member-desg">Weight Lifting Coach</div>
							<div class="member-desc">Specializes in sculpting strength and muscle with precision</div>
						</div>
					</div>
					<div class="team-member">
						<img src="./img/team2.jpg" alt="Logo" class="nav-icon" />
						<div class="team-memmber-info">
							<div class="member-name">Prakash Gurung</div>
							<div class="member-desg">MMA Coach</div>
							<div class="member-desc">Hones combat skills and self-defense with expertise</div>
						</div>
					</div>
					<div class="team-member">
						<img src="./img/team3.jpg" alt="Logo" class="nav-icon" />
						<div class="team-memmber-info">
							<div class="member-name">Abhishek Dahal</div>
							<div class="member-desg">Yoga Instructor</div>
							<div class="member-desc">Guides you to inner peace and flexibility through mindful yoga practice</div>
						</div>
					</div>
					<div class="team-member">
						<img src="./img/trainer.jpg" alt="Logo" class="nav-icon" />
						<div class="team-memmber-info">
							<div class="member-name">Bikash Gorkhali</div>
							<div class="member-desg">Personal Trainer</div>
							<div class="member-desc">Your path to achieving fitness goals, one personalized session at a time</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-memberships" id="memberships">
			<div class="container memberships">
				<h2 class="title">Memberships</h2>
				<div class="classes">
					<div class="class" data-aos="flip-left">
						<h2 class="class-name">3 Months</h2>
						<div class="class-price">Rs2500/MON</div>
						<hr />
						<div class="class-name">
							<ul>
								<li>5 Classes</li>
								<li>5 In Personal Training Sessions</li>
								<li>Full Gym & Facilities Access</li>
								<li>Gym Tour & Training Instruction</li>
							</ul>
						</div>
						<a>Get Started</a>
					</div>
					<div class="class" data-aos="flip-up">
						<h2 class="class-name">6 Months</h2>
						<div class="class-price">Rs1800/MON </div>
						<hr />
						<div class="class-name">
							<ul>
								<li>10 Classes</li>
								<li>10 In Personal Training Sessions</li>
								<li>Full Gym & Facilities Access</li>
								<li>Boxing Ring, Free Events</li>
								<li>Gym Tour & Training Instruction</li>
							</ul>
						</div>
						<a>Get Started</a>
					</div>
					<div class="class" data-aos="flip-right">
						<h2 class="class-name">1 Whole Year</h2>
						<div class="class-price">Rs1500/MON </div>
						<hr />
						<div class="class-name">
							<ul>
								<li>10 Classes</li>
								<li>15 In Personal Training Sessions</li>
								<li>Full Gym & Facilities Access</li>
								<li>Boxing Ring, Free Events</li>
								<li>Gym Tour & Training Instruction</li>
							</ul>
						</div>
						<a>Get Started</a>
					</div>
				</div>
			</div>
		</section>
		<section class="section-reviews" id="reviews">
			<div class="container reviews">
				<h2 class="title">Customer Reviews</h2>
				<div class="review">
					<div class="review-info">
						<div class="review-image" data-aos="image-rotateIn"><img src="./assets/review1.png" alt="Logo" class="review-icon" width="130" height="130" /></div>
						<div class="review-details" data-aos="fade-down">
							<div>Manit Adhikari</div>
							<div>
								I can't say enough good things about Hulk-BUlk Fitness. The trainers are exceptional, and the community is so welcoming. I've made incredible progress in my fitness journey
								here
							</div>
						</div>
					</div>
					<div class="review-info">
						<div class="review-image" data-aos="image-rotateIn"><img src="./assets/review2.jpg" alt="Logo" class="review-icon" width="130" height="130" /></div>
						<div class="review-details" data-aos="fade-down">
							<div>Shreejan Pokharel</div>
							<div>Prakash Sir, the MMA coach, is a true expert. He pushes you to your limits while ensuring safety. I've learned so much and gained newfound confidence</div>
						</div>
					</div>
					<div class="review-info">
						<div class="review-image" data-aos="image-rotateIn"><img src="./assets/review3.png" alt="Logo" class="review-icon" width="130" height="130" /></div>
						<div class="review-details" data-aos="fade-down">
							<div>Satuu</div>
							<div>
								Hulk-BUlk Gym is not just a gym; it's a lifestyle. The facility is top-notch, and the trainers are top-level. I've never felt more motivated and supported in my fitness
								journey
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-contact" id="contact">
			<div class="container contact">
				<div class="contactus">
					<form id="contact-form" method="post" name="contact_form">
						<h2 class="title">REGISTER NOW</h2>
						<div class="class-input"><input type="text" name="name" id="name" placeholder="Name" /></div>
						<div class="class-input"><input type="email" name="email" id="email" placeholder="Email" /></div>
						<div class="class-input"><input type="number" name="phone" id="phone" placeholder="Phone" /></div>
						<div class="class-input"><input type="text" name="address" id="message" placeholder="Address" /></div>
						<input type="submit" value="Submit" id="btn" class="btn">
					</form>
				</div>
				<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.5506923365756!2d85.37562319999999!3d27.7311557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1ba5efea4cd1%3A0xa33a53d344cacd3c!2sHulk%20Bulk%20Fitness!5e0!3m2!1sen!2snp!4v1711955673489!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</section>
	</main>

	<footer class="section-footer" id="footer">
		<div class="footer-box container">
			<div class="contact-details">
				<h2>Hulk-Bulk Fitness</h2>
				<div class="contact-company-address">
					Aarubari,Bouddha<br />
					Kathmandu<br />Nepal
				</div>
				<div class="contact-social-links">
					<img src="./assets/whatsapp.png" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="./assets/facebook.png" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="./assets/instagram.png" alt="navigation icon" class="nav-hamburger" width=35" height="35" /> <img src="./assets/twitter.png" alt="navigation icon" class="nav-hamburger" width=35" height="35" />
				</div>
			</div>
			<nav class="footer-nav" aria-label="navigation">
				<h3>Quick Links</h3>
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
				<h3>News Letter</h3>
				<input type="email" placeholder="email@domain.com" /><button>&#10003;</button>
			</div>
		</div>
		<hr />
		<div class="container copyrights">
			<div>Copyright © by HulkBulk Fitness</div>
		</div>
	</footer>



	<script src="./js/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js" defer></script>
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

