<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <!-- Import thư viện Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/resetpassword.css"> <!-- Đảm bảo rằng bạn có file CSS cho trang reset password -->
</head>

<body>
    <div class="resetPasswordBox">
        <h3>Reset Password</h3>
        <p>Vui lòng nhập địa chỉ email và chúng tôi sẽ gửi mã OTP để đặt lại mật khẩu của bạn.</p>
        <form action="#" method="post">
            <div class="inputBox">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <input type="submit" value="Gửi Email">
        </form>
        <a href="login.php">Quay lại trang đăng nhập</a>
    </div>
</body>

</html>
