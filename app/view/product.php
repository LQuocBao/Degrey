<div class="container1">
    <div class="container-product">
        <p class="list"><a href="index.php">Trang chủ</a> / Tất Cả Sản Phẩm</p>
        <section class="banner-product">
            <img src="public/upload/banner/banner-product.jpg" alt="">
        </section>
        <main>
            <section class="main-container-product">
                <h2>Danh Mục Sản Phẩm</h2>
                <section class="list-category">
                    <?php
                    foreach ($data['category'] as $item) {
                        extract($item);
                        echo '<div class="box-category">
                            <a href="index.php?page=procate&id=' . $id_category . '"><p>' . $type . '</p></a>
                            </div>';
                    }
                    ?>
                </section>
                <section class="list-product">
                    <?php
                    foreach ($data['product'] as $item) {
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