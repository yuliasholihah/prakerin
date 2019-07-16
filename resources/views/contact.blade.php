<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Nikki - Blog &amp; Magazine Template</title>

    <!-- Favicon -->
    <link rel="icon" href="{{('assets/frontend/img/core-img/favicon.ico')}}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{('assets/frontend/style.css')}}">
     

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="nikki-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="nikkiNav">

                        <!-- Nav brand -->
                        <a href="{{url('/')}}" class="nav-brand"><img src="{{('assets/frontend/img/core-img/logo.png')}}" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="#">Pengetahuan</a>
                                        <ul class="dropdown">
                        
                                            <li><a href="{{url('archive')}}">Archive Blog</a></li>
                                      
                                            <li><a href="{{url('typo')}}">Typography</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Gaya Hidup</a>
                                        <div class="dropdown">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{url('kuliner')}}">kuliner</a></li>
                                                <li><a href="{{url('traveling')}}">traveling</a></li>
                                                
                                            </ul>
                                          
                                        </div>
                                    </li>
                                    <li><a href="{{url('about')}}">About</a></li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>


                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Google Maps Start ##### -->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
    </div>
    <!-- ##### Google Maps End ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100-0">
        <div class="container">
            <div class="row">
                 <center>
                <div class="col-12 col-lg-6">
                    <div class="contact-content mb-100">
                      <center>
                        <h4>Contact</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia dese mollit anim id est laborum, consectetur adipisicing elit.</p>
                        <!-- Single Contact Info -->
                        <div class="single-contact-info">
                            <h6>Location:</h6>
                            <h4>40 Baria Sreet 133/2 NewYork, US</h4>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info">
                            <h6>Email:</h6>
                            <h4>info.deercreative@gmail.com</h4>
                        </div>

                        <!-- Single Contact Info -->
                        <div class="single-contact-info">
                            <h6>Phone:</h6>
                            <h4>(+123) 456-789-1120</h4>
        </center>
                        </div>
        </center>
                    </div>
                </div>

                
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Instagram Area Start ##### -->
    <div class="follow-us-instagram">
        <div class="instagram-content d-flex flex-wrap align-items-center">

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="{{('assets/frontend/img/blog-img/insta1.jpg')}}" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
                
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="{{('assets/frontend/img/blog-img/insta2.jpg')}}" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="{{('assets/frontend/img/blog-img/insta3.jpg')}}" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="{{('assets/frontend/img/blog-img/insta4.jpg')}}" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="{{('assets/frontend/img/blog-img/insta5.jpg')}}" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="{{('assets/frontend/img/blog-img/insta6.jpg')}}" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="{{('assets/frontend/img/blog-img/insta7.jpg')}}" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>

            <!-- Single Instagram Slide -->
            <div class="single-instagram">
                <img src="{{('assets/frontend/img/blog-img/insta8.jpg')}}" alt="">
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <!-- ##### Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Social Info -->
                    <div class="footer-social-info d-flex align-items-center justify-content-between">
                        <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                        <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                        <a href="#"><i class="fa fa-linkedin"></i><span>linkedin</span></a>
                        <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                        <a href="#"><i class="fa fa-vimeo"></i><span>Vimeo</span></a>
                        <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{('assets/frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{('assets/frontend/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{('assets/frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{('assets/frontend/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{('assets/frontend/js/active.js')}}"></script>

    <script src="{{('assets/frontend/js/active.js')}}')}}"></script>
</body>

</html>