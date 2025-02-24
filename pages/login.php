<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App - Đăng ký</title>
    <link rel="stylesheet" href="/phpwebsite/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Facebook clone</header>
            <div class="error-text"></div> 
            <form action="#" method="POST" enctype="multipart/form-data">

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Nhập email" required>
                </div> 

                <div class="field input">
                    <label for="password">Mật khẩu</label>
                    <div class="password-wrapper">
                         <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
                         <i class="fas fa-eye"></i>
                    </div>
                </div>

                <div class="field button">
                    <input type="submit" value="Đăng nhập">
                </div>
                <div class="link">Chưa có tài khoản? <a href="register.php">Đăng ký ngay</a></div>
            </form>
        </section>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const togglePassword = document.querySelector(".password-wrapper i");
            const passwordInput = document.getElementById("password");

            togglePassword.addEventListener("click", function() {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    this.classList.remove("fa-eye");
                    this.classList.add("fa-eye-slash");
                } else {
                    passwordInput.type = "password";
                    this.classList.remove("fa-eye-slash");
                    this.classList.add("fa-eye");
                }
            });
        });
    </script>
</body>
</html>
