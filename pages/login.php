<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php
    if (!empty($data["errors"])) {
        echo " <p>Tài khoản mật khẩu chưa chính xác</p> ";
    }
    ?>
    <form action="/login" method="post">
        <input required id="username" name="username" type="text" placeholder="Enter username...">
        <br>
        <input required id="password" name="password" type="password" placeholder="Enter password...">
        <br>
        <button type="submit">Login</button>
    </form>

</body>

</html>