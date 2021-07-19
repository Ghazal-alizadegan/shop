<!-- Breadcrumb -->
<!-- Featured Product Module -->
<div class="small-12 small-centered medium-9 medium-uncentered large-10large-uncentered featured-row columns"
     style="margin-right: 200px">
    <?php
    foreach ($product as $p) {

        ?>
        <!-- Item -->
        <div class="large-12 medium-12 small-centered medium-uncentered large-12 large-uncentered columns product-list">
            <!-- Product Thumb -->
            <div class="product-list-thumb small-5 medium-5 large-3 columns">
                <!-- Sale Tag -->
                <div class="sale-tag">
                    فروش
                </div>
                <!-- End Sale Tag -->
                <img src="<?php echo $p['img1']; ?>" alt="Product 1"/>

            </div>
            <!-- End Product thumb -->

            <!-- Product RIght -->
            <div class="small-7 medium-7 large-9 text-right columns">
                <!-- Product Link -->
                <div class="product-link">
                    <a href="index.php?c=detail&a=detail&id=<?php echo $p['id']; ?>"><?php echo $p['title']; ?></a>
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
                    <?php echo $p['detail']; ?>
                </div>

                <!-- Product Price -->
                <div class="f-product-price text-right">
                    <?php echo $p['price'] . ' ' . 'ریال'; ?>
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


