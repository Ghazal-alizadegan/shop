<!-- Main Banners -->
<div class="mainbanner">

    <!-- SLIDER -->
    <div class="slider_container">
        <div class="flexslider">
            <ul class="slides">
                <!-- Slide 1 -->
                <li>
                    <a href="#"><img src="public/default/img/slideshow/1.jpg" alt="" title="" /></a>
                    <!-- Slide Caption -->
                    <div class="flex-caption slideDown">

                        <!-- Clear  -->
                        <div class="clearing"></div>

                        <!-- Button -->
                        <div class="clearing"></div>

                    </div>
                </li>
                <!-- Slide 2 -->
                <li>
                    <a href="#"><img src="public/default/img/slideshow/2.jpg" alt="" title="" /></a>
                    <!-- Slide Caption -->
                    <div class="flex-caption slideUp">
                        <!-- Clear  -->
                        <div class="clearing"></div>

                        <!-- Button -->
                        <div class="clearing"></div>


                    </div>
                </li>
                <!-- End slide 2 -->

            </ul>
        </div>
    </div>
    <!-- End Slider -->

</div>
<!-- End Main Banners -->

<!-- Horizontal Border -->
<div class="contentborder">

</div>
<!-- End Horizontal Border -->
<!-- Advertisements -->
<!-- End Advertisements -->
<!-- Featured Products -->
<!-- Heading -->
<div class="row featured-row">
    <h1 class="text-center">محصولات پیشنهادی ما</h1>

    <div class="fr-border"></div>
</div>
<!-- End Heading -->

<!-- Product Listing -->
<div class="row">
<?php
foreach ($product as $val){
?>
    <!-- Item -->
    <div class="small-8 medium-3 small-centered medium-uncentered large-3 large-uncentered columns f-product">
        <!-- Sale Tag -->
        <div class="sale-tag">
            SALE
        </div>
        <!-- End Sale Tag -->
        <img src="<?php echo $val['img1']?>" alt="Product 1" />
        <!-- Product Link -->
        <div class="product-link text-center">
            <a href="index.php?c=detail&a=detail&id=<?php echo $val['id']; ?>"><?php echo $val['title']?></a>
        </div>

        <!-- Product Rating -->
        <div class="f-productrating">
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
            <i class="icon-star"></i>
        </div>
        <!-- End Product Rating -->

        <!-- Product Price -->
        <div class="f-product-price">
            <?php echo $val['price']?>
        </div>

        <!-- AddtoCart Buttons -->
        <div class="f-product-hover">
            <div class="f-button">
                <a href="#"><i class="icon-cart"></i></a>
                <a href="#"><i class="icon-heart"></i></a>
                <a href="#"><i class="icon-tags"></i></a>
            </div>
        </div>
        <!-- End AddtoCart Buttons -->
    </div>
    <!-- End item -->
<?php } ?>

</div>
<!-- End Product Listing -->

<!-- End Featured Products -->

<!-- End Social Widget -->