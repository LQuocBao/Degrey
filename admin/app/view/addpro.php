<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thêm sản phẩm</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="index.php?page=add" method="post" enctype="multipart/form-data">
                            <label for="">Danh mục sản phẩm</label>
                            <select name="id_category" id="id_category" class="form-control">
                                <?php foreach ($data['listcate'] as $item) {
                                    extract($item); ?>
                                    <option value="<?= $id_category ?>"><?= $type ?></option>
                                <?php } ?>
                            </select>
                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="name" id="name" class="form-control">
                            <label for="">Hình ảnh</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <label for="">Giá</label>
                            <input type="number" name="price" id="price" class="form-control">
                            <input type="submit" value="Thêm sản phẩm" onclick="" name="submit">
                        </form>
                    </div>
                </div>
            </div>