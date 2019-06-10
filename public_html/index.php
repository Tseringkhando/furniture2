<?php
require '../includes/init.php';
	session_start();
	
		if(isset($_GET['page'])){
			if($_GET['page']=='login'){
				require '../pagecontroller/admin/login.php';
			}
			else if($_GET['page']=='logout')
			{
					require '../pagecontroller/admin/logout.php';
			}	
			else{
				require '../pagecontroller/user/'.$_GET['page']. '.php';
			}
		}
		else{
			require '../pagecontroller/user/home.php';
		}
		
		$tempVars = [
			'title' => $title,
			'content' => $content
		];
		
		echo loadTemplate('../view/user/layout.php', $tempVars);
?>