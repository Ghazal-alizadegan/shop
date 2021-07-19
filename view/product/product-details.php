<?php
ob_start();
?>
<!-- Breadcrumb -->
<div class="breadcrumb-holder">
    <!-- Content Row -->
    <div class="row">
        <ul class="breadcrumbs small-12 medium-8 large-8 columns">
            <li><a href="index.php" title="Homepage">صفحه اصلی</a></li>
            <li><a>
                    <?php

                    echo $search_parent;
                    ?>
                </a></li>
            <li><a>
                    <?php
                    $chid = $detail['parent'];
                    $show_pr = $class->show_parent_list($chid);
                    echo $show_pr['title'];
                    ?>
                </a></li>
        </ul>
    </div>
    <!-- End Content Row -->
</div>
<!-- End BreadCrumb -->

<!-- Page Content Holder -->
<div class="row">

    <!-- Product Thumb -->
    <div class="small-12 small-centered medium-4 medium-uncentered large-4 large-uncentered product-thumb columns">
        <!-- Product Main Photo -->
        <div class="product-main-photo">
            <img class="p-photo" src="<?php echo $detail['img1']; ?>" width="300px"/>
        </div>
        <!-- End product main photo -->

        <!-- Product Thumb Gallery  -->
        <div class="thumb-gallery" dir="ltr">

            <div id="carousel-gallery" style="height: 50px">

                <div class="item" style="height: 60px"><img src="<?php echo $detail['img2']; ?>"/></div>
                <div class="item" style="height: 60px"><img src="<?php echo $detail['img3']; ?>"/></div>
                <div class="item"><img data-tmb-large="img/products/product-large-1.jpg"
                                       data-medium="img/products/product-main-1.jpg"/></div>
                <div class="item"><img data-tmb-large="img/products/product-large-1.jpg"
                                       data-medium="img/products/product-main-1.jpg"/></div>
                <div class="item"><img data-tmb-large="img/products/product-large-1.jpg"
                                       data-medium="img/products/product-main-1.jpg"/></div>
            </div>

        </div>
        <!-- End Thumb Gallery -->
    </div>

    <!-- End Product Thumb -->

    <!-- Product Description -->
    <div class="small-12 small-centered medium-5 medium-uncentered large-5 large-uncentered product-description columns">
        <!-- Title -->
        <div class="product-detail-title">
            <?php echo $detail['title']; ?>
        </div>
        <!-- End Title -->
        <!-- Description -->
        <div class="product-detail-description">
            <?php echo $detail['detail']; ?>
        </div>
        <!-- End Description -->
        <!-- Border -->
        <div class="fr-border"></div>
        <!-- Product Size -->
        <!-- End Product Size -->
        <!-- Stock -->
        <div class="small-10 small-centered medium-6 medium-uncentered large-6 large-uncentered columns">
            <?php
            if ($detail['number'] != 0) {
                ?>
                <div class="product-attr-text"><span>موجود</span></div>
            <?php } else {
                ?>
                <div class="product-attr-text"><span>موجود</span></div>
            <?php } ?>
        </div>
        <!-- End Stock -->
        <div class="clearing"></div>

        <!-- Border -->
        <div class="fr-border"></div>

        <!-- Product Quantity -->
        <div class="small-12 small-centered medium-6 medium-uncentered large-7 large-uncentered columns">
            <div class="product-attr-text q-lineheight">تعداد:</div>
            <div class="quantity-txt"><a href="#self" class="qnt" id="minus">-</a></div>
            <div class="quantity-inp"><input type="text" class="quantity-input" id="p_quantity" value="1"/></div>
            <div class="quantity-txt"><a href="#self" class="qnt" id="plus">+</a></div>
        </div>
        <!-- End Product Quantity -->
        <!-- Add to wishlist + compare -->
        <div class="small-10 small-centered medium-6 medium-uncentered large-5 large-uncentered q-lineheight columns">

            <div class="f-button">

                <a href="#" title="Add to Wishlist"><i class="icon-heart"></i></a>
                <a href="#" title="Add to Compare"><i class="icon-tags"></i></a>
            </div>

        </div>
        <!-- End Add to wishlist + compare -->

        <div class="clearing"></div>
        <!-- Border -->
        <div class="fr-border"></div>


        <!-- Product Price and Add To Cart -->
        <div class="small-12 small-centered medium-5 medium-uncentered large-6 q-lineheight large-uncentered columns">
            <div class="main-price"><span></span><?php echo $detail['price'] . ' ' . 'ریال'; ?> </div>
        </div>
        <!-- End Product Price -->
        <!-- Add To Cart -->
        <div class="small-12 small-centered medium-7 medium-uncentered large-6 large-uncentered q-lineheight cart-area columns">

            <div class="continue-button"><a href="#" title="Add to cart"><i class="icon-cart"></i>
                    اضافه کردن به سبد</a></div>

        </div>
        <!-- End Add to Cart -->

        <div class="clearing"></div>
        <!-- Border -->
        <div class="fr-border"></div>
        <!-- End PRoduct Price and Add to cart -->

        <!-- Product Rating -->
        <div class="small-6 medium-5 large-5 columns">
            <div class="product-rating">
                <i class="icon-star"></i>
            </div>
            <div class="product-rating">
                <i class="icon-star"></i>
            </div>
            <div class="product-rating">
                <i class="icon-star"></i>
            </div>
            <div class="product-rating">
                <i class="icon-star"></i>
            </div>
            <div class="product-rating">
                <i class="icon-star"></i>
            </div>


        </div>

        <div class="clearing"></div>
        <script type="text/javascript">var switchTo5x = true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({
                publisher: "ur-91f7351c-4e1e-33ef-9cac-f7276559ca2f",
                doNotHash: false,
                doNotCopy: false,
                hashAddressBar: false
            });</script>
        <!-- Share Widget -->

        <!-- End Share Widget -->
    </div>
    <!-- End Product Description -->

    <!-- Product Left module -->
    <div class="small-12 small-centered medium-3 medium-uncentered large-3 large-uncentered product-left-module columns">
        <!-- Related Product -->

        <div class="lft-module-heading">
            محصولات مرتبط
        </div>
        <!-- Listings -->
        <?php
        foreach ($search as $val) {
            if ($val['title'] != $detail['title']) {
                ?>
                <div class="bst-seller-list">
                    <div class="bst-seller-thumb">
                        <img src="<?php echo $val['img1']; ?>" alt="thumbnail1"/>
                    </div>
                    <div class="bst-seller-content">
                        <div class="bst-seller-title"><a href="#" title="turtle neck">

                                <?php echo $val['title']; ?></a></div>
                        <div class="bst-seller-price"><?php echo $val['price'] . ' ' . 'ریال'; ?></div>
                        <div class="bst-seller-cart">
                            <a href="#" title="Add to cart"><i class="icon-cart"></i>اضافه به سبد خرید</a>
                        </div>
                    </div>

                    <div class="clearing"></div>
                </div>
            <?php }
        } ?>
        <!-- Ennd related product Module -->

    </div>
    <!-- End product left module -->

    <div class="clearing"></div>

    <!-- PAGE TABS -->
    <ul class="tabs">
        <li><a href="#self" id="#tab0" class="active">
                توضیحات</a></li>
        <li><a href="#comment" id="#tab1"> بررسی نظرات</a></li>
        <li><a href="#comment" id="#tab"> افزودن نظر</a></li>
        <li><a href="#self" id="#tab2">
                محصولات برچسب ها</a></li>

    </ul>
    <!-- Tab 0  -->
    <div class="tab-content small-12 medium-12 large-12 columns" id="tab0" style="display:block;">
        <!-- Description -->
        <div class="product-detail-description">
            <?php echo $detail['detail']; ?>
        </div>
        <!-- End Description -->
    </div>

    <!-- Tab1 -->
    <div class="tab-content small-12 medium-12 large-12 columns" id="tab1">
        <!-- Review -->
        <!--		<div class="row">-->
        <!-- Reviews -->
        <div class="small-12 medium-5 large-5 columns">
            <h1>
                نظرات مشتری</h1>
            <div class="fr-border"></div>
            <!-- Review -->
            <?php
            foreach ($comment as $cm) {

                ?>
                <div class="rev-box">
                    <div class="rev-name"><?php echo $cm['name']; ?><span><?php echo $cm['date']; ?></span></div>
                    <p class="product-detail-description"><?php echo $cm['text']; ?></p>
                </div>
            <?php } ?>
        </div>
        <!--		</div>-->
    </div>

    <div class="tab-content small-12 medium-12 large-12 columns" id="tab">
        <!-- Review -->
        <div class="row">
            <!-- Reviews -->
            <!-- End Reivewis -->

            <!-- Write a Review -->
            <div class="small-12 medium-5 large-6 columns">
                <h1>نوشتن نظر</h1>
                <div class="fr-border"></div>

                <!-- Form -->
                <form action="" id="review_form" method="post">
                    <label>نام:</label>
                    <input type="text" id="name" name="name"/>
                    <label>ایمیل:</label>
                    <input type="text" id="email" name="email"/>

                    <label>
                        بازبینی</label>
                    <textarea id="review" name="text"></textarea>

                    <button class="form-btn" name="btn"><i class="icon-arrow-left"></i>ارسال</button>
                </form>

            </div>

        </div>
        <!-- End Review Module -->
    </div>
    <!-- Tab2 -->
    <div class="tab-content small-12 medium-12 large-12 columns" id="tab2">
        Tab2
    </div>

</div>

<!-- End Page Content Holder -->
