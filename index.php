<?php
session_start();
ob_start();
require_once 'app/model/CategoryModel.php';
require_once 'app/model/Database.php';
require_once 'app/model/ProductModel.php';
require_once 'app/model/UserModel.php';
require_once 'app/controller/HomeController.php';
require_once 'app/controller/ProductController.php';
require_once 'app/controller/UserController.php';
require_once 'app/controller/AboutController.php';
require_once 'app/view/header.php';
$db = new Database();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'login':
            $login = new UserController();
            $login->viewLogin();
            break;
        case 'checkuser':
            $user = new UserController();
            $user->check();
            break;
        case 'register':
            $register = new UserController();
            $register->viewRegister();
            break;
        case 'adduser':
            $adduser = new UserController();
            $adduser->addUser();
            break;
        case 'logout':
            $logout = new UserController();
            $logout->logout();
            break;
        case 'product':
            $product = new ProductController();
            $product->viewProduct();
            break;
        case 'detail':
            $detail = new ProductController();
            $detail->detail();
            break;
        case 'procate':
            $procate = new ProductController();
            $procate->viewProCate();
            break;
        case 'about':
            $about = new AboutController();
            $about -> viewAbout();
            break;
        default:
            $home = new HomeController();
            $home->view();
            break;
    }
} else {
    $home = new HomeController();
    $home->view();
}
require_once 'app/view/footer.php';
