<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="styles.css"> <!-- Liên kết tới file CSS -->
</head>
<body>

<div class="container">
    <h2>Đăng nhập</h2>
    <form action="authenticate.php" method="post">
        <div class="form-group">
            <label for="username">Tên đăng nhập</label>
            <input type="text" placeholder="Nhập tên đăng nhập" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Mật khẩu</label>
            <input type="password" placeholder="Nhập mật khẩu" name="password" required>
        </div>
        <button type="submit">Đăng nhập</button>
    </form>

    <form action="DangKy.php" method="get">
        <button type="submit">Đăng ký</button>
    </form>
</div>

</body>
</html>

