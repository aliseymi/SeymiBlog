<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title><?= $title ?></title>
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
                <a class="logo" href="<?= url('/') ?>">
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


    <!-- masonry
    ================================================== -->
    <section class="s-bricks">

        <div class="masonry">
            <div class="bricks-wrapper h-group">

                <div class="grid-sizer"></div>

                <div class="brick entry featured-grid animate-this">
                    <div class="entry__content">

                        <div class="featured-post-slider">

                            <div class="featured-post-slide">
                                <div class="f-slide">

                                    <div class="f-slide__background" style="background-image:url('<?= asset('img/home/thumbs/featured/featured-1.jpg') ?>');"></div>
                                    <div class="f-slide__overlay"></div>

                                    <div class="f-slide__content">
                                        <ul class="f-slide__meta">
                                            <li>September 06, 2020</li>
                                            <li><a href="#">Naruto Uzumaki</a></li>
                                        </ul>

                                        <h1 class="f-slide__title"><a href="single-standard.html" title="">A Practical Guide to a Minimalist Lifestyle.</a></h1>
                                    </div>

                                </div> <!-- f-slide -->
                            </div> <!-- featured-post-slide -->

                            <div class="featured-post-slide">
                                <div class="f-slide">

                                    <div class="f-slide__background" style="background-image:url('<?= asset('img/home/thumbs/featured/featured-2.jpg') ?>');"></div>
                                    <div class="f-slide__overlay"></div>

                                    <div class="f-slide__content">
                                        <ul class="f-slide__meta">
                                            <li>September 06, 2020</li>
                                            <li><a href="#">Sakura Haruno</a></li>
                                        </ul>

                                        <h1 class="f-slide__title"><a href="single-standard.html" title="">Enhancing Your Designs with Negative Space</a></h1>
                                    </div>

                                </div> <!-- f-slide -->
                            </div> <!-- featured-post-slide -->

                            <div class="featured-post-slide">
                                <div class="f-slide">

                                    <div class="f-slide__background" style="background-image:url('<?= asset('img/home/thumbs/featured/featured-3.jpg') ?>');"></div>
                                    <div class="f-slide__overlay"></div>

                                    <div class="f-slide__content">
                                        <ul class="f-slide__meta">
                                            <li>September 05, 2020</li>
                                            <li><a href="#">Shikamaru Nara</a></li>
                                        </ul>

                                        <h1 class="f-slide__title"><a href="single-standard.html" title="">Music Album Cover Designs for Inspiration</a></h1>
                                    </div>

                                </div> <!-- f-slide -->
                            </div> <!-- featured-post-slide -->

                        </div> <!-- end feature post slider -->

                        <div class="featured-post-nav">
                            <button class="featured-post-nav__prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
                                </svg>
                            </button>
                            <button class="featured-post-nav__next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                                </svg>
                            </button>
                        </div> <!-- featured-post-nav -->

                    </div> <!-- end entry content -->
                </div> <!-- end entry, featured grid -->

                <?php foreach ($posts as $post) : ?>

                    <article class="brick entry format-standard animate-this">

                        <div class="entry__thumb">
                            <a href="single-standard.html" class="thumb-link">
                                <img src="<?= asset($post->image) ?>" srcset="<?= asset($post->image) ?> 1x, <?= asset($post->image) ?> 2x" alt="">
                            </a>
                        </div> <!-- end entry__thumb -->

                        <div class="entry__text">
                            <div class="entry__header">

                                <div class="entry__meta">
                                    <span class="entry__cat-links">
                                        <a href="#">Design</a>
                                        <a href="#">Photography</a>
                                    </span>
                                </div>

                                <h1 class="entry__title"><a href="single-standard.html"><?= $post->title ?></a></h1>

                            </div>
                            <div class="entry__excerpt">
                                <p>
                                    <?= limitString($post->body, 100) ?>
                                </p>
                            </div>
                        </div> <!-- end entry__text -->

                    </article> <!-- end entry -->

                <?php endforeach; ?>

            </div> <!-- end brick-wrapper -->

        </div> <!-- end masonry -->

        <div class="row">
            <div class="column large-12">
                <nav class="pgn">
                    <ul>
                        <li>
                            <a class="pgn__prev" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M12.707 17.293L8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
                                </svg>
                            </a>
                        </li>
                        <li><a class="pgn__num" href="#0">1</a></li>
                        <li><span class="pgn__num current">2</span></li>
                        <li><a class="pgn__num" href="#0">3</a></li>
                        <li><a class="pgn__num" href="#0">4</a></li>
                        <li><a class="pgn__num" href="#0">5</a></li>
                        <li><span class="pgn__num dots">…</span></li>
                        <li><a class="pgn__num" href="#0">8</a></li>
                        <li>
                            <a class="pgn__next" href="#0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M11.293 17.293l1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav> <!-- end pgn -->
            </div> <!-- end column -->
        </div> <!-- end row -->

    </section> <!-- end s-bricks -->


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
                        <span>© Copyright Abstract 2020</span>
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
    <script src="<?= asset('js/home/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= asset('js/home/plugins.js') ?>"></script>
    <script src="<?= asset('js/home/main.js') ?>"></script>

</body>

</html>