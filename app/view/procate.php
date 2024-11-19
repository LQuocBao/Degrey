<div class="container1">
    <div class="container-product">
        <p class="list"><a href="index.php">Trang chủ</a> / <a href="index.php?page=product">Tất Cả Sản Phẩm</a> / <?php echo $data['namecate']['type'];?></p>
    <main>
        <section class="main-container-product">
            <h3>Danh Sách Sản Phẩm</h3>
            <section class="list-products">
                <?php
                foreach ($data['procate'] as $item) {
                    extract($item);
                    echo '<div class="box-product">
                    <div class="img">
            <a href="index.php?page=detail&id=' . $id_product . '"><img src="public/upload/' . $image . '" alt=""></a>
            </div>
                            <div class="name-product">
                            <a href="index.php?page=detail&id=' . $id_product . '">' . $name_product . '</a></div>';
                    if ($price_sale != 0) {
                        echo '<div class = "box-price">
                    <p class="price-sale">' . number_format($price_sale) . '<u>đ</u></p>
                                <p class="price-del">' . number_format($price_product) . '<u>đ</u></p>
                                </div>';
                    } else {
                        echo '<div class="box-price">
                                    <p class="price">' . number_format($price_product) . '<u>đ</u></p>
                                    </div>';
                    }
                    echo '</div>';
                }
                ?>
            </section>
        </section>
    </main>
    </div>
</div>