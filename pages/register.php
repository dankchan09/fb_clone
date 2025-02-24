<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App - Đăng ký</title>
    <link rel="stylesheet" href="/phpwebsite/css/style.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Facebook clone</header>
            <div class="error-text"></div> 
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="name-details">
                    <div class="field input">
                        <label for="firstname">Tên</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Tên bạn" required>
                    </div> 

                    <div class="field input">
                        <label for="lastname">Họ</label>
                        <input type="text" id="lastname" name="lastname" placeholder="Họ" required>
                    </div> 
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Nhập email" required>
                </div> 

                <div class="field input">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
                </div> 

                <div class="field image">
                    <label for="image">Ảnh đại diện</label>
                    <input type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg, image/gif" required>
                </div>

                <div class="field button">
                    <input type="submit" value="Đăng nhập">
                </div>
                <div class="link">Đã có tài khoản? <a href="login.php">Đăng nhập ngay</a></div>
            </form>
        </section>
    </div>
</body>
</html>
