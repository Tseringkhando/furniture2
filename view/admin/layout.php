<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../../css/style.css"/>
		
		<title><?php echo $title; ?></title>
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
			<li><a href="../home">Home</a></li>
			<li><a href="../furniture">Our Furniture</a></li>
			<li><a href="../about">About Us</a></li>
			<li><a href="../faq">FAQs</a></li>
			<li><a href="admin_home">Admin Home</a></li>

			<?php if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) {
			?>
			<li><a href="logout">Log Out</a></li>
		<?php } else { ?>
			<li><a href="../login">Log in</a></li>
		<?php } ?>
		</ul>

	</nav>
<img src="../../images/randombanner.php"/>


<main class="admin">
	<?php if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) { ?>
	<section class="left">
		<ul>
			<li><a href="categories">Manage Categories</a></li>
			<li><a href="furnitures">Manage Furnitures</a></li>
			
			<li><a href="specials">Special Offers</a></li>
			<li><a href="enquiries">Manage Enquiries</a></li>

			<?php if ($_SESSION['type']=='super') {
			echo '<li><a href="staff">Manage Staff</a></li>';
			} ?>
		</ul>
	</section>
<?php } ?>
		<?php echo $content; ?>

</main>

	

	<footer>
		&copy; Fran's Furniture <?php echo 	Date('Y') ; ?>
	</footer>
</body>
</html>