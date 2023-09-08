<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <?php
    include_once(__DIR__ . "/components/navbar.php")
    ?>
    <form action='<?php echo "/update?id=" . $data['id']; ?>' method="POST">
        <input type="text" name="username" value=<?php echo $data['username']; ?>>
        <br>
        <input type="text" name="password" value=<?php echo $data['password']; ?>>
        <br>
        <select name="role">
            <option value="0" <?php if ($data['role'] == 0) {
                                    echo 'selected';
                                }; ?>>User</option>
            <option value="1" <?php if ($data['role'] == 1) {
                                    echo 'selected';
                                }; ?>>Admin</option>

        </select>
        <br>
        <button type="submit">Update</button>
    </form>


</body>

</html>