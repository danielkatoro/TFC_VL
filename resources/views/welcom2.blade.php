<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Acceuil - Law        </title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Law Firm Website " name="keywords">
        <meta content="Law Firm Website " name="description">

        <!-- Favicon -->
        <link href="{{ asset('landing/img/icon.jpg') }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        
        <link rel="stylesheet" href="{{ asset('landing/css/bootstrap.min.css') }}" >
        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="{{ asset('landing/css/all.min.css') }}">
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> -->
        <link href="{{ asset('landing/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('landing/css/style.css') }}" rel="stylesheet">

        <!-- deskapp start -->

            <!-- Mobile Specific Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

            <!-- Google Font -->
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
            <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="./deskapp/vendors/styles/core.css">
            <link rel="stylesheet" type="text/css" href="./deskapp/vendors/styles/icon-font.min.css">
            <link rel="stylesheet" type="text/css" href="./deskapp/src/plugins/jquery-steps/jquery.steps.css">
            <link rel="stylesheet" type="text/css" href="./deskapp/vendors/styles/style.css">


            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
            

        <!--  deskapp end -->
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
                <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php">
                                    <!-- <h6>Kalinda</h6> -->
                                    <img src="{{ asset('landing/img/logo1.png') }}" style="height:400px" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>8:00 - 9:00</h2>
                                    <p>Heures douverture du lundi au vendredi</p>
                                </div>
                                <div class="text">
                                    <h2>+243 977 807 905</h2>
                                    <p>Appelez-nous pour une consultation</p>
                                </div>
                                <div class="social">
                                    <a href="https://www.facebook.com/dannykatoro"><img src="{{ asset('landing/./img/twitter_circled_32px.png') }}" alt="twitter"></a>
                                    <a href="https://www.facebook.com/dannykatoro"><img src="{{ asset('landing/./img/icons8_linkedin_circled_32.png') }}" alt="twitter"></a>
                                    <a href="https://www.facebook.com/dannykatoro"><img src="{{ asset('landing/./img/facebook_32px.png" alt="facebook') }}"></a>
                                    <a href="https://www.facebook.com/dannykatoro"><img src="{{ asset('landing/./img/icons8_whatsapp_32.png" alt="twitter') }}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
                
    <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="index.php" class="nav-item nav-link active">Acceuil</a>
                                <!-- <a href="about.php" class="nav-item nav-link">Apropos de nous</a>
                                <a href="service.php" class="nav-item nav-link">S entrainer</a> -->
                                <a href="team.php" class="nav-item nav-link">Avocats</a>
                                <!-- <a href="portfolio.php" class="nav-item nav-link">Etude de cas</a> -->
                                <a href="blog.php" class="nav-item nav-link">Blog</a>
                                <a href="contact.php" class="nav-item nav-link">Contacter</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="{{Route('login')}}">Connexion</a>
                                <a class="btn" href="{{ Route('register') }}">Inscription</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            
            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('landing/img/portfolio-4.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Nous nous battons pour votre justice</h1>
                            <p class="animated fadeInRight">#Être sans droit, ce n est pas être.</p>
                            <a class="btn animated fadeInUp" href="{{ Route('consultation') }}">Obtenez une consultation</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('landing/img/carousel-2.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Nous sommes prêts à nous opposer à votre place</h1>
                            <p class="animated fadeInRight"> #La justice ne peut pas attendre, le droit ne peut pas plier.</p>
                            <a class="btn animated fadeInUp" href="{{ Route('consultation') }}">Obtenez une consultation gratuite</a>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('landing/img/carousel-3.jpg') }}" alt="Carousel Image">
                        <div class="carousel-caption">
                            <h1 class="animated fadeInLeft">Nous nous battons pour votre privilège</h1>
                            <p class="animated fadeInRight">Lorem ipsum dolor sit amet elit. Mauris odio mauris...</p>
                            <a class="btn animated fadeInUp" href="{{ Route('consultation') }}">Obtenez une consultation</a>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->
            
            
            <!-- Top Feature Start-->
            <div class="feature-top">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <img src="{{ asset('landing/img/icons8_auction_48.png') }}" alt="">
                                <h3>Légal</h3>
                                <p>Approuvé par le gouvernement</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <img src="{{ asset('landing/img/icons8_judge_48.png') }}" alt="">
                                <h3>Avocats</h3>
                                <p>Avocats experts</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <img src="{{ asset('landing/img/icons8_thumbs_up_48.png') }}" alt="">
                                <h3>Succès</h3>
                                <p>99,99% Cas gagné</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="feature-item">
                                <img src="{{ asset('landing/img/icons8_handshake_48.png') }}" alt="">
                                <h3>Soutien</h3>
                                <p>Assistance rapide</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Feature End-->
            
            
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{ asset('landing/img/2.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>En savoir plus sur nous</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                                <a class="btn" href="">Apprendre encore plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>Nos domaines de pratique</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-landmark"></i>
                                </div>
                                <h3>Droit civil</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                                </p>
                                <a class="btn" href="">En savoir plus</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h3>Droit de la famille</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                                </p>
                                <a class="btn" href="">En savoir plus</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-hand-holding-usd"></i>
                                </div>
                                <h3>Droit des affaires</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                                </p>
                                <a class="btn" href="">En savoir plus</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <h3>Loi sur l éducation</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                                </p>
                                <a class="btn" href="">En savoir plus</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <h3>Loi criminelle</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                                </p>
                                <a class="btn" href="">En savoir plus</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="service-item">
                                <div class="service-icon">
                                    <i class="fa fa-globe"></i>
                                </div>
                                <h3>Les lois informatiques</h3>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                                </p>
                                <a class="btn" href="">En savoir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Service End -->
            
            
            <!-- Feature Start -->
            <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2>Pourquoi nous choisir</h2>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="fa fa-gavel"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Meilleures pratiques juridiques</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="fa fa-balance-scale"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Efficacité et confiance</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                                    </p>
                                </div>
                            </div>
                            <div class="row align-items-center feature-item">
                                <div class="col-5">
                                    <div class="feature-icon">
                                        <i class="far fa-smile"></i>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <h3>Des résultats que vous méritez</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="feature-img">
                                <img src="{{ asset('landing/img/feature.jpg') }}" alt="Feature">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End -->
            
            
            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <h2>Rencontrez nos avocats experts</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('landing/img/1.jpg" alt="Team Image') }}">
                                </div>
                                <div class="team-text">
                                    <h2>Daniel Katoro</h2>
                                    <p>Consultant en affaires</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                <img src="{{ asset('landing/img/1.jpg" alt="Team Image') }}">
                                </div>
                                <div class="team-text">
                                    <h2>Dylan Adams</h2>
                                    <p>Consultant criminel</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('landing/img/1.jpg" alt="Team Image') }}">
                                </div>
                                <div class="team-text">
                                    <h2>Gloria Edwards</h2>
                                    <p>Consultant en divorce</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item">
                                <div class="team-img">
                                    <img src="{{ asset('landing/img/1.jpg" alt="Team Image') }}">
                                </div>
                                <div class="team-text">
                                    <h2>Josh Dunn</h2>
                                    <p>Consultant en immigration</p>
                                    <div class="team-social">
                                        <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                        <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                        <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                        <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="faqs-img">
                                <img src="{{ asset('landing/img/faqs.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="section-header">
                                <h2>Vous avez des questions?</h2>
                            </div>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                            <span>1</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                            <span>2</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                            <span>3</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                            <span>4</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                            <span>5</span> Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <a class="btn" href="">Demandez plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->


            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <h2>Avis du client</h2>
                    </div>
                    <div class="owl-carousel testimonials-carousel">
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ asset('landing/img/testimonial-1.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ asset('landing/img/testimonial-2.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ asset('landing/img/testimonial-3.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ asset('landing/img/testimonial-4.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ asset('landing/img/testimonial-1.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ asset('landing/img/testimonial-2.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item">
                            <i class="fa fa-quote-right"></i>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img src="{{ asset('landing/img/testimonial-3.jpg') }}" alt="">
                                </div>
                                <div class="col-9">
                                    <h2>Client Name</h2>
                                    <p>Profession</p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


            <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header">
                        <h2>Dernier du blog</h2>
                    </div>
                    <div class="owl-carousel blog-carousel">
                        <div class="blog-item">
                            <img src="{{ asset('landing/img/blog-1.jpg') }}" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Civil Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Lire la suite <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ asset('landing/img/blog-2.jpg') }}" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Family Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Lire la suite <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ asset('landing/img/blog-3.jpg') }}" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Business Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Lire la suite <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ asset('landing/img/blog-1.jpg') }}" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Education Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Lire la suite <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ asset('landing/img/blog-2.jpg') }}" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Criminal Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Lire la suite <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ asset('landing/img/blog-3.jpg') }}" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Loi criminelle</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Lire la suite <i class="fa fa-angle-right"></i></a>
                        </div>
                        <div class="blog-item">
                            <img src="{{ asset('landing/img/blog-1.jpg') }}" alt="Blog">
                            <h3>Lorem ipsum dolor</h3>
                            <div class="meta">
                                <i class="fa fa-list-alt"></i>
                                <a href="">Business Law</a>
                                <i class="fa fa-calendar-alt"></i>
                                <p>01-Jan-2045</p>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor
                            </p>
                            <a class="btn" href="">Lire la suite <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog End -->
            
            
            <!-- Newsletter Start -->
            <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Abonnez-vous à notre newsletter</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Votre adresse mail">
                        <button class="btn">S abonner</button>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->


            <!-- Footer Start -->
                <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-about">
                                <h2>À propos de nous</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Zones de services</h2>
                                <a href="">Civil Law</a>
                                <a href="">Family Law</a>
                                <a href="">Business Law</a>
                                <a href="">Education Law</a>
                                <a href="">Immigration Law</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Pages utiles</h2>
                                <a href="">About Us</a>
                                <a href="">Practices</a>
                                <a href="">Attorneys</a>
                                <a href="">Case Studies</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Entrer en contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, Goma, DRC</p>
                                <p><i class="fa fa-phone-alt"></i>+243 977 807 905</p>
                                <p><i class="fa fa-envelope"></i>danielkatoro@gmail.com</p>
                                <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                    </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#">danielkatoro</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Build wthi all the love in the word by <a href="danielkatoro@gmail.com">danielkatoro</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('landing/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('landing/lib/isotope/isotope.pkgd.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('landing/js/main.js') }}"></script>

        <!-- deskapp start-->
            <!-- js -->
            <script src="./deskapp/vendors/scripts/core.js"></script>
            <script src="./deskapp/vendors/scripts/script.min.js"></script>
            <script src="./deskapp/vendors/scripts/process.js"></script>
            <script src="./deskapp/vendors/scripts/layout-settings.js"></script>
            <script src="./deskapp/src/plugins/jquery-steps/jquery.steps.js"></script>
            <script src="./deskapp/vendors/scripts/steps-setting.js"></script>
        <!-- desskapp end -->            <!-- Footer End -->
        @include('flashy::message')
    </body>
</html>
