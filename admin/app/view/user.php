<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Danh sách người dùng</h4>
                        <div>
                            <a href="index.php?page=adduser"><button type="button" class="btn btn-primary">
                                    Thêm người dùng
                                </button></a>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>STT</th>
                                <th>Tên Tài Khoản</th>
                                <th>Email</th>
                                <th>Mật Khẩu</th>
                                <th>Vai Trò</th>
                                <th>Chức Năng</th>
                            </thead>
                            <tbody>
                                <?php
                                $stt = 1;
                                foreach ($data['listuser'] as $item) {
                                    extract($item);
                                    if ($role == 1) {
                                        $role = 'Admin';
                                    } else {
                                        $role = 'Người Dùng';
                                    }
                                ?>
                                    <tr>
                                        <td><?= $stt++ ?></td>
                                        <td><?= $username ?></td>
                                        <td><?= $email ?></td>
                                        <td><?= md5($password) ?></td>
                                        <td><?= $role ?></td>
                                        <td><a href="index.php?page=edituser&id=<?= $id_user?>">Sửa</a> | <a href="index.php?page=deluser&id=<?= $id_user?>">Xóa</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                    </div>
                    <ul class="pagination-list">
                        <li class="pagination-item">
                            <a href="" class="pagination-link">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">1</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">2</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">3</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">...</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">10</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>