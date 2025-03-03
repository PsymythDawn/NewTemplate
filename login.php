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
<body>
    <div class="login-container">
        <h2 class="text-center mb-4">Login</h2>
        <form id="loginform" name="frmLogin" method="post">
			<div class="text-center text-danger mb-3">
				<?php echo htmlspecialchars($data["message"]); ?>
			</div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="txtEmailAddress" class="form-control" id="email" <?php echo htmlspecialchars($data["emailAddress"]); ?> placeholder="Enter email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="txtPassword" class="form-control" id="password" placeholder="Enter password" required>
            </div>
			<div class="mb-3">
				<button type="submit" class="btn btn-primary w-100">Login</button>
			</div>
			<div class="mb-3">
				<a href="register.php" class="btn btn-secondary w-100">Register</a>
			</div>
			
        </form>
    </div>
    
</body>

<?php include ($_SERVER["DOCUMENT_ROOT"] . '/' . $sett_data['directory'] . '/include/global-js.php'); ?>

</html>
