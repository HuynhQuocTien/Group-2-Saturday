<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <!-- Import thư viện Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/signup.css"> <!-- Đảm bảo rằng bạn có file CSS cho trang đăng ký -->
</head>
<body>
    <div class="signupBox">
        <h3>Sign up here</h3>
        <form action="" method="post">
            <div class="inputBox">
                <input id="username" type="text" name="username" placeholder="Username">
            </div>
            <div class="inputBox">
                <input id="email" type="email" name="email" placeholder="Email">
            </div>
            <div class="inputBox">
                <input id="password" type="password" name="password" placeholder="Password">
            </div>
            <div class="inputBox">
                <input id="confirm_password" type="password" name="confirm_password" placeholder="Confirm Password">
            </div>
            <input type="submit" value="Sign Up">
        </form>
        <div class="text-center">
        <span class="already-have-account">Already have an account? </span>
        <a href="login.php" class="signin-link">Sign In</a>
</div>


    </div>
</body>

</html>
