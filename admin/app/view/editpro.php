<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Sửa sản phẩm</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="index.php?page=edit" method="post" enctype="multipart/form-data">
                            <label for="">Danh mục sản phẩm</label>
                            <select name="id_category" id="id_category" class="form-control">
                                <?php
                                $listcate = $data['listcate'];
                                $pro_detail = $data['pro_detail'];
                                $result = '';
                                foreach ($listcate as $item) {
                                    extract($item);
                                    if ($id == $pro_detail['id_category']) {
                                        $result .= '<option value="' . $id_category . '" selected>' . $type . '</option>';
                                    } else {
                                        $result .= '<option value="' . $id_category . '">' . $type . '</option>';
                                    }
                                }
                                echo $result;
                                ?>
                            </select>
                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?= $pro_detail['name_product'] ?>">
                            <label for="">Hình ảnh</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <img style="width: 400px; height: 400px;" src="../public/upload/<?= $pro_detail['image'] ?>" alt=""><br>
                            <input type="hidden" name="image_old" value="<?= $pro_detail['image'] ?>">
                            <label for="">Giá</label>
                            <input type="number" name="price" id="price" class="form-control" value="<?= $pro_detail['price_product'] ?>">
                            <input type="hidden" name="idpro" value="<?= $pro_detail['id_category'] ?>">
                            <input type="submit" value="Cập nhật sản phẩm" onclick="" name="submit">
                        </form>
                    </div>
                </div>
            </div>