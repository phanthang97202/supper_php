<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>

<body>
    <?php
    include_once(__DIR__ . "/components/navbar.php")

    ?>
    <h1>Admin</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $u) : ?>
                <tr>
                    <td>
                        <?php echo $u['id']; ?>
                    </td>
                    <td>
                        <?php echo $u['username']; ?>
                    </td>
                    <td>
                        <?php echo $u['password']; ?>
                    </td>
                    <td>
                        <?php echo $u['role']; ?>
                    </td>
                    <td class="actions">
                        <a href="/update?id=<?php echo $u['id']; ?>" class="edit-button">Edit</a>
                        <a href="/delete?id=<?php echo $u['id']; ?>" class="delete-button">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <h1> $test = array("text" => "admin", "text1" => "user");
    </h1>
    <?php
    $test = array("text" => "admin", "text1" => "user");
    foreach ($test as $key => $val) : ?>
        <p>
            <?php echo $key, ":", $val ?>
        </p>
    <?php endforeach ?>

    <h1>$test = ["text" => "admin", "text1" => "user"];</h1>
    <?php
    $test = ["text" => "admin", "text1" => "user"];
    foreach ($test as $key => $val) : ?>
        <p>
            <?php echo $key, ":", $val ?>
        </p>
    <?php endforeach ?>

    <?php for ($i = 0; $i < count($test); $i++) : ?>
        <?php echo $i; ?>
    <?php endfor ?>

</body>

</html>