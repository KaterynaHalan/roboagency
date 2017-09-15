<?php require_once('header.php'); ?>
    <script>


    </script>

    <div id="wrapper" style="background: #000; min-height: 100%;padding-bottom: 20px;">
<!--        <div id="particles-js1" class="particles-js"></div>-->
        <div class="ContentHeader section-light is-parallax-scene" style="padding: 0">

            <div class="SpecialHeading layer" data-depth="0.09">
<!--                <h1 class="special-title is-block-reveal">Товары</h1>-->
                <ul id="slides">
                    <li class="slide showing" style="background-image: url(/images/product1.png);"><a href="product.php"></a></li>
                    <li class="slide" style="background-image: url(/images/product2.jpg);"><a href="product.php"></a></li>
                    <li class="slide" style="background-image: url(/images/product3.png);"><a href="product.php"></a></li>
                    <li class="slide" style="background-image: url(/images/product1.png);"><a href="product.php"></a></li>
                    <li class="slide" style="background-image: url(/images/product2.jpg);"><a href="product.php"></a></li>
                    <li class="slide" style="background-image: url(/images/product3.png);"><a href="product.php"></a></li>
                </ul>
            </div>


        </div>

        <div id="post-727">


            <div class="PortfolioFilter is-block-reveal">
                <ul class="is-isotope-filter list-inline" data-target="#portfolio-grid-gallery-media" data-hide-show-all="">
                    <li class="selected"><a href="#" data-filter="*">Все</a></li>
                    <li><a href="#" data-filter=".isotope-category1">Умный дом</a></li>
                    <li><a href="#" data-filter=".isotope-category2">Роботы</a></li>
                    <li><a href="#" data-filter=".isotope-category3">Сенсорные столы</a></li>
                </ul>
            </div><!-- end filer-container -->

            <ul id="portfolio-grid-gallery-media" class="PortfolioGrid is-isotope is-portfolio-load-more is-lightbox-gallery list-unstyled" data-isotope-cols="3" data-isotope-gutter="20" data-isotope-type="masonry">
                <li class="is-aspectratio ar_3_2 is-autox-landscape ">
                    <a href="product.php">

                        <div class="bg-image" data-bg-image="/images/product1.png"></div>

                        <div class="overlay-dark"></div>
                        <h5 class="portfolio-grid-item-title">Lorem ipsum dolor sit amet</h5>
                        <span class="portfolio-grid-item-title">Артикул</span>
                        <i class="zoom-icon fa fa-external-link"></i>
                    </a>
                </li>
                <li class="is-aspectratio ar_3_2 is-autox-landscape isotope-category1">
                    <a href="product.php">

                        <div class="bg-image" data-bg-image="/images/product2.jpg"></div>

                        <div class="overlay-dark"></div>
                        <h5 class="portfolio-grid-item-title">Lorem ipsum dolor sit amet</h5>
                        <span class="portfolio-grid-item-title">Артикул</span>
                        <i class="zoom-icon fa fa-external-link"></i>
                    </a>
                </li>

                <li class="is-aspectratio ar_3_2 is-autox-landscape isotope-category2">
                    <a href="product.php">

                        <div class="bg-image" data-bg-image="/images/product3.png"></div>

                        <div class="overlay-dark"></div>
                        <h5 class="portfolio-grid-item-title">Lorem ipsum dolor sit amet</h5>
                        <span class="portfolio-grid-item-title">Артикул</span>
                        <i class="zoom-icon fa fa-external-link"></i>
                    </a>
                </li>


            </ul>

        </div><!-- end post -->
    </div>
    <script type='text/javascript' src="/js/particles.js"></script>
    <script type='text/javascript' src='/js/isotope.pkgd.min.js'></script>
    <script type='text/javascript' src='/js/imagesloaded.min.js'></script>

<?php require_once('footer.php'); ?>