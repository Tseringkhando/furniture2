<?php

	require '../db/connect.php'; //database connection code
	require '../classes/DatabaseTable.php';
	require '../functions/loadTemplate.php';
	
	$furniture_table = new DatabaseTable('furniture'); 
	$furniture_cat = new DatabaseTable('category');
	$admins= new DatabaseTable('admins');
	$enquiries= new DatabaseTable('enquiries');
	$specials= new DatabaseTable('special');

?>