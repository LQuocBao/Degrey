<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cập Nhật Người Dùng</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="index.php?page=updateuser" method="post" enctype="multipart/form-data">
                            <label for="">Tên người dùng</label>
                            <input type="text" name="username" id="name" class="form-control" value="<?= $data['user']['username'] ?>">
                            <label for="">Email</label>
                            <input type="text" name="email" id="email" class="form-control" value="<?= $data['user']['email'] ?>"><br>
                            <label for="">Mật Khẩu</label>
                            <input type="text" name="password" id="password" class="form-control" value="<?= $data['user']['password'] ?>">
                            <input type="hidden" value="<?= $data['user']['id_user'] ?>" name="id_user">
                            <label for="">Vai trò</label>
                            <select name="role" id="" class="form-control">
                                <?php
                                $user = $data['user'];
                                $vaitro = $data['role'];
                                $result = '';
                                foreach ($user as $item) {
                                    extract($item);
                                    if ($role == $vaitro) {
                                        $result .= '<option value="' . $id_user . '" selected>' . $role . '</option>';
                                    } else {
                                        $result .= '<option value="' . $id_user . '">' . $role . '</option>';
                                    }
                                }
                                echo $result;
                                ?>
                            </select><br>
                            <input type="submit" value="Cập nhật người dùng" onclick="" name="submit">
                        </form>
                    </div>
                </div>
            </div