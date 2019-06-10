<?php 
$all_specials= $specials->findAll();
$all_offers=$all_specials->fetchAll();
$title='Manage Offers';
$cri=[
	'all_offers'=>$all_offers
];
$content=loadTemplate("../../view/admin/specials_view.php",$cri);
 ?>

