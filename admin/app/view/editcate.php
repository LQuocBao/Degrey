<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cập Nhật Danh Mục</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <?php
                            $type = $data['type'];
                        ?>
                        <form action="index.php?page=updatecate" method="post" enctype="multipart/form-data">
                            <label for="">Tên danh mục</label>
                            <input type="text" name="type" id="type" class="form-control" value="<?= $type['type']?>">
                            <input type="hidden" name="idcate" value="<?= $type['id_category'] ?>">
                            <input type="submit" value="Cập nhật danh mục" onclick="" name="submit">
                        </form>
                    </div>
                </div>
            </div>