		<?php
	
	$offers = $specials->findAll();
	$cri=[
		'offers'=>$offers];


		 $title = "Fran's Furniture";
		$content = loadTemplate("../view/user/home.php",$cri) ?>

		