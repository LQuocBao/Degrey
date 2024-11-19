<?php
class AddUserController
{
    private $user;
    private $data;

    function __construct()
    {
        $this->user = new UserModel();
    }
    function view()
    {
        require_once 'app/view/user.php';
    }

    function renderView($view, $data)
    {
        $view = './app/view/' . $view . '.php';
        require_once $view;
    }
    function viewUser()
    {
        $this->data['listuser'] = $this->user->getUser();
        $this->renderView('user', $this->data);
    }

    function delUser()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $this->user->deleteUser($id);
            echo '<script>alert("Đã xóa người dùng thành công")</script>';
            echo '<script>location.href="index.php?page=user"</script>';
        }
    }

    function viewEditUser()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $this->data['user'] = $this->user->getIdUser($id);
            $this->renderView('edituser', $this->data);
        }
    }

    function updateUser()
    {
        if (isset($_POST['submit'])) {
            $data = [];
            $data['username'] = $_POST['username'];
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
            $data['id_user'] = $_POST['id_user'];
            $data['role'] = $_POST['role'];
            $this->user->updateUser($data);
            echo '<script>alert("Cập nhật thành công")</script>';
            echo '<script>location.href="index.php?page=user"</script>';
        }
    }

    function viewAddUser(){
        $this->renderView('adduser', $this->data);
    }

    function addUser(){
        if (isset($_POST['submit'])) {
            $data = [];
            $data['username'] = $_POST['username'];
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
            $data['role'] = $_POST['role'];
            $this->user->insertUser($data);
            echo '<script>alert("Đăng ký thành công")</script>';
            echo '<script>location.href="index.php?page=user"</script>';
        }
    }
}
