<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"/>

    <title>Roboagency</title>

    <link href="/images/favicon.png" rel="shortcut icon">
    <link type="image/vnd.microsoft.icon" href="/images/favicon.png" rel="shortcut icon">
    <link type="image/png" href="/images/favicon.png" rel="icon" sizes="16x16">
    <link type="image/png" href="/images/favicon.png" rel="icon" sizes="32x32">
    <link type="image/png" href="/images/favicon.png" rel="icon" sizes="96x96">
    <link type="image/png" href="/images/favicon.png" rel="icon" sizes="192x192">
    <link href="/images/favicon.png" rel="apple-touch-icon-precomposed">
    <link href="/images/favicon.png" rel="apple-touch-icon-precomposed" sizes="60x60">
    <link href="/images/favicon.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="/images/favicon.png" rel="apple-touch-icon-precomposed" sizes="76x76">
    <link href="/images/favicon.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="/images/favicon.png" rel="apple-touch-icon-precomposed" sizes="120x120">
    <link href="/images/favicon.png" rel="apple-touch-icon-precomposed" sizes="152x152">
    <link href="/images/favicon.png" rel="apple-touch-icon-precomposed" sizes="180x180">

    <link rel='stylesheet' href='/css/icons.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/perfect-scrollbar.custom.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/simpleLightbox.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/css/master.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='/css/swiper.min.css' type='text/css' media='all' />

    <script type='text/javascript' src='/js/jquery.js'></script>
    <script type='text/javascript' src='/js/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='/js/canvas.js'></script>


</head>
<body  >

    <div class="Preloader">
        <img src="/images/logo.png" alt="" class="logo" style="z-index: 2;">
        <div class="sk-folding-cube" style="z-index: 2; ">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
        <canvas id="starfield" style="background-color:#fff; z-index: 1; top: 0; display: none"></canvas>
        <div id="adsense" style="position:absolute;background-color:transparent;display:none; z-index: 1; top: 0;">
        </div>
<!--        <div class="grcs_background_content">-->
<!--            <div class="level-1">-->
<!--                <div id="canvas">-->
<!--                    <canvas class="bg-effect layer" data-depth="0.2"></canvas>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>

    <div class="main-navigation-container main-navigation-container-horizontal main-navigation-with-social is-nav-sticky is-slicknav">
        <div class="main-navigation-container-inner">
            <nav id="main-navigation-menu" class="main-navigation-menu main-navigation-menu-horizontal">
            <ul id="menu-menu-1" class="is-slicknav-navigation">
                <li  class="menu-item-has-children"><a href="#"><span class="lower"></span></a>
                    <ul class="sub-menu">
                        <li><a href="/" class="is-block-hover"><i class=" icon-laptop" aria-hidden="true"></i><span data-letters="Главная">Главная</span></a></li>
                        <li><a href="portfolio.php" class="is-block-hover"><i class=" icon-camera" aria-hidden="true"></i><span data-letters="Портфолио">Портфолио</span></a></li>
                        <li><a href="products.php" class="is-block-hover"><i class="icon-grid" aria-hidden="true"></i><span data-letters="Товары">Товары</span></a></li>
                        <li><a href="blog.php" class="is-block-hover"><i class=" icon-ribbon" aria-hidden="true"></i><span data-letters="Блог">Блог</span></a></li>
                        <li><a href="partnership.php" class="is-block-hover"><i class=" icon-briefcase" aria-hidden="true"></i><span data-letters="Сотрудничество">Сотрудничество</span></a></li>
                        <li><a href="contact.php" class="is-block-hover"><i class=" icon-envelope" aria-hidden="true"></i><span data-letters="Контакты">Контакты</span></a></li>
                    </ul>
                </li>
            </ul>
            </nav>
        </div>
    </div>
<!--    <input type="checkbox" id="op">-->
<!---->
<!--        <div class="lower">-->
<!--            <label for="op"></label>-->
<!--        </div>-->
<!---->
<!--    <div class="overlay overlay-hugeinc">-->
<!--        <div class="grcs_background_content">-->
<!--            <div class="level-1">-->
<!--                <div id="canvas">-->
<!--                    <canvas class="bg-effect layer" data-depth="0.2"></canvas>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <label for="op"></label>-->
<!--        <nav>-->
<!--            <ul  id="menu-menu-1" class="is-slicknav-navigation">-->
<!--                <li><a href="/" class="is-block-hover"><span data-letters="Главная">Главная</span></a></li>-->
<!--                <li><a href="about.php" class="is-block-hover"><span data-letters="Про компанию">Про компанию</span></a></li>-->
<!--                <li><a href="products.php" class="is-block-hover"><span data-letters="Товары">Товары</span></a></li>-->
<!--                <li><a href="blog.php" class="is-block-hover"><span data-letters="Блог">Блог</span></a></li>-->
<!--                <li><a href="reviews.php" class="is-block-hover"><span data-letters="Отзывы">Отзывы</span></a></li>-->
<!--                <li><a href="partnership.php" class="is-block-hover"><span data-letters="Сотрудничество">Сотрудничество</span></a></li>-->
<!--                <li class="last-li"><a href="contact.php" class="is-block-hover"><span data-letters="Контакты">Контакты</span></a></li>-->
<!---->
<!--                <li class="menu-phone">  <i class="icon-phone"></i><a href="tel:+380661212112">+38 (066) 12-12-112</a></li>-->
<!--                <li class="menu-phone">  <i class="icon-envelope"></i><a href="mailto:info@robo.agency">info@robo.agency</a></li>-->
<!--                <li class="menu-phone"> <i class="icon-map"></i><span>Киев, Украина</span></li>-->
<!--            </ul>-->
<!---->
<!--        </nav>-->
<!--    </div>-->
    <div class="is-nav-offset"></div>
    <div class="NavigationSocial">
    <div class="languages">
        <a href="" class="active">ru</a>
        <a href="">en</a>
    </div>
    <div class="SocialLinks navigation-social-wrapper is-block-reveal is-social-nav-offset">
    <a href="#" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="#" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="#" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
    <a href="#" class="linkedin" target="_blank"><i class="fa fa-vk"></i></a>
    </div>
    </div>