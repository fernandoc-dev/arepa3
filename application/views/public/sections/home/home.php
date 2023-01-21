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
        <header id="header" class="transparent-header sticky-transparent" data-sticky-shrink="false">
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
                                <li class="menu-item current"><a class="menu-link" href="#" data-href="#wrapper"><i
                                            class="icon-line2-home"></i>
                                        <div>Intro</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-skills"><i
                                            class="icon-line2-star"></i>
                                        <div>Skills</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-about"><i
                                            class="icon-line2-user"></i>
                                        <div>About</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-contact"><i
                                            class="icon-line2-envelope"></i>
                                        <div>Contact</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-code"><i
                                            class="icon-line2-grid"></i>
                                        <div>Code</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link" href="#" data-href="#section-articles"><i
                                            class="icon-line2-pencil"></i>
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

            <div class="vh-100 vw-100 position-fixed"
                style="top: 0; left: 0; background: #FFF url('<?php echo base_url("assets/arepa3/images/home/fernando-carrillo.jpg") ?>') no-repeat top center; background-size: cover; background-attachment: fixed;">

                <div class="container">
                    <div class="slider-caption dark slider-caption-right">
                        <div class="align-items-end">
                            <h2 class="font-primary ls5" data-animate="fadeIn">Python developer</h2>
                            <p class="font-weight-light ls1 d-none d-sm-block" data-animate="fadeIn" data-delay="400">
                                Fernando Carrillo.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="vh-100 vw-100 position-fixed blurred-img"
                style="top: 0; left: 0; background: #FFF url('<?php echo base_url("assets/arepa3/images/home/black-background.png") ?>') no-repeat top center; background-size: cover; background-attachment: fixed;">
            </div>

        </section>

        <!-- Content
		============================================= -->
        <section id="content" class="bg-transparent">
            <div class="content-wrap pb-0 bg-transparent">

                <div id="section-skills" class="section m-0 page-section dark bg-transparent"
                    style="padding-bottom: 50px">
                    <div class="container">
                        <div class="heading-block center">
                            <h2 class="font-secondary">Frameworks</h2>
                        </div>

                        <div class="row justify-content-center col-mb-50 mb-0">
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img
                                                src="<?php echo base_url("assets/arepa3/images/home/icons/fastapi.png") ?>"
                                                alt=""></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">FastAPI</h3>
                                        <p style="color:#AAA;">Modern and fast framework for building APIs with
                                            Python.<br> Strongest advantage: Automatic documentation and is becoming
                                            more and more popular.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img
                                                src="<?php echo base_url("assets/arepa3/images/home/icons/flask.png") ?>"
                                                alt=""></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Flask</h3>
                                        <p style="color:#AAA;">Micro Framework to develop easily web
                                            applications.<br>Strongest advantage: It’s has a small and easy-to-extend
                                            core.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img
                                                src="<?php echo base_url("assets/arepa3/images/home/icons/django.png") ?>"
                                                alt=""></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Django</h3>
                                        <p style="color:#AAA;">Django is a high-level Python web framework that
                                            encourages rapid development and clean, pragmatic design.<br>Strongest
                                            advantage: Django is the heavyweight of Python's frameworks.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="heading-block center">
                            <h2 class="font-secondary">Databases/ORMs</h2>
                        </div>

                        <div class="row justify-content-center col-mb-50 mb-0">
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img
                                                src="<?php echo base_url("assets/arepa3/images/home/icons/sql.png") ?>"
                                                alt=""></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">MySQL/PostgreSQL</h3>
                                        <p style="color:#AAA;">Those are among the DBMSs most used worldwide.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img
                                                src="<?php echo base_url("assets/arepa3/images/home/icons/sqlalchemy.png") ?>"
                                                alt=""></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">SQLAlchemy</h3>
                                        <p style="color:#AAA;">The most popular ORM for Python applications.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img
                                                src="<?php echo base_url("assets/arepa3/images/home/icons/peewee.png") ?>"
                                                alt=""></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Peewee</h3>
                                        <p style="color:#AAA;">This ORM is an excellent alternative for operating the
                                            models in Python applications.</p>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="container">
                        <div class="heading-block center">
                            <h2 class="font-secondary">Other technologies</h2>
                        </div>

                        <div class="row justify-content-center col-mb-50 mb-0">
                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img
                                                src="<?php echo base_url("assets/arepa3/images/home/icons/github.png") ?>"
                                                alt=""></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Git/Github</h3>
                                        <p style="color:#AAA;">This is a must nowadays for collaborative teams. </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img
                                                src="<?php echo base_url("assets/arepa3/images/home/icons/docker.png") ?>"
                                                alt=""></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Docker</h3>
                                        <p style="color:#AAA;">Standardized environments using local containers permit
                                            setting the developing environment in minutes.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="#"><img
                                                src="<?php echo base_url("assets/arepa3/images/home/icons/jenkins.png") ?>"
                                                alt=""></a>
                                    </div>
                                    <div class="fbox-content">
                                        <h3 class="font-weight-normal ls2" style="color: #FFF">Jenkins</h3>
                                        <p style="color:#AAA;">The most popular continuous integration server on the
                                            market.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <div id="section-about" class="section page-section m-0"
                    style="background: #EEE url('<?php echo base_url("assets/arepa3/images/home/fernando-carrillo-21.jpg") ?>') no-repeat center center; background-size: cover; padding: 100px 0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 offset-md-7 clearfix">
                                <div class="heading-block">
                                    <h2 class="font-secondary">Nice to meet you</h2>
                                </div>
                                <p>Hello, my name is Fernando Carrillo and I am a backend developer with a focus on
                                    Python technologies. With 5 years of experience in the industry, I have a deep
                                    understanding of the language and its various frameworks, such as Django, Flask and
                                    FastAPI. I have worked on a variety of projects, from developing RESTful APIs to
                                    building data pipelines. I am passionate about using my skills to solve complex
                                    problems and deliver high-quality solutions. I am always looking for new challenges
                                    and opportunities to learn and grow as a developer. Thank you for visiting my
                                    website!</p>
                                <a target="_blank" href="<?php echo base_url("assets/arepa3/others/Backend developer - Fernando Carrillo.pdf")?>" class="button button-large button-border button-black button-dark ml-0"><i
                                        class="icon-line-cloud-download"></i> Download CV</a>
                            </div>
                        </div>
                    </div>
                    <div class="video-wrap">
                        <div class="video-overlay d-sm-block d-md-none" style="background: rgba(255,255,255,0.9);">
                        </div>
                    </div>
                </div>

                <div id="section-contact" class="section page-section m-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="heading-block">
                                    <h2 class="font-secondary">I'd appreciate a message</h2>
                                </div>
                                <form class="row mb-0" id="template-contactform" name="template-contactform"
                                    action="<?php echo base_url("")?>" method="post">
                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" id="template-contactform-name"
                                            name="template-contactform-name" value=""
                                            class="sm-form-control border-form-control required" placeholder="Name" />
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="email" id="template-contactform-email"
                                            name="template-contactform-email" value=""
                                            class="required email sm-form-control border-form-control"
                                            placeholder="Email Address" />
                                    </div>
                                    <div class="clear"></div>
                                    <div class="col-12 form-group">
                                        <input type="text" id="template-contactform-subject" name="subject" value=""
                                            class="required sm-form-control border-form-control"
                                            placeholder="Subject" />
                                    </div>
                                    <div class="col-12 form-group">
                                        <textarea class="required sm-form-control border-form-control"
                                            id="template-contactform-message" name="template-contactform-message"
                                            rows="7" cols="30" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button class="button button-black ml-0 topmargin-sm" type="submit"
                                            id="template-contactform-submit" name="template-contactform-submit"
                                            value="submit">Send Message</button>
                                    </div>
                                    <div class="col-12 form-group d-none">
                                        <input type="text" id="template-contactform-botcheck"
                                            name="template-contactform-botcheck" value="" class="sm-form-control" />
                                    </div>
                                    <input type="hidden" name="prefix" value="template-contactform-">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="section-code" class="section m-0 page-section dark">
                    <div class="container clearfix">

                        <div class="dark">
                            <div class="heading-block">
                                <h2 class="font-secondary">Let's code.</h2>
                                <span class="mt-0">I believe that sharing knowledge is one of the best ways to
                                    learn.</span>
                            </div>
                        </div>
                        <div class="row col-mb-50">

                            <div class="col-md-6">
                                <div class="emphasis-title bottommargin-sm">
                                    <h3 style="font-size: 30px;" class="font-body font-weight-semibold">Algorithm
                                        practices</h2>
                                </div>
                                <p style="color: #777; margin-bottom: 25px;" class="lead">Here you can find programming
                                    logic exercises from books or websites like HackerRank or LeetCode, as well as
                                    technical tests.</p>
                                <a href="#" class="button button-large button-border button-black button-dark ml-0"><i
                                        class="icon-line-cog"></i>Algorithm practices</a>
                            </div>

                            <div class="col-md-6">
                                <div class="emphasis-title bottommargin-sm">
                                    <h3 style="font-size: 30px;" class="font-body font-weight-semibold">My programming
                                        notes</h2>
                                </div>
                                <p style="color: #777; margin-bottom: 25px;" class="lead">Here you can find different
                                    courses product of my summaries about the technologies that I've studied.</p>
                                <a href="#" class="button button-large button-border button-black button-dark ml-0"><i
                                        class="icon-line-book-open"></i>Notes</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="section-articles" class="section page-section m-0 bg-color clearfix" style="padding: 100px 0">
                    <div class="container clearfix">

                        <div class="dark">
                            <div class="heading-block">
                                <h2 class="font-secondary">Most read articles.</h2>
                                <span class="mt-0">I enjoy sharing my thoughts and insights on various topics related to
                                    my field. If you're interested in reading more, please check out my blog.</span>
                            </div>
                        </div>

                        <div id="posts" class="post-grid row gutter-30 mb-0" data-layout="fitRows">

                            <div class="entry col-md-6 col-lg-4">
                                <div class="grid-inner">
                                    <div class="entry-box-shadow">
                                        <div class="entry-image mb-0">
                                            <a href="images/blog/full/17.jpg" data-lightbox="image"><img
                                                    src="<?php echo base_url("assets/canvas/demos/resume/images/blog/1.jpg") ?>"
                                                    alt="Standard Post with Image"></a>
                                        </div>
                                        <div class="entry-meta-wrapper">
                                            <div class="entry-meta mt-0">
                                                <a href="#" class="text-muted">March 25th, 2021</a>
                                            </div>
                                            <div class="entry-title">
                                                <h2><a href="#">You can now listen to headphones.</a></h2>
                                            </div>
                                            <div class="entry-content mt-3">
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim
                                                    culpa reiciendis et explicabo tenetur...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-md-6 col-lg-4">
                                <div class="grid-inner">
                                    <div class="entry-box-shadow">
                                        <div class="entry-image mb-0">
                                            <a href="images/blog/full/17.jpg" data-lightbox="image"><img
                                                    src="<?php echo base_url("assets/canvas/demos/resume/images/blog/2.jpg") ?>"
                                                    alt="Standard Post with Image"></a>
                                        </div>
                                        <div class="entry-meta-wrapper">
                                            <div class="entry-meta mt-0">
                                                <a href="#" class="text-muted">March 25th, 2021</a>
                                            </div>
                                            <div class="entry-title">
                                                <h2><a href="#">Collaboratively monetize multifunctional.</a></h2>
                                            </div>
                                            <div class="entry-content mt-3">
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim
                                                    culpa reiciendis et explicabo tenetur...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="entry col-md-6 col-lg-4">
                                <div class="grid-inner">
                                    <div class="entry-box-shadow">
                                        <div class="entry-image mb-0">
                                            <a href="images/blog/full/17.jpg" data-lightbox="image"><img
                                                    src="<?php echo base_url("assets/canvas/demos/resume/images/blog/3.jpg") ?>"
                                                    alt="Standard Post with Image"></a>
                                        </div>
                                        <div class="entry-meta-wrapper">
                                            <div class="entry-meta mt-0">
                                                <a href="#" class="text-muted">March 25th, 2021</a>
                                            </div>
                                            <div class="entry-title">
                                                <h2><a href="#">Professionally disinter-mediate excellent.</a></h2>
                                            </div>
                                            <div class="entry-content mt-3">
                                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim
                                                    culpa reiciendis et explicabo tenetur...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="page-section dark border-0 p-0 clearfix" style="background-color: #1C1C1C;">
            <div class="container clearfix">
                <div class="si-sticky d-none d-lg-block">
                <a target="_blank" href="https://www.linkedin.com/in/fernandoc-dev/" class="social-icon si-linkedin si-dark" data-animate="bounceInLeft">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                    <a target="_blank" href="https://github.com/fernandoc-dev" class="social-icon si-github si-dark" data-animate="bounceInLeft" data-delay="100">
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
                        <p class="mb-3">Copyrights &copy; 2023 All Rights Reserved by FERNANDO CARRILLO.</p>
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

</body>

</html>