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

    <!-- Bootstrap Data Table Plugin -->
    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/css/components/bs-datatable.css") ?>"
        type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/css/custom.css") ?>" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="<?php echo base_url("assets/canvas/css/colors.php?color=5e5e5e") ?>" type="text/css" />

    <link rel="shortcut icon" href="<?php echo base_url("assets/arepa3/images/common/favicon.png") ?>" />

    <!-- Document Title
	============================================= -->
    <title>Blog</title>

</head>

<body class="stretched dark">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix dark">

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
                                <li class="menu-item"><a class="menu-link"
                                        href="<?php echo base_url("admin/algorithms_admin")?>"><i
                                            class="icon-code1"></i>
                                        <div>Algorithms</div>
                                    </a></li>
                                    <li class="menu-item"><a class="menu-link"
                                        href="<?php echo base_url("admin/technologies_admin")?>"><i
                                            class="icon-line2-notebook"></i>
                                        <div>Technologies</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link"
                                        href="<?php echo base_url("admin/notes_admin")?>"><i
                                            class="icon-files"></i>
                                        <div>Notes</div>
                                    </a></li>
                                <li class="menu-item current"><a class="menu-link"
                                        href="<?php echo base_url("admin/blog_admin")?>"><i class="icon-book2"></i>
                                        <div>Blog</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link"
                                        href="<?php echo base_url("login/out")?>"><i class="icon-key1"></i>
                                        <div>Exit</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->
        <!-- Content
        ============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <h1>Blog</h1>
                    <a href="<?php echo base_url("admin/blog_admin/create")?>"
                        class="button button-light button-small button-border button-rounded ml-0 mb-4">
                        <i class="icon-line-cog"></i>New article</a>

                    <div class="table-responsive">
                        <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>TITLE</th>
                                    <th>URL</th>
                                    <th>DATE</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>TITLE</th>
                                    <th>URL</th>
                                    <th>DATE</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                foreach ($articles as $article) {
                                    echo "
                                        <tr>
                                            <td>" . $article->id . "</td>
                                            <td>" . $article->title . "</td>
                                            <td>" . $article->url . "</td>
                                            <td>" . $article->created_at . "</td>
                                            <td>
                                                <a target=\"_blank\" href=\"" . base_url("blog/") . $article->url .  "\" class=\"button button-3d button-rounded button-green\"><i class=\"icon-book-reader\"></i></a>
                                                <a href=\"" . base_url("admin/blog_admin/update/") . $article->id .  "\" class=\"button button-3d button-rounded button-blue\"><i class=\"icon-edit1\"></i></a>
                                                <a href=\"" . base_url("admin/blog_admin/delete/") . $article->id .  "\" class=\"button button-3d button-rounded button-red\"><i class=\"icon-trash2\"></i></a>
                                            </td>
                                        </tr>
                                    ";
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </section><!-- #content end -->

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

    <!-- Bootstrap Data Table Plugin -->
    <script src="<?php echo base_url("assets/canvas/js/components/bs-datatable.js") ?>"></script>

    <!-- Footer Scripts
	============================================= -->
    <script src="<?php echo base_url("assets/canvas/js/functions.js") ?>"></script>

    <script>
    $(document).ready(function() {
        $('#datatable1').dataTable();
    });
    </script>

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
</body>

</html>