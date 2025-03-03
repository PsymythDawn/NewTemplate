<?php

require_once '../global-library/database.php';
require_once '../include/functions.php';

// $_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];


$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';
	
switch ($view) {
	default :
		$content 	= 'register.php';		
		$pageTitle 	= $sett_data['system_title'];
}


require_once '../include/template.php';
?>
