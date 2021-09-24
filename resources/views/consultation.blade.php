<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
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

            <!-- Contact Start -->

            <div class="container">
                <div class="section-header">
                    <h2>Exposez nous votre Affaire</h2>
                </div>
                <div class="row">
                    <form action="{{ Route('consultation_path') }}" method="POST">
                        {{ csrf_field() }}
                        <!-- Contact Start -->
            <div class="contact">
                    <div class="row">
                        <div class="col-md-12 offset-4">
                            <div class="contact-form">
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <label for="name">Nom</label>
                                        <input value="{{ old('name') }}" type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} " placeholder="daniel katoro" required="required" />                                    
                                        {!! $errors->first('name','<span class="invalid-feedback">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <label for="email">E-mail</label>
                                        <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} " placeholder="daniel@exemple.com" required="required" />                                    
                                        {!! $errors->first('email','<span class="invalid-feedback">:message</span>') !!}
                                    </div>
                                </div> 
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <label for="message">N'ésitez à poser une question ou simplement exposer votre affaire</label>
                                        <textarea id="message" name="message" placeholder="Message" class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}" required="required id="message" cols="30" rows="10">{{ old('message') }}</textarea>
                                        {!! $errors->first('name','<span class="invalid-feedback">:message</span>') !!}
                                    </div> 
                                </div>
                                <div>
                                    <button class="btn" type="submit">Envoyer le Message</button>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
           
            <!-- Contact End -->
                    </form>
                </div>
            </div>

            <!-- <div class="contact">
                <div class="container">
                    <div class="section-header">
                        <h2>Exposez nous votre Affaire</h2>
                    </div>
                    <div class="row">
                        <form action="#" method="POST">
                            <div class=" form-group contact-info">
                                <div class="contact-item">
                                    <i class="fa fa-map-marker-alt"></i>
                                    <div class="contact-text">
                                        <h2 for="name">Prenon</h2>
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Danny27" required="required" />
                                    </div>
                                
                                   
                                    <div class="contact-item">
                                        <i class="fa fa-map-marker-alt"></i>
                                        <div class="contact-text">
                                            <h2>Nom de famille</h2>
                                            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Katoro" required="required" />
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <i class="fa fa-phone-alt"></i>
                                        <div class="contact-text">
                                            <h2>Téléphone</h2>
                                            <input type="tel" id="telephone" name="telephone" class="form-control" placeholder="+x(xxx)xxx-xx-xx" required="required" />
                                        </div>
                                    </div>
                                
                            <div class="">
                                <div class="contact-form">
                                    
                                        <div class="contact-item">
                                        <i class="fa fa-envelope"></i>
                                        <div class="contact-text">
                                            <h2>E-mail</h2>
                                            <input type="email" name="email" class="form-control" placeholder="exemple@gmail.com" required="required" />
                                        </div>
                                    </div>
                                    
                                        <div >
                                            <p>N'ésitez à poser une question ou simplement exposer votre affaire</p>
                                            <p>Nous vous contacterons sous peu</p>
                                        </div>
                                        <div>
                                            <textarea class="form-control" name="message" placeholder="Message" required="required" ></textarea>
                                        </div>
                                        <div>
                                            <button class="btn" type="submit">Envoyer le Message</button>
                                        </div>
                                </div>
                                </div>
                            
                        </form>
                    </div>
                </div>
            </div> -->
            <!-- Contact End -->


            <!-- Newsletter Start -->
            <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Subscribe Our Newsletter</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Submit</button>
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
                                <h2>About Us</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu lectus a leo tristique dictum nec non quam. Suspendisse convallis, tortor eu placerat rhoncus, lorem quam iaculis felis, sed eleifend lacus neque id eros. Integer convallis volutpat neque
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-8">
                            <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="">Civil Law</a>
                                <a href="">Family Law</a>
                                <a href="">Business Law</a>
                                <a href="">Education Law</a>
                                <a href="">Immigration Law</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="">About Us</a>
                                <a href="">Practices</a>
                                <a href="">Attorneys</a>
                                <a href="">Case Studies</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="footer-contact">
                                <h2>Get In Touch</h2>
                                <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                <p><i class="fa fa-envelope"></i>info@example.com</p>
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
                            <p>&copy; <a href="https://htmlcodex.com/law-firm-website-template">HTML Codex</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        @include('flashy::message')
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
