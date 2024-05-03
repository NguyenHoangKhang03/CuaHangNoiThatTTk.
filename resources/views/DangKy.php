<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="styles.css"> <!-- Liên kết tới file CSS -->
</head>
<body>

<div class="container">
    <h2>Đăng ký</h2>
    <?php
    // Kiểm tra xem biến POST đã được gửi chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Xử lý đăng ký tài khoản ở đây
        // Ví dụ: Kiểm tra dữ liệu và thêm tài khoản vào cơ sở dữ liệu
        // Nếu đăng ký thành công, hiển thị thông báo thành công
        echo "<p>Tài khoản của bạn đã được đăng ký thành công!</p>";
    } else {
        // Nếu không có dữ liệu POST, hiển thị form đăng ký
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="username">Tên đăng nhập</label>
            <input type="text" placeholder="Nhập tên đăng nhập" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" placeholder="Nhập mật khẩu" name="password" required>
        </div>
        <div class="form-group">
            <label for="password">Nhập Lại Mật khẩu</label>
            <input type="password" placeholder="Nhập Lại mật khẩu" name="password" required>
        </div>
        <button type="submit">Đăng ký</button>
    </form>
    <?php } ?>
</div>

</body>
</html>