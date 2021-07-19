<!-- Breadcrumb -->
<div class="breadcrumb-holder">
    <!-- Content Row -->
    <div class="row">
        <ul class="breadcrumbs small-12 medium-8 large-8 columns">
            <li><a href="index.php" title="Homepage">صفحه اصلی</a></li>
            <li>دسته بندی محصولات</li>
            <li><?php echo $search_parent; ?></li>
            <?php foreach ($subset as $sb) { ?>
                <?php if ($sb['id'] == $_GET['id']) { ?><li><?php echo $sb['title'];
                } ?></li>
                <?php
            }
            ?>
        </ul>
    </div>
    <!-- End Content Row -->
</div>
<!-- End BreadCrumb -->

<!-- Page Content Holder -->
<div class="row">
    <!-- Widget Right -->
    <div class="small-12 small-centered medium-3 large-3 large-uncentered medium-uncentered  columns">
        <!-- Category Listing Module -->
        <div class="lft-module-heading">

            گروه ها
        </div>
        <!-- Listing -->
        <ul class="cat-listing">
            <?php foreach ($category as $val) {
                ?>
                <ul>

                    <li class="cat-listing"><a href="index.php?c=detail&a=list&id=<?php echo $val['id'] ?>"
                                               title="Dress"> <?php echo $val['title'] ?></a>

                </ul>
                <ul class="cat-listing">
                    <?php
                    $count = 0;
                    foreach ($subset as $sb) {
                        ?>
                        <li class="cat-listing"><a href="index.php?c=detail&a=list&id=<?php echo $sb['id'] ?>"
                                                   title="Dress"> <?php if ($val['id'] == $sb['chid']) {
                                    echo $sb['title'];
                                } ?> </a></li>
                    <?php }
                    ?>

                </ul>
            <?php } ?>
        </ul>
        <!-- End Category Listing Module -->


        <!-- Ennd Bestseller Module -->

        <div class="right-ad text-center">
        </div>
    </div>
    <!-- End Widget Right -->

    <!-- Featured Product Module -->
    <div class="small-12 small-centered medium-9 medium-uncentered large-9 large-uncentered featured-row columns">
        <!-- End Heading  -->

        <!-- Sorting -->
        <div class="sort-container">
            <!-- Swtich View Mode -->
            <div class="small-12 small-centered medium-uncentered large-uncentered medium-4 large-4 columns">
                <div class="sort-icon"><a href="index.php?c=detail&a=grid&id=<?php echo $_GET['id'] ?>"
                                          title="Product Grid"><i class="icon-grid"></i></a></div>
                <div class="sort-icon"><i class="icon-menu"></i></div>
                <a class="p-compare-link" title="Product Compare">
                    <?php
                    foreach ($pr as $p) {
                        $product1 = $class->show_product($p['id']);
                        foreach ($product1 as $pd) {
                            $count = $count + 1;
                        }
                    }
                    foreach ($product as $pd) {
                        $count = $count + 1;
                    }
                    echo '(' . $count . ')' . '  '; ?>محصول

                </a>
            </div>
            <!-- End Switch View Mode -->
            <!-- Select Box -->
            <!-- End Selectboxes -->

        </div>

        <!-- End Sorting -->

        <!-- PRODUCT LISTING -->
        <?php
        foreach ($pr as $p) {
            $product1 = $class->show_product($p['id']);
            foreach ($product1 as $pd) {
                ?>
                <!-- Item -->
                <div class="small-12 medium-12 small-centered medium-uncentered large-12 large-uncentered columns product-list">
                    <!-- Product Thumb -->
                    <div class="product-list-thumb small-5 medium-5 large-3 columns">
                        <!-- Sale Tag -->
                        <div class="sale-tag">
                            فروش
                        </div>
                        <!-- End Sale Tag -->
                        <img src="<?php echo $pd['img1']; ?>" alt="Product 1"/>

                    </div>
                    <!-- End Product thumb -->

                    <!-- Product RIght -->
                    <div class="small-7 medium-7 large-9 text-right columns">
                        <!-- Product Link -->
                        <div class="product-link">
                            <a href="index.php?c=detail&a=detail&id=<?php echo $pd['id']; ?>"><?php echo $pd['title']; ?></a>
                        </div>

                        <!-- Product Rating -->
                        <div class="f-productrating text-right">
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                            <i class="icon-star"></i>
                        </div>
                        <!-- End Product Rating -->

                        <!-- Product Descipriont -->
                        <div class="product-list-description">
                            <?php echo $pd['detail']; ?>
                        </div>

                        <!-- Product Price -->
                        <div class="f-product-price text-right">
                            <!--			<span class="f-product-price-old">-->
                            <?php echo $pd['price'] . ' ' . 'ریال'; ?>
                            <!--            </span>-->
                        </div>

                        <!-- AddtoCart Buttons -->
                        <div class="f-product-hover text-right">
                            <div class="f-button">
                                <a href="#" title="Add to Cart"><i class="icon-cart"></i></a>
                                <a href="#" title="Add to Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" title="Add to Compare"><i class="icon-tags"></i></a>
                            </div>
                        </div>
                        <!-- End AddtoCart Buttons -->

                    </div>
                    <!-- End Product Left -->
                    <div class="clearing"></div>
                </div>
                <!-- End item -->
                <?php
            }
        }
        ?>
        <?php
        foreach ($product as $pd) {
            ?>
            <!-- Item -->
            <div class="small-12 medium-12 small-centered medium-uncentered large-12 large-uncentered columns product-list">
                <!-- Product Thumb -->
                <div class="product-list-thumb small-5 medium-5 large-3 columns">
                    <!-- Sale Tag -->
                    <div class="sale-tag">
                        فروش
                    </div>
                    <!-- End Sale Tag -->
                    <img src="<?php echo $pd['img1']; ?>" alt="Product 1"/>

                </div>
                <!-- End Product thumb -->

                <!-- Product RIght -->
                <div class="small-7 medium-7 large-9 text-right columns">
                    <!-- Product Link -->
                    <div class="product-link">
                        <a href="index.php?c=detail&a=detail&id=<?php echo $pd['id']; ?>"><?php echo $pd['title'];
                            $count = $count + 1; ?></a>
                    </div>

                    <!-- Product Rating -->
                    <div class="f-productrating text-right">
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                        <i class="icon-star"></i>
                    </div>
                    <!-- End Product Rating -->

                    <!-- Product Descipriont -->
                    <div class="product-list-description">
                        <?php echo $pd['detail']; ?>
                    </div>

                    <!-- Product Price -->
                    <div class="f-product-price text-right">
                        <!--			<span class="f-product-price-old">-->
                        <?php echo $pd['price'] . ' ' . 'ریال'; ?>
                        <!--            </span>-->
                    </div>

                    <!-- AddtoCart Buttons -->
                    <div class="f-product-hover text-right">
                        <div class="f-button">
                            <a href="#" title="Add to Cart"><i class="icon-cart"></i></a>
                            <a href="#" title="Add to Wishlist"><i class="icon-heart"></i></a>
                            <a href="#" title="Add to Compare"><i class="icon-tags"></i></a>
                        </div>
                    </div>
                    <!-- End AddtoCart Buttons -->

                </div>
                <!-- End Product Left -->
                <div class="clearing"></div>
            </div>
            <!-- End item -->
            <?php
        }
        ?>
        <!-- END PRODUCT LISTING -->

        <div class="clearing"></div>
        <!-- Border -->
        <div class="fr-border"></div>


        <div class="clearing"></div>
        <!-- Clearing -->
        <!-- Border -->
        <div class="fr-border"></div>


    </div>

    <!-- End Featured Products -->

    <div class="clearing"></div>

</div>
<!-- End Page Content Holder -->

