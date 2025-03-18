<?php

$data = ["email" => null, "message" => null]; // Default structure


if (isset($_POST['txtEmailAddress'])) {
    $result = doLogin();
    if (!empty($result) && is_array($result)) {
        $data = $result;
    }
}
?>-

<div class="login-container" style="width: 500px">
    <div class="d-flex">
        <img src="../assets\css/SHOPAPP.png"/ style="height: 50px; border-radius: 11px;">
        <h2 class="text-center mb-4">Sign up</h2>
    </div>
    
    <form id="loginform" action="<?php echo WEB_ROOT;?>register/process.php?action=register" method="post">
        <div class="text-center text-danger mb-3">
            <?php echo htmlspecialchars($data["message"]); ?>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label"><b>Email address</b></label>
            <input type="email" name="email_address" class="form-control" id="email" placeholder="Enter email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100" style="background: #af1607">NEXT</button>

        <div class="d-flex">
            <p> <b>_________</b> </p>
            <h3>OR</h3>
            <hr style="width: 200px; height: 6px; border-radius: 5px; background: #252525;"/>
        </div>

        <p class="text-wrap text-center mt-2" style="font-size: 13px">By Signing up, you agree to Sale’s <span style="color: #c21808"><b>Terms & Conditions</b></span> and <span style="color: #c21808"><b>Privacy Policy</b></span> </p>

        <div class="mb-3 text-center d-flex justify-content-center" style="width: 235px; margin: 0 52px;">
            <p class="me-1" style="font-size: 13px">Already Have an Account?</p>
            <a class="link-danger" style="font-size: 13px" type="button" href="<?php echo WEB_ROOT;?>login.php"><b>log in</b></a>
        </div>
    </form>
</div>
