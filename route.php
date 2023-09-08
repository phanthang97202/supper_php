<?php
include_once(__DIR__ . '/services/AdminService.php');
$path = strtok($_SERVER['REQUEST_URI'], "?"); // cắt dần chuỗi  
$service = new AdminService();
if (empty($_SESSION["auth"])) {
    switch ($path) {
        case '/login':
            return $service->login();
            break;
        case '/index.html':
            include_once(__DIR__ . './pages/home.php');
            break;
        case '/product':
            include_once(__DIR__ . './pages/product.php');
            break;
        default:
            header("Location: /index.html");
            break;
    }
}
if (!empty($_SESSION["auth"]) && $_SESSION["auth"]["role"] == 0) {
    switch ($path) {
        case '/product':
            include_once(__DIR__ . './pages/product.php');
            break;
        case '/index.html':
            include_once(__DIR__ . './pages/home.php');
            break;
        case '/logout':
            unset($_SESSION['auth']);
            header("Location: /index.html");
            break;
        default:
            header("Location: /product");
            break;
    }
}
if (!empty($_SESSION["auth"]) && $_SESSION["auth"]["role"] == 1) {
    switch ($path) {
        case '/admin':
            return $service->getUsers();
        case '/update':
            return $service->updateUser();
        case '/delete':
            return $service->deleteUser();
        case '/product':
            include_once(__DIR__ . './pages/product.php');
            break;
        case '/logout':
            unset($_SESSION['auth']);
            header("Location: /index.html");
            break;
        case '/index.html':
            include_once(__DIR__ . './pages/home.php');
            break;
        default:
            header("Location: /product");
            break;
    }
}
