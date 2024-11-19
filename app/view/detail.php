<?php
extract($data['detail']);
?>
<div class="container1">
    <div class="container-detail">
        <p class="list">
            <a href="index.php">Trang chủ</a> / <a href="index.php?page=product">Tất Cả Sản Phẩm</a> / <?= $name_product ?></a>
        </p>
        <div class="box-detail">
            <img src="public/upload/<?= $image ?>" alt="">
            <div>
                <h3><?= $name_product ?></h3>
                <?php if ($price_sale != 0) {
                    echo '<div class="box-price">
                            <p class="price-sale">' . number_format($price_sale) . '<u>đ</u></p>
                            <p class="price-del">' . number_format($price_product) . '<u>đ</u></p>
                        </div>';
                } else {
                    echo '<div class="box-price">
                            <p class="price">' . number_format($price_product) . '<u>đ</u></p>
                        </div>';
                } ?>
            </div>
        </div>
        <div class="related-product">
            <h3>Sản Phẩm Liên Quan</h3>
            <div class="box-related-product">
                <?php
                foreach ($data['related-product'] as $sp) {
                    extract($sp);
                    echo '<div class="box-related-product-main">
                            <img src="./public/upload/' . $image . '" alt="">
                            <h3>' . $name_product . '</h3>';
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
            </div>
        </div>
    </div>
</div>