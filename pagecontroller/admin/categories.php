<?php

	$title='Manage Categories';

	$allCategories=$furniture_cat->findAll();
	$allCategories_list=$allCategories->fetchAll();

	$cri=[
		'allCategories_list'=>$allCategories_list
	];
	$content = loadTemplate("../../view/admin/categories_view.php", $cri);


