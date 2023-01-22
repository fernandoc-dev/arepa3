<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
	============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700,900|Playfair+Display:400,700&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/css/bootstrap.css") ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/style.css") ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/css/dark.css") ?>" type="text/css" />

    <!-- Resume Specific Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/demos/resume/resume.css") ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/demos/resume/css/fonts.css") ?>" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/css/font-icons.css") ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/css/animate.css") ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/css/magnific-popup.css") ?>" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/css/custom.css") ?>" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Media Agency Demo Specific Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/demos/media-agency/media-agency.css")?>"
        type="text/css" />
    <!-- / -->

    <!-- <link rel="stylesheet" href="<?php //echo base_url("assets/canvas/css/colors.php?color=7B6ED6")?>" type="text/css" /> -->
    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/css/colors.php?color=71698a") ?>" type="text/css" />

    <link rel="shortcut icon" href="<?php echo base_url("assets/arepa3/images/common/favicon.png") ?>" />

    <!-- Document Title
	============================================= -->
    <title>Resume | Canvas</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" class="transparent-header sticky-transparent dark" data-sticky-shrink="false">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <!-- Logo
						============================================= -->
                        <div id="logo">
                            <a href="<?php echo base_url("") ?>" class="standard-logo font-secondary ls3"
                                style="line-height: 90px;"><img
                                    src="<?php echo base_url("assets/arepa3/images/common/fc-logo.png") ?>" alt=""></a>
                            <a href="<?php echo base_url("") ?>" class="retina-logo font-secondary ls3"
                                style="line-height: 90px;"><img
                                    src="<?php echo base_url("assets/arepa3/images/common/fc-logo.png") ?>" alt=""></a>
                        </div><!-- #logo end -->

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>

                        <!-- Primary Navigation
						============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container one-page-menu custom-spacing" data-easing="easeInOutExpo"
                                data-speed="1250" data-offset="0">
                                <li class="menu-item"><a class="menu-link" href="<?php echo base_url("")?>" data-href="#wrapper"><i
                                            class="icon-line2-home"></i>
                                        <div>Home</div>
                                    </a></li>
                                <li class="menu-item current"><a class="menu-link" href="<?php echo base_url("blog")?>" data-href="#section-articles"><i
                                            class="icon-book2"></i>
                                        <div>Articles</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header">
            <div id="section-code" class="section m-0 page-section dark">
                <div class="container clearfix">

                    <div class="dark">
                        <div class="heading-block">
                            <h2 class="font-secondary">Welcome to my Blog.</h2>
                            <span class="mt-0">I hope you enjoy your time here.</span>
                        </div>
                    </div>
                    <!-- Posts
					============================================= -->
                    <div id="posts" class="post-grid row grid-container gutter-30" data-layout="fitRows">

                        <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="entry-image">
                                    <a href="<?php echo base_url("assets/canvas/images/blog/full/17.jpg")?>"
                                        data-lightbox="image"><img
                                            src="<?php echo base_url("assets/canvas/images/blog/grid/17.jpg")?>"
                                            alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-title">
                                    <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 10th Feb 2021</li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a>
                                        </li>
                                        <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                                        voluptatem,
                                        dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo
                                        tenetur!</p>
                                    <a href="blog-single.html" class="more-link">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="entry-image">
                                    <iframe src="https://player.vimeo.com/video/87701971" width="500" height="281"
                                        allow="autoplay; fullscreen" allowfullscreen></iframe>
                                </div>
                                <div class="entry-title">
                                    <h2><a href="blog-single-full.html">This is a Standard post with a Vimeo
                                            Video</a></h2>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 16th Feb 2021</li>
                                        <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i>
                                                19</a>
                                        </li>
                                        <li><a href="#"><i class="icon-film"></i></a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem consectetur
                                        pariatur
                                        quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit
                                        deserunt!
                                    </p>
                                    <a href="blog-single-full.html" class="more-link">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="entry-image">
                                    <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/10.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/10.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/20.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/20.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/21.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/21.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-title">
                                    <h2><a href="blog-single-small.html">This is a Standard post with a Slider
                                            Gallery</a>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 24th Feb 2021</li>
                                        <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i>
                                                21</a>
                                        </li>
                                        <li><a href="#"><i class="icon-picture"></i></a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                                        voluptatem,
                                        dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo
                                        tenetur!</p>
                                    <a href="blog-single-small.html" class="more-link">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="entry-image">
                                    <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/10.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/10.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/20.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/20.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/21.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/21.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-title">
                                    <h2><a href="blog-single-small.html">This is a Standard post with a Slider
                                            Gallery</a>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 24th Feb 2021</li>
                                        <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i>
                                                21</a>
                                        </li>
                                        <li><a href="#"><i class="icon-picture"></i></a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                                        voluptatem,
                                        dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo
                                        tenetur!</p>
                                    <a href="blog-single-small.html" class="more-link">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="entry-image">
                                    <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/10.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/10.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/20.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/20.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/21.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/21.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-title">
                                    <h2><a href="blog-single-small.html">This is a Standard post with a Slider
                                            Gallery</a>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 24th Feb 2021</li>
                                        <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i>
                                                21</a>
                                        </li>
                                        <li><a href="#"><i class="icon-picture"></i></a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                                        voluptatem,
                                        dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo
                                        tenetur!</p>
                                    <a href="blog-single-small.html" class="more-link">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="grid-inner">
                                <div class="entry-image">
                                    <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                        <div class="flexslider">
                                            <div class="slider-wrap">
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/10.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/10.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/20.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/20.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                                <div class="slide"><a
                                                        href="<?php echo base_url("assets/canvas/images/blog/full/21.jpg")?>"
                                                        data-lightbox="gallery-item"><img
                                                            src="<?php echo base_url("assets/canvas/images/blog/grid/21.jpg")?>"
                                                            alt="Standard Post with Gallery"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry-title">
                                    <h2><a href="blog-single-small.html">This is a Standard post with a Slider
                                            Gallery</a>
                                    </h2>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> 24th Feb 2021</li>
                                        <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i>
                                                21</a>
                                        </li>
                                        <li><a href="#"><i class="icon-picture"></i></a></li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione,
                                        voluptatem,
                                        dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo
                                        tenetur!</p>
                                    <a href="blog-single-small.html" class="more-link">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer
		============================================= -->
        <footer id="footer" class="page-section dark border-0 p-0 clearfix" style="background-color: #1C1C1C;">
            <div class="container clearfix">
                <div class="si-sticky d-none d-lg-block">
                    <a target="_blank" href="https://www.linkedin.com/in/fernandoc-dev/"
                        class="social-icon si-linkedin si-dark" data-animate="bounceInLeft">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                    <a target="_blank" href="https://github.com/fernandoc-dev" class="social-icon si-github si-dark"
                        data-animate="bounceInLeft" data-delay="100">
                        <i class="icon-github"></i>
                        <i class="icon-github"></i>
                    </a>
                </div>
            </div>

            <!-- Copyrights
			============================================= -->
            <div id="copyrights" style="background-color: #111;">
                <div class="container clearfix">

                    <div class="w-100 text-center">
                        <div class="d-flex justify-content-center justify-content-md-end">
                            <a target="_blank" href="https://www.linkedin.com/in/fernandoc-dev/"
                                class="social-icon si-linkedin si-dark" data-animate="bounceInLeft">
                                <i class="icon-linkedin"></i>
                                <i class="icon-linkedin"></i>
                            </a>
                            <a target="_blank" href="https://github.com/fernandoc-dev"
                                class="social-icon si-github si-dark" data-animate="bounceInLeft" data-delay="100">
                                <i class="icon-github"></i>
                                <i class="icon-github"></i>
                            </a>
                        </div>
                        <span>fer@fernandoc.dev</span>
                        <p class="mb-3">Copyrights &copy; 2023 All Rights Reserved by FERNANDO CARRILLO.</p>

                    </div>
                    <div class="col-md-6 text-center text-md-right">


                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    <script src="<?php echo base_url("assets/canvas/js/jquery.js") ?>"></script>
    <script src="<?php echo base_url("assets/canvas/js/plugins.min.js") ?>"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="<?php echo base_url("assets/canvas/js/functions.js") ?>"></script>

    <script>
    jQuery(window).scroll(function() {
        var pixs = jQuery(window).scrollTop(),
            opacity = pixs / 650,
            element = jQuery('.blurred-img'),
            elementHeight = element.outerHeight(),
            elementNextHeight = jQuery('.content-wrap').find('.page-section').first().outerHeight();
        if ((elementHeight + elementNextHeight + 50) > pixs) {
            element.addClass('blurred-image-visible');
            element.css({
                'opacity': opacity
            });
        } else {
            element.removeClass('blurred-image-visible');
        }
    });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        <?php
                    if (isset($_SESSION['title'])) {
                        echo $_SESSION['title'];
                    }
                    ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                }
                ?>
                </div>
                <div class="modal-footer">
                    <?php
                if (isset($_SESSION['btn1'])) {
                    echo ("<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">" . $_SESSION['btn1'] . "</button>");
                };
                if (isset($_SESSION['btn2'])) {
                    echo ("<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">" . $_SESSION['btn2'] . "</button>");
                };
                if (isset($_SESSION['link'])) {
                    echo ("<button type=\"button\" class=\"btn btn-primary\"><a style=\"color:white\" href=\"" . $_SESSION['link'] . "\">" . $_SESSION['linkm'] . "</a></button>");
                };
                ?>
                </div>
            </div>
        </div>
    </div>

    <?php
if (isset($_SESSION['message'])) {
    echo "<script>$('#Modal').modal('show')</script>";
}
?>
    <!-- Modal -->
    </div>
</body>

</html>