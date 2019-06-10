<main class="home">

	<?php
 		//if (isset($_SESSION['superId']) || isset($_SESSION['superId'])) { 
		if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'==true]) {
			
		}
	?>
 			

 
	<h2>Log In</h2>
	<form method="POST" >
		<label>Username: </label>
		<input type="text" name="username">

		<label>Password</label>
		<input type="password" name="password">

		<input type="submit" name="login">

		
	</form>
</main>

<?php 
	// echo	password_hash("admin", PASSWORD_DEFAULT); 
		?>