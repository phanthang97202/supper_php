<?php
class AdminService
{
    public function renderView($page, $data = null)
    {
        ob_start();
        require_once(__DIR__ . "/../pages/$page");
        $content = ob_get_clean();
        ob_clean();
        echo $content;
    }
    public function connectDB()
    {
        return new PDO("mysql:host=localhost;dbname=main_phpadmin", "root", "");
    }
    public function getUsers()
    {
        $connection = $this->connectDB();
        $data = $connection->query("select * from users")->fetchAll(PDO::FETCH_ASSOC);
        return $this->renderView('admin.php', $data);
    }
    public function login()
    {
        try {
            $connection = $this->connectDB();
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $request = (object)$_POST;
                // array(2) { ["username"]=> string(3) "111" ["password"]=> string(5) "11111" }
                // object(stdClass)#3 (2) { ["username"]=> string(3) "111" ["password"]=> string(5) "11111" }
                $data = $connection->query("select username, password, role from users where username = '$request->username' and password = '$request->password'")->fetchAll(PDO::FETCH_ASSOC);

                if (count($data) != 0) {
                    $_SESSION['auth'] = [
                        "username" => $data[0]["username"],
                        "role" => $data[0]["role"],
                    ];
                    $data[0]['role'] == 1 ? header("Location: /admin") : header("Location: /index.html");
                } else {
                    $data['errors'] = "Sai tài khoản hoặc mật khẩu!";
                }
            }
        } catch (\Throwable $th) {
            return;
        }
        return $this->renderView('login.php', $data);
    }
    public function deleteUser()
    {
        try {
            $id = (int)$_GET['id'];
            $connection = $this->connectDB();
            $sql = "delete from users where id = $id";
            $connection->exec($sql); // trả về k cần dữ liệu
            // $connection->query($sql); // trả về dữ liệu
            header('Location: /admin');
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    public function updateUser()
    {
        try {
            $data = [];
            $id = $_GET['id'];
            $connection = $this->connectDB();
            $data = $connection->query("select id, username, password, role from users where id = $id")->fetchAll(PDO::FETCH_ASSOC);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $request = (object)$_POST;
                $sql = "update users set username = '$request->username', password = '$request->password', role = '$request->role' where id = $id";
                $connection->query($sql);
                header("Location: /admin");
            }
        } catch (\Throwable $th) {
            echo 'Failed to update';
        }
        return $this->renderView('update.php', $data[0]);
    }
}
