@extends('layouts.user')

@section('title')
    <title>GIS Laravel</title>
@endsection

@section('content')
    <div id="royal_preloader"></div>

    <!-- Begin Header -->
    <header>
        <!-- Begin Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand scroll-link" href="#home" data-id="home"><span class="icon-handle-streamline-vector logo"></span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home" data-id="home" class="scroll-link">Home</a></li>
                            <li><a href="#about_app" data-id="about_app" class="scroll-link">About</a></li>
                            <li><a href="#map" data-id="map" class="scroll-link">Mapping</a></li>
                            <li><a href="#services" data-id="services" class="scroll-link">Services</a></li>
                            <li><a href="#ourcount" data-id="ourcount" class="scroll-link">Our Data</a></li>
                            <li><a href="#contact" data-id="contact" class="scroll-link">Contact</a></li>
                            
                            @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/admin') }}">Admin</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endauth
                            @endif
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

    <!-- Begin Jumbotron -->
    <div class="jumbotron jumbotron-main" id="home">
        <div id="particles-js"></div><!-- /.particles div -->
        <div class="container center-vertically-holder">
            <div class="center-vertically">
                <div class="col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <h1 class="scaleReveal">
                        A template with a bit of a different <strong>look &amp; feel</strong>.
                    </h1>
                    <hr class="bottomReveal">
                    <p class="bottomReveal">Particles is a fun and multipurpose template, with clean &amp; modern design <i>+</i>&nbsp; code.</p>
                    <a href="#ideology" data-id="ideology" class="scroll-link">
                        <div class="scroll-indicator rotateBottomReveal">
                            <span class="ion-mouse"></span><br>
                            <span class="ion-android-arrow-down arrow-scroll-indicator"></span>
                        </div>
                    </a>
                </div><!-- /.column -->
            </div><!-- /.vertical center -->
        </div><!-- /.container -->
    </div>
    <!-- End Jumbotron -->

    <!-- Begin Intro -->
    <section id="about_app">

        <!-- Begin Hello Intro -->
        <div id="hello-intro" class="pt60 pb60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-sm-3">
                        <h2 class="no-margin rotateLeftReveal">Hello.</h2>
                    </div>
                    <div class="col-lg-10 col-sm-9 mt30-xs">
                        <h3 class="no-margin rightReveal">We are an interactive agency with a focus on UI design and development. Our team is from all over the world and <strong>we know how to deliver quality pixels from miles away</strong>.</h3>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.div -->
        <!-- End Hello Intro -->

        <!-- Begin Quote Carousel -->
        <div id="carousel" class="testimonial-carousel pt40 pb20">                  
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 text-center">
                        <span class="pe-7s-close heading-3-icon"></span>
                        <h2 class="heading-3">Testimonials</h2>
                        <div class="fade-quote-carousel carousel slide" id="quote-carousel" data-ride="carousel" data-interval="3000">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#quote-carousel" data-slide-to="1"></li>
                                <li data-target="#quote-carousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item">
                                    <blockquote>
                                        <p>"Phasellus pulvinar lacinia elit nec tristique. Nulla accumsan velit id nulla tincidunt ornare. Sed cursus urna sed. Aliquam elementum orci at dolor viverra."</p>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <p>"Phasellus pulvinar lacinia elit nec tristique. Nulla accumsan velit id nulla tincidunt ornare. Sed cursus urna sed. Aliquam elementum orci at dolor viverra."</p>
                                    </blockquote>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        <p>"Phasellus pulvinar lacinia elit nec tristique. Nulla accumsan velit id nulla tincidunt ornare. Sed cursus urna sed. Aliquam elementum orci at dolor viverra."</p>
                                    </blockquote>
                                </div>
                            </div>
                            
                        </div><!-- /.carousel -->   
                    </div><!-- /.column -->                     
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.carousel -->
        <!-- End Quote Carousel -->

    </section><!-- /.section -->
    <!-- End Intro -->

    <!-- Begin Map -->
    <div id="map"></div>
    <!-- End Map -->
    
    <!-- Begin Services -->
    <section id="services" class="background2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 section-title text-center">
                    <h2>Services</h2>
                    <span class="section-divider"></span>
                </div><!-- /.column -->
            </div><!-- /.row -->

            <div class="row">
                <!-- Item 1 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="services-box leftReveal">
                        <span class="pe-7s-airplay services-icon"></span>
                        <h3 class="service-name">1. Web Design</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item1-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 1 Modal -->
                <div class="modal fade" id="item1-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-airplay services-icon-2"></span>
                                <h4 class="service-title">Web Design</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Item 2 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30-xs">
                    <div class="services-box topReveal">
                        <span class="services-badge badge">New</span>
                        <span class="pe-7s-phone services-icon"></span>
                        <h3 class="service-name">2. Applications</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item2-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 2 Modal -->
                <div class="modal fade" id="item2-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-phone services-icon-2"></span>
                                <h4 class="service-title">Applications</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Item 3 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30-sm mt30-xs">
                    <div class="services-box rightReveal">
                        <span class="pe-7s-camera services-icon"></span>
                        <h3 class="service-name">3. Photography</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item3-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 3 Modal -->
                <div class="modal fade" id="item3-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-camera services-icon-2"></span>
                                <h4 class="service-title">Photography</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Item 4 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30">
                    <div class="services-box leftReveal">
                        <span class="services-badge badge">New</span>
                        <span class="pe-7s-anchor services-icon"></span>
                        <h3 class="service-name">4. Iconography</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item4-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 4 Modal -->
                <div class="modal fade" id="item4-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-anchor services-icon-2"></span>
                                <h4 class="service-title">Iconography</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Item 5 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30">
                    <div class="services-box bottomReveal">
                        <span class="pe-7s-users services-icon"></span>
                        <h3 class="service-name">5. Support</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item5-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 5 Modal -->
                <div class="modal fade" id="item5-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-users services-icon-2"></span>
                                <h4 class="service-title">Support</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Item 6 -->
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30">
                    <div class="services-box rightReveal">
                        <span class="services-badge badge">New</span>
                        <span class="pe-7s-volume services-icon"></span>
                        <h3 class="service-name">6. Audio</h3>
                        <p class="text-small">Lorem ipsum dolor sit amet, consectet adipiscing elit. Cras est urna, imperd eget sem at, pellentes que cursus elit.</p>
                        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#item6-services">Info</button>
                    </div>
                </div><!-- /.column --> 
                <!-- Item 6 Modal -->
                <div class="modal fade" id="item6-services" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ion-ios-close-empty"></span>
                                </button>
                                <span class="pe-7s-volume services-icon-2"></span>
                                <h4 class="service-title">Audio</h4>
                            </div>
                            <div class="modal-body">
                                <p>No, thank ye, Bunger, said the English Captain, "he's welcome to the arm he has, since I can't help it, and didn't know him then; but not to another one. No more White Whales for me; I've lowered for him once.</p>
                                <h5 class="heading-1 modal-heading mb20">Why us</h5>
                                <p>"Well, then," interrupted Bunger, "give him your left arm for bait to get the right. Do you know, gentlemen"—very gravely and mathematically bowing to each Captain in succession—"Do you know, gentlemen, that the digestive organs of the whale are so inscrutably constructed by Divine Providence, that it is quite impossible for him to completely digest even a man's arm? And he knows it too.</p>
                                <h5 class="heading-1 modal-heading mb20">Focusing</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed.</p>
                                <h5 class="heading-1 modal-heading mb20">Professionals</h5>
                                <p class="no-margin-bottom">"Good God!" cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah. Phasellus pulvinar lacinia elit nec tristique.</p>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- End Services -->

    <!-- Begin Our Count -->
    <section id="ourcount" class="section-padding parallax-window our-count" data-parallax="scroll" data-image-src="{{asset('assets_frontend_user/images/slider1.jpg')}}">
        <div class="container">
            <div class="row mb30">
                <div class="section-title col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3 text-center">
                    <h2>The Count</h2>
                    <span class="section-divider mb15"></span>
                    <p class="no-margin">We have spent various amounts of time on activities. Oh and we like coffee and free time as well.</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-6 col-md-3 item leftReveal">
                    <div class="circle-hold">
                        <i class="ion-coffee"></i>
                    </div>
                    <h2 class="timer mb5" data-from="1" data-to="4321" data-refresh-interval="20">1</h2>
                    <p class="no-margin">Cups of coffee</p>
                </div><!-- /.column -->
                <div class="col-sm-6 col-md-3 item mt30-xs rightReveal">
                    <div class="circle-hold">
                        <i class="ion-code"></i>
                    </div>
                    <h2 class="timer mb5" data-from="1" data-to="15381" data-refresh-interval="20">1</h2>
                    <p class="no-margin">Lines of code</p>
                </div><!-- /.column -->
                <div class="col-sm-6 col-md-3 item mt30-xs mt30-sm leftReveal">
                    <div class="circle-hold">
                        <i class="ion-android-people"></i>
                    </div>
                    <h2 class="timer mb5" data-from="1" data-to="17" data-refresh-interval="20">1</h2>
                    <p class="no-margin">Employees</p>
                </div><!-- /.column -->
                <div class="col-sm-6 col-md-3 item mt30-xs mt30-sm rightReveal">
                    <div class="circle-hold">
                        <i class="ion-android-restaurant"></i>
                    </div>
                    <h2 class="timer mb5" data-from="1" data-to="921" data-refresh-interval="20">1</h2>
                    <p class="no-margin">Pizzas eaten</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- End Our Count -->

    <!-- Begin Contact -->
    <section id="contact" class="background2 section-padding">
        <div class="container">
            <div class="row mb30">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 section-title text-center">
                    <h2>Contact</h2>
                    <span class="section-divider mb15"></span>
                    <p class="no-margin scaleReveal">Our team is from all over the world and we know how to deliver quality pixels from miles away.</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-5 col-lg-4">
                    <h5 class="heading-1 mb20">Visit Us</h5>
                    <h4 class="mb15">142 Pelican Drive • 1252nd Floor, Suite 420<br>New York City, New York 99912</h4>
                    <p class="no-margin text-xs-small">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates. Temporibus autem quibusdam et aut.</p>
                    <hr class="mini-hr">
                    <p class="text-xs-small mb5"><strong class="text-switch">Email:</strong> info@particle.com</p>
                    <p class="text-xs-small mb5"><strong class="text-switch">Phone:</strong> +1 212-249-2390</p>
                    <p class="text-xs-small mb5"><strong class="text-switch">Fax:</strong> +1 112-444-2390</p>
                </div><!-- /.column -->
                <div class="col-sm-6 col-lg-7 mt30-xs">
                    <form data-toggle="validator" id="contactForm" name="contactForm">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <input class="form-control" data-error="This section is required."
                                        id="msg_subject" placeholder="Subject *" required="" type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div><!-- /.column -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <input class="form-control" id="phone" placeholder="Phone" type="text">
                                    </div>
                                </div>
                            </div><!-- /.column -->
                        </div><!-- /.row -->
                        <div class="row mb10">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <input class="form-control" data-error="This section is required." id="name" placeholder="Your Name *" required="" type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div><!-- /.column -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <input class="email form-control" data-error="This section is required." id="email" placeholder="Email *" required="" type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div><!-- /.column -->
                        </div><!-- /.row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="controls">
                                        <textarea class="form-control" data-error="This section is required." id="message" placeholder="Message *" required="" rows="5"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt15">
                            <div class="col-sm-6">
                                <div id="msgSubmit" class="h4 hidden mt10 no-margin-bottom"></div> 
                            </div><!-- /.column -->
                            <div class="col-sm-6 text-right">
                                <button type="submit" id="submit" class="btn btn-default btn-lg">Send</button>
                            </div><!-- /.column -->
                        </div><!-- /.row -->
                    </form><!-- /.form -->
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.section -->
    <!-- End Contact -->

    <!-- Begin Footer -->
    <footer class="footer-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    <span class="icon-handle-streamline-vector logo"></span>
                    <h2 class="theme-title">Particles<span class="theme-title-smaller">Theme</span></h2>
                    <a href="#"><span class="ion-social-twitter social-icons-dark-hover mr15"></span></a>
                    <a href="#"><span class="ion-social-facebook social-icons-dark-hover mr15"></span></a>
                    <a href="#"><span class="ion-social-googleplus-outline social-icons-dark-hover"></span></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-small text-center">
                    <hr>
                    <button type="button" class="btn btn-primary btn-up-footer btn-lg scroll-top">Up</button>
                    <p class="no-margin">&copy; Denis Samardjiev</p>
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /.footer -->
    <!-- Begin Footer -->
@endsection
