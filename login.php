<?php
require_once 'global-library/database.php';
require_once 'include/functions.php';

$data = ["emailAddress" => null, "message" => null]; // Default structure


if (isset($_POST['txtEmailAddress'])) {
    $result = doLogin();
    if (!empty($result) && is_array($result)) {
        $data = $result;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php include ($_SERVER["DOCUMENT_ROOT"] . '/' . $sett_data['directory'] . '/include/global-css.php'); ?>

    <title>Login</title>

</head>
<body style="background: #af1607"> 
    <div class="login-container">
        <div class="d-flex">
            <img src="./assets\css/SHOPAPP.png"/ style="height: 50px; border-radius: 11px;">
            <h3 class="text-center mb-4 mt-2 ms-3">Login</h3>
        </div>
        
        <form id="loginform" name="frmLogin" method="post">
			<div class="text-center text-danger mb-3">
				<?php echo htmlspecialchars($data["message"]); ?>
			</div>
            <div class="mb-3">
                <label for="email" class="form-label"><b>Email address</b></label>
                <input type="email" name="txtEmailAddress" class="form-control" id="email" <?php echo htmlspecialchars($data["emailAddress"]); ?> placeholder="Enter email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label"><b>Password</b></label>
                <input type="password" name="txtPassword" class="form-control" id="password" placeholder="Enter password" required>
            </div>
            <div>
                <h6 class="text-end mt-3 mb-3">Forgot Password</h6>
            </div>
			<div class="mb-3">
				<button type="submit" class="btn btn-primary w-100" style="background: #af1607">Login</button>
			</div>
            <h4 class="text-center">OR</h4>
            <!-- SOCIALS -->
            <div class="d-flex align-content-center">
                <div class="mb-3">
                    <a href="register" class="btn btn-secondary w-100" style="border-radius: 5px;">Facebook</a>
                </div>
                <div class="mb-3">
                    <a href="register" class="btn btn-secondary w-100"  style="border-radius: 5px;">Google</a>
                </div>
            </div>
            

			<div class="mb-3">
				<a href="register" class="btn btn-secondary w-100">Register</a>
			</div>
			
        </form>
    </div>
    
</body>

<?php include ($_SERVER["DOCUMENT_ROOT"] . '/' . $sett_data['directory'] . '/include/global-js.php'); ?>

</html>
