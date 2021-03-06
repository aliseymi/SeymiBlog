<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?= isset($title) ? $title : $post->title ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?= asset('css/home/styles.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/home/vendor.css') ?>">

    <!-- script
    ================================================== -->
    <script src="./js/home/modernizr.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= asset('apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= asset('favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= asset('favicon-16x16.png') ?>">
    <!-- <link rel="manifest" href="site.webmanifest"> -->

</head>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="row s-header__content">

            <div class="s-header__logo">
                <a class="logo" href="index.html">
                    <img src="<?= asset('img/home/logo.svg') ?>" alt="Homepage">
                </a>
            </div>

            <nav class="s-header__nav-wrap">

                <h2 class="s-header__nav-heading h6">Site Navigation</h2>

                <ul class="s-header__nav">
                    <?php if (isLoggedIn()) : ?>

                        <li class="current"><a href="<?= url('/') ?>" title="">Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="">Categories</a>
                            <ul class="sub-menu">
                                <li><a href="category.html">Design</a></li>
                                <li><a href="category.html">Lifestyle</a></li>
                                <li><a href="category.html">Photography</a></li>
                                <li><a href="category.html">Vacation</a></li>
                                <li><a href="category.html">Work</a></li>
                                <li><a href="category.html">Health</a></li>
                                <li><a href="category.html">Family</a></li>
                                <li><a href="category.html">Relationship</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#0" title="">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="single-video.html">Video Post</a></li>
                                <li><a href="single-audio.html">Audio Post</a></li>
                                <li><a href="single-gallery.html">Gallery Post</a></li>
                                <li><a href="single-standard.html">Standard Post</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= url('dashboard/index') ?>" title="">Dashboard</a></li>

                    <?php else : ?>

                        <li><a href="<?= url('login/show') ?>" title="">Login</a></li>
                        <li><a href="<?= url('register/show') ?>" title="">Register</a></li>

                    <?php endif; ?>
                </ul> <!-- end header__nav -->

                <a href="#0" title="Close Menu" class="s-header__overlay-close close-mobile-menu">Close</a>

            </nav> <!-- end header__nav-wrap -->

            <a class="s-header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

            <div class="s-header__search">

                <form role="search" method="get" class="s-header__search-form" action="#">
                    <label>
                        <span class="hide-content">Search for:</span>
                        <input type="search" class="s-header__search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
                    </label>
                    <input type="submit" class="s-header__search-submit" value="Search">
                </form>

                <a href="#0" title="Close Search" class="s-header__overlay-close">Close</a>

            </div> <!-- end search wrap -->

            <a class="s-header__search-trigger" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M10 18a7.952 7.952 0 004.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0018 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path>
                </svg>
            </a>

        </div> <!-- end s-header__content -->

    </header> <!-- end header -->


    <!-- content
    ================================================== -->
    <section class="s-content s-content--single">
        <div class="row">
            <div class="column large-12">

                <article class="s-post entry format-standard">

                    <div class="s-content__media">
                        <div class="s-content__post-thumb">
                            <img src="<?= asset($post->image) ?>" srcset="<?= asset($post->image) ?> 2100w, 
                            <?= asset($post->image) ?> 1050w, 
                            <?= asset($post->image) ?> 525w" sizes="(max-width: 2100px) 100vw, 2100px" alt="">
                        </div>
                    </div> <!-- end s-content__media -->

                    <div class="s-content__primary">

                        <h2 class="s-content__title s-content__title--post"><?= $post->title ?></h2>

                        <ul class="s-content__post-meta">
                            <li class="date"><?= date('Y/m/d - H:i', strtotime($post->created_at)) ?></li>
                            <li class="cat"><a href="">Frontend</a><a href="">Design</a></li>
                        </ul>

                        <p class="lead"><?= $post->body ?></p>

                    </div> <!-- end s-content__primary -->
                </article>

            </div> <!-- end column -->
        </div> <!-- end row -->


        <!-- comments
        ================================================== -->

    </section> <!-- end s-content -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer">

        <div class="s-footer__main">

            <div class="row">

                <div class="column large-4 medium-6 tab-12 s-footer__info">

                    <h5>About Our Site</h5>

                    <p>
                        Lorem ipsum Ut velit dolor Ut labore id fugiat in ut fugiat nostrud qui in dolore commodo eu magna Duis cillum dolor officia esse mollit proident Excepteur exercitation nulla. Lorem ipsum In reprehenderit commodo aliqua irure labore.
                    </p>

                </div> <!-- end s-footer__info -->

                <div class="column large-2 medium-3 tab-6 s-footer__site-links">

                    <h5>Site Links</h5>

                    <ul>
                        <li><a href="#0">About Us</a></li>
                        <li><a href="#0">Blog</a></li>
                        <li><a href="#0">FAQ</a></li>
                        <li><a href="#0">Terms</a></li>
                        <li><a href="#0">Privacy Policy</a></li>
                    </ul>

                </div> <!-- end s-footer__site-links -->

                <div class="column large-2 medium-3 tab-6 s-footer__social-links">

                    <h5>Social</h5>

                    <ul>
                        <li><a href="#0">Twitter</a></li>
                        <li><a href="#0">Facebook</a></li>
                        <li><a href="#0">Dribbble</a></li>
                        <li><a href="#0">Pinterest</a></li>
                        <li><a href="#0">Instagram</a></li>
                    </ul>

                </div> <!-- end s-footer__social links -->

                <div class="column large-4 medium-12 s-footer__subscribe">

                    <h5>Subscribe</h5>

                    <p>Keep yourself updated. Subscribe to our newsletter.</p>

                    <div class="subscribe-form">

                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required="">

                            <input type="submit" name="subscribe">

                            <label for="mc-email" class="subscribe-message"></label>

                        </form>

                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div> <!-- end row -->

        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">
                <div class="column">
                    <div class="ss-copyright">
                        <span>?? Copyright Abstract 2020</span>
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                    </div> <!-- end ss-copyright -->
                </div>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M6 4h12v2H6zm5 10v6h2v-6h5l-6-6-6 6z" />
                    </svg>
                </a>
            </div> <!-- end ss-go-top -->
        </div> <!-- end s-footer__bottom -->

    </footer> <!-- end s-footer -->


    <!-- Java Script
   ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>