<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title;?></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Fran's Furniture</h1>

		</section>
	</header>
	<nav>
		<ul>
			<!-- Search Form -->
	
			<li><a href="home">Home</a></li>
			<li><a href="furniture">Our Furniture</a></li>
			<li><a href="about">About Us</a></li>

			
			

			<li><a href="faq">FAQs</a></li>
			<?php if (isset($_SESSION['isLogged']) && ($_SESSION['isLogged']==true)) {
				echo '<li><a href="admin/admin_home">Admin Home</a></li>'; 
				echo '<li><a href="admin/logout">Log Out</a></li>'; 
			}else{
			echo '</li> <li><a href="contact">Contact us</a>
				</li> <li><a href="login">Log In</a>'; }
			?>
		</ul>

	</nav>
<img src="../images/randombanner.php"/>
	
		<?php echo $content;?>

	<footer>
		&copy; Fran's Furniture <?php echo Date('Y'); ?>
	</footer>
</body>
</html>