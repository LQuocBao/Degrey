<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thêm người dùng</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="index.php?page=insertuser" method="post" enctype="multipart/form-data">
                            <label for="">Tên người dùng</label>
                            <input type="text" name="username" id="name" class="form-control">
                            <label for="">Email</label>
                            <input type="email" name="email" id="price" class="form-control">
                            <label for="">Mật khẩu</label>
                            <input type="password" name="password" id="password" class="form-control">
                            <label for="">Vai trò</label>
                            <select name="role" id="" class="form-control">
                                <option value="1">Admin</option>
                                <option value="0">Người dùng</option>
                            </select>  <br>
                            <input type="submit" value="Thêm người dùng" onclick="" name="submit">
                        </form>
                    </div>
                </div>
            </div>