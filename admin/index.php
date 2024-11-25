<?php
require_once '../app/model/database.php';
require_once '../app/model/categoryModel.php';
require_once '../app/model/ProductModel.php';
require_once '../app/model/UserModel.php';
require_once './app/controller/addCateController.php';
require_once './app/controller/addProController.php';
require_once './app/controller/addUserController.php';
require_once './app/view/header.php';
$db = new Database();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'addpro':
            $add = new AddProductController();
            $add->viewAdd();
            break;
        case 'editpro':
            $editpro = new AddProductController();
            $editpro->viewEdit();
            break;
        case 'edit':
            $edit = new AddProductController();
            $edit->editPro();
            break;
        case 'category':
            $cate = new AddCateController();
            $cate->viewCate();
            break;
        case 'addcate':
            $addcate = new AddCateController();
            $addcate->viewAdd();
            break;
        case 'insert':
            $insert = new AddCateController();
            $insert->addCate();
            break;
        case 'delcate':
            $delcate = new AddCateController();
            $delcate->delCate();
            break;
        case 'add':
            $add = new AddProductController();
            $add->addPro();
            break;
        case 'delpro':
            $del = new AddProductController();
            $del->delPro();
            break;
        case 'product':
            $product =  new AddProductController();
            $product->viewPro();
            break;
        case 'editcate':
            $editcate = new AddCateController();
            $editcate->viewEditCate();
            break;
        case 'updatecate':
            $updatecate = new AddCateController();
            $updatecate->updateCate();
            break;
        case 'user':
            $user = new AddUserController();
            $user->viewUser();
            break;
        case 'deluser':
            $deluser = new AddUserController();
            $deluser->delUser();
            break;
        case 'edituser':
            $edituser = new AddUserController();
            $edituser->viewEditUser();
            break;
        case 'updateuser':
            $updateuser = new AddUserController();
            $updateuser->updateUser();
            break;
        case 'adduser':
            $adduser = new AddUserController();
            $adduser->viewAddUser();
            break;
        case 'insertuser':
            $insertuser = new AddUserController();
            $insertuser->addUser();
            break;
        default:
            $product = new AddProductController();
            $product->viewPro();
            break;
    }
} else {
    $product = new AddProductController();
    $product->viewPro();
}
require_once './app/view/footer.php';
