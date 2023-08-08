<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sohyeb Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('assets/css/flexslider.css') }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- Modernizr JS -->
    <script src="{{ asset('assets/js/modernizr-2.6.2.min.js') }}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                <div class="text-center">
                    <div class="author-img" style="background-image: url(<?= $owner->image_url ?>);"></div>
                    <h1 id="colorlib-logo"><a href="index.html">{{ $owner->name }}</a></h1>
                    <span class="position"><a href="#">{{ $owner->work }}</a> in Palestine</span>
                </div>
                <nav id="colorlib-main-menu" role="navigation" class="navbar">
                    <div id="navbar" class="collapse">
                        <ul>
                            <li class="active"><a href="#" data-nav-section="home">Home</a></li>
                            <li><a href="#" data-nav-section="about">About</a></li>
                            <li><a href="#" data-nav-section="services">Services</a></li>
                            <li><a href="#" data-nav-section="skills">Skills</a></li>
                            <li><a href="#" data-nav-section="education">Education</a></li>
                            <li><a href="#" data-nav-section="experience">Experience</a></li>
                            <li><a href="#" data-nav-section="work">Work</a></li>
                            <li><a href="#" data-nav-section="contact">Contact</a></li>
                        </ul>
                    </div>
                </nav>

                <div class="colorlib-footer">
                    <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved. <i class="icon-heart" aria-hidden="true"></i>
                    </p>
                </div>

            </aside>

            <div id="colorlib-main">
                <section id="colorlib-hero" class="js-fullheight" data-section="home">
                    <div class="flexslider js-fullheight">
                        <ul class="slides">
                            <li style="background-image: url(assets/images/img_bg_1.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner js-fullheight">
                                                <div class="desc">
                                                    <h1>Hi! <br>I'm Sohyeb</h1>
                                                    <h2>Createive and Professional Developer <br><a href="{{ route('home') }}">My Portofolio </a></h2>
                                                    <p><a class="btn btn-primary btn-learn">Download CV <i class="icon-download4"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li style="background-image: url(assets/images/img_bg_2.jpg);">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h1>I am <br>a Developer</h1>
                                                    <h2>Createive and Professional Developer <br><a href="{{ route('home') }}">My Portofolio</a></h2>
                                                    <p><a class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

                <section class="colorlib-about" data-section="about">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="col-md-12">
                                        <div class="about-desc">
                                            <span class="heading-meta">About Us</span>
                                            <h2 class="colorlib-heading">Who Am I?</h2>
                                            <p><strong>Hi I'm {{ $owner->name }}</strong> {{ $owner->Brief }}</p>
                                            <!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="services color-1">
                                            <span class="icon2"><i class="icon-bulb"></i></span>
                                            <h3>Problem Solving</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                                        <div class="services color-2">
                                            <span class="icon2"><i class="icon-globe-outline"></i></span>
                                            <h3>Web Design</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInTop">
                                        <div class="services color-3">
                                            <span class="icon2"><i class="icon-data"></i></span>
                                            <h3>Software</h3>
                                        </div>
                                    </div>
                                    <div class="col-md-3 animate-box" data-animate-effect="fadeInBottom">
                                        <div class="services color-4">
                                            <span class="icon2"><i class="icon-phone3"></i></span>
                                            <h3>Application</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                        <div class="hire">
                                            <h2>I am happy to know you <br>that 300+ projects done sucessfully!</h2>
                                            <a href="#" class="btn-hire">Hire me</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <section class="colorlib-services" data-section="services">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">What I do?</span>
                                <h2 class="colorlib-heading">Here are some of my expertise</h2>
                            </div>
                        </div>
                        <div class="row row-pt-md">
                            @foreach($expertises as $expertise)
                            <div class="col-md-4 text-center animate-box">
                                <div class="services color-{{ $expertise->id }}">
                                    <span class="icon">
                                        <i class="{{ $expertise->icon }}"></i>
                                    </span>
                                    <div class="desc">
                                        <h3>{{ $expertise->name }}</h3>
                                        <p>{{ $expertise->brief }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>


                <section class="colorlib-skills" data-section="skills">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">My Specialty</span>
                                <h2 class="colorlib-heading animate-box">My Skills</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                            </div>
                            @foreach($skills as $skill)
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>{{ $skill->name }}</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-{{ $skill->id }}" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100" style="width:<?= $skill->percentage ?>%">
                                            <span>{{ $skill->percentage }}%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section class="colorlib-education" data-section="education">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Education</span>
                                <h2 class="colorlib-heading animate-box">Education</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="fancy-collapse-panel">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        @foreach($educations as $education)
                                        @if($education->id == 1)
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading{{ $education->id }}">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $education->id }}" aria-expanded="true" aria-controls="collapse{{ $education->id }}">{{ $education->education_degree }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse{{ $education->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{ $education->id }}">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>{{ $education->degree_brief }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @else
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading{{ $education->id }}">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $education->id }}" aria-expanded="false" aria-controls="collapse{{ $education->id }}">{{ $education->education_degree }}
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse{{ $education->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $education->id }}">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>{{ $education->degree_brief }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-experience" data-section="experience">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Experience</span>
                                <h2 class="colorlib-heading animate-box">Work Experience</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline-centered">

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">

                                            <div class="timeline-icon color-1">
                                                <i class="icon-pen2"></i>
                                            </div>

                                            <div class="timeline-label">
                                                <h2><a href="#">{{ $work->title }}</a> <span>{{ $work->date }}</span></h2>
                                                <p>{{ $work->work_brief }}</p>
                                            </div>
                                        </div>
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-none">
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-work" data-section="work">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">My Work</span>
                                <h2 class="colorlib-heading animate-box">Recent Work</h2>
                            </div>
                        </div>

                        <div class="row">
                            @foreach($projects as $project)
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project" style="background-image: url(<?= $project->image_url ?>);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">{{ $project->project_name }}</a></h3>
                                            <span>Website</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12 animate-box">
                                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                            </div>
                        </div> -->
                    </div>
                </section>



                <section class="colorlib-contact" data-section="contact">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Get in Touch</span>
                                <h2 class="colorlib-heading">Contact</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-globe-outline"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="#">sohyebjarwan@gmail.com</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-map"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p>Palestine - Gaza - AlNusirat - Salhi Tower - Tower 4</p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="tel://">+972 59 570 9863</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-md-push-1">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                        <form action="{{ route('communications.store') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Name">
                                            </div>

                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Email">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control" placeholder="Subject">
                                            </div>

                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control" placeholder="Phone">
                                            </div>

                                            <div class="form-group">
                                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div><!-- end:colorlib-main -->
        </div><!-- end:container-wrap -->
    </div><!-- end:colorlib-page -->

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <!-- jQuery Easing -->
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <!-- Flexslider -->
    <script src="{{ asset('assets/js/jquery.flexslider-min.js') }}"></script>
    <!-- Owl carousel -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <!-- Counters -->
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>


    <!-- MAIN JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>