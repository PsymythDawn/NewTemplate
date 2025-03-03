<?php
require_once '../global-library/database.php';
require_once '../include/functions.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';
switch ($action) {
	
    case 'register' :
        register_data();
        break;
	   
    default :
        // if action is not defined or unknown
        // move to main category page
        header('Location: index.php');
}


/*
    Add Data
*/
function register_data()
{
	include '../global-library/database.php';

	$emailAddress = mysqli_real_escape_string($link, $_POST['email_address']);
	$password = mysqli_real_escape_string($link, $_POST['password']);

	$chk = $conn->prepare("SELECT * FROM bs_user WHERE email = '$emailAddress' AND is_deleted != '1'");
	$chk->execute();
	if($chk->rowCount() > 0)
	{
        
		header("Location: index.php");

	} else {
		$passwordHash = password_hash($password, PASSWORD_DEFAULT);		

		$sql = $conn->prepare("INSERT INTO bs_user (email, password, date_added, is_deleted)
											VALUES ('$emailAddress', '$passwordHash', '$today_date1', '0')");
		$sql->execute();
		
		$id = $conn->lastInsertId();
		$uid = md5($id);

		$sql1 = $conn->prepare("UPDATE bs_user SET uid = '$uid' WHERE user_id = '$id'");
		$sql1->execute();

			header("Location:" . WEB_ROOT ."index.php");

		exit();
    }		
}