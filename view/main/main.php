<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/assets/css/base.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <!-- script
    ================================================== -->
    <script src="/assets/js/modernizr.js"></script>
    <script defer src="/assets/js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon-16x16.png">
    <link rel="manifest" href="/assets/site.webmanifest">

</head>

<body id="top">

<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader" class="dots-fade">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!-- Header
================================================== -->
<header class="s-header">

    <div class="row">

        <div class="s-header__content column">
            <h1 class="s-header__logotext">
                <a href="http://hw.com" title="">Blog about backend development.</a>
            </h1>
            <p class="s-header__tagline">Welcome to my blog.</p>
        </div>

    </div> <!-- end row -->

    <nav class="s-header__nav-wrap">

        <div class="row">

            <ul class="s-header__nav">
                <li class="current"><a href="http://hw.com">Home</a></li>
                <li class="has-children"><a href="#0">Dropdown</a>
                    <ul>
                        <li><a href="#0">Submenu 01</a></li>
                        <li><a href="#0">Submenu 02</a></li>
                        <li><a href="#0">Submenu 03</a></li>
                    </ul>
                </li>
                <li><a href="<?=BASE_URL?>add">Add article</a></li>
                <li><a href="<?=BASE_URL?>edit">Edit article</a></li>
            </ul> <!-- end #nav -->

        </div>

    </nav> <!-- end #nav-wrap -->

    <a class="header-menu-toggle" href="#0" title="Menu"><span>Menu</span></a>

</header> <!-- Header End -->

<div class="s-content">

    <div class="row">

        <div id="main" class="s-content__main large-8 column">
            <?= $content ?>

        </div> <!-- end main -->
        <?= $sidebar?>

    </div> <!-- end row -->

</div> <!-- end content-wrap -->

<footer class="s-footer">

    <div class="ss-copyright">
        <span>Blog 2022</span>
        <span>Design by <a href="http://hw.com">K.L.L.</a></span>
    </div>

    </div> <!-- end footer__bottom -->


    <div class="ss-go-top">
        <a class="smoothscroll" title="Back to Top" href="#top">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 0l8 9h-6v15h-4v-15h-6z"/>
            </svg>
        </a>
    </div> <!-- end ss-go-top -->

</footer> <!-- end Footer-->


<!-- Java Script
================================================== -->
<script src="/assets/js/jquery-3.2.1.min.js"></script>
<script src="/assets/js/main.js"></script>

</body>

</html>