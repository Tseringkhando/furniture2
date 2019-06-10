<?php 
if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) {
			?>
		<section class="right">
			<h2>You are now logged in</h2>
		</section>
		<?php
		}	
		else{
			header('Location:../login');}
			?>
	
			