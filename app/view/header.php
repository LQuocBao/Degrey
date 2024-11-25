<?php
if (isset($_SESSION['user']) && ($_SESSION['user'] != '')) {
    $login = '<a href="">Xin chào, ' . $_SESSION['user']. '</a>
        <a href="index.php?page=logout">Đăng xuất</a>';
} else {
    $login = '<li><a href="index.php?page=login">Đăng Nhập</a></li>
            <li><a href="index.php?page=register">Đăng Ký</a></li>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/upload/logo-shortcut.jpg">
    <title>DEGREY - DEGREY VIỆT NAM</title>
    <link rel="stylesheet" href="public/css/procate.css">
    <link rel="stylesheet" href="public/css/detail.css">
    <link rel="stylesheet" href="public/css/product.css">
    <link rel="stylesheet" href="public/css/form.css">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Reddit+Mono:wght@500&family=Roboto+Mono:wght@299&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <div class="container1">
                <div class="logo">
                    <a href="index.php">
                        <img src="public/upload/logo.jpg" alt="">
                    </a>
                </div>
                <nav class="menu">
                    <ul>
                        <a href="index.php">
                            <li>Trang Chủ</li>
                        </a>
                        <a href="index.php?page=product">
                            <li>Sản Phẩm</li>
                        </a>
                        <a href="index.php?page=store">
                            <li>Store</li>
                        </a>
                        <a href="index.php?page=about">
                            <li>Giới Thiệu</li>
                        </a>
                    </ul>
                </nav>
                <section class="search">
                    <form action="">
                        <input type="text" placeholder=" Tìm kiếm sản phẩm...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </section>
                <section class="cart">
                    <a href="#"><i class="fa-solid fa-cart-shopping" style="color: black;"></i></a>
                </section>
                <section class="forms">
                    <ul>
                        <?= $login ?>
                    </ul>
                </section>
            </div>
        </header>
        <!-- End header -->