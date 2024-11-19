<?php
class UserController
{
    private $user;

    function __construct()
    {
        $this->user = new UserModel();
    }
    function renderView($view, $data = null)
    {
        $view = 'app/view/' . $view . '.php';
        require_once $view;
    }
    function viewLogin()
    {
        $this->renderView('login');
    }

    function check()
    {
        if (isset($_POST['submit'])) {
            $user = $_POST['name'];
            $pass = $_POST['pass'];
            $result = $this->user->checkUser($user, $pass);
            if (is_array($result)) {
                if ($result['role'] == 1) {
                    $_SESSION['admin'] = $result['username'];
                    header('Location: admin/index.php');
                } else {
                    $_SESSION['user'] = $result['username'];
                    header('Location: index.php');
                }
            } else {
                echo '<script>alert("Sai tên đăng nhập hoặc mật khẩu")</script>';
                echo '<script>location.href="index.php?page=login"</script>';
            }
        }
    }
    function viewRegister()
    {
        $this->renderView('register');
    }

    function addUser()
    {
        if (isset($_POST['submit'])) {
            $data = [];
            $data['username'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['pass'];
            $repass = $_POST['repass'];
            if ($data['password'] === $repass) {
                $result = $this->user->checkEmail($data['email']);
                if ($result) {
                    echo '<script>alert("Email đã tồn tại")</script>';
                    echo '<script>location.href="index.php?page=register"</script>';
                } else {
                    $this->user->insertUser($data);
                    echo '<script>alert("Đăng ký thành công")</script>';
                    echo '<script>location.href="index.php?page=login"</script>';
                }
            } else {
                echo '<script>alert("Mật khẩu không trùng khớp")</script>';
                echo '<script>location.href="index.php?page=register"</script>';
            }
        }
    }

    function logout()
    {
        session_unset();
        echo '<script>alert("Đăng xuất thành công!!!")</script>';
        echo '<script>location.href="index.php"</script>';
    }
}
