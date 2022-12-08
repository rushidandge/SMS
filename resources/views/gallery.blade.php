<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sports Gallery</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Conference project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/styles/contact_responsive.css')}}">
</head>

<style>
    .portfolio-item .item {
    /* width: 303px; */
    float: left;
    margin-bottom: 10px;
    }
</style>

<body>

    <div class="super_container">

        <!-- Menu -->

        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container">
                    <div class="menu_close"></div>
                </div>
                <div class="logo menu_logo">
                    <a href="#">
                        <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                            <div class="logo_image">
                                <div><img src="images/muet_logo.png" alt=""></div>
                            </div>
                            <div class="logo_content">
                                <div class="logo_text logo_text_not_ie">MGM's Sports Club</div>
                                <div class="logo_sub"> All Tournament , Competition , Events At One Place</div>
                            </div>
                        </div>
                    </a>
                </div>
                <ul>
                    <li class="menu_item"><a href="index.html">Home</a></li>
                    <li class="menu_item"><a href="facilites.html">Facilities</a></li>
                    <li class="menu_item"><a href="contactus.html">Contact Us</a></li>
                    <li class="menu_item"><a href="Achievements.php">Achievements</a></li>
                </ul>
            </div>
            <div class="menu_social">
                <div class="menu_social_title">Follow us on Social Media</div>
                <ul>
                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>


        <!-- Home -->

        <div class="home">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/1-0.jpg" data-speed="0.8"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content d-flex flex-row align-items-end justify-content-start">
                                <div class="current_page">Gallery</div>
                                <div class="breadcrumbs ml-auto">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li>Gallery</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header -->

            <header class="header" id="header">
                <div>
                    <div class="header_top">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                                        <div>
                                            <a href="#">
                                                <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                                                    <div class="logo_image">
                                                        <div><img src="images/muet_logo.png" alt=""></div>
                                                    </div>
                                                    <div class="logo_content">
                                                        <div class="logo_text logo_text_not_ie">Sports Events Management</div>
                                                        <div class="logo_sub">University Of Engineering And Technology</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="header_social ml-auto">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header_nav" id="header_nav_pin">
                        <div class="header_nav_inner">
                            <div class="header_nav_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                                <nav class="main_nav">
                                                    <ul>
                                                        <li ><a href="/">Home</a></li>
                                                        <li><a href="/facilities">Facilities</a></li>
                                                        <li><a href="/contact">Contact Us</a></li>
                                                        <li><a href="/achievements">Achievements</a></li>
                                                        <li class="active"><a href="/gallery">Gallery</a></li>
                                                    </ul>
                                                </nav>
                                                <div class="header_extra ml-auto">
                                                    <div class="header_search"><i class="fa fa-search" aria-hidden="true"></i></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="search_content d-flex flex-row align-items-center justify-content-end">
                                                <form action="#" id="search_container_form" class="search_container_form">
                                                    <input type="text" class="search_container_input" placeholder="Search" required="required">
                                                    <button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="home_content_container">
             
            </div>
        </div>


    
<!-- Gallary stat -->


    <!-- header starts -->
    

    
    <!-- header ends -->

    


    
    <!-- ajax for photo gallery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>


    <style>
        .fancylight img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            object-position: center;
            border-radius: 5px;
        }
    </style>

    <!-- photo gallery starts -->
    <div class="container mt-4 mb-4">
        <div class="pb-4">
            <h3 class="fw-regular">Sport's Gallary </h3>
        </div>

        <!-- <div class="portfolio-menu mt-2 mb-4">
                                    <ul>
                                        <li class="btn btn-outline-dark active" data-filter="*">All</li>
                                        <li class="btn btn-outline-dark" data-filter=".gts">Girls T-shirt</li>
                                        <li class="btn btn-outline-dark" data-filter=".lap">Laptops</li>
                                        <li class="btn btn-outline-dark text" data-filter=".selfie">selfie</li>
                                    </ul>
                                </div> -->

        <div class="portfolio-item row">
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/EE668XA8sef4CufECLmi3Hx9SLdbQGaUQmkw4hUv.png" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/EE668XA8sef4CufECLmi3Hx9SLdbQGaUQmkw4hUv.png" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/F3MKOcZ3HJEwYd30dHMpcTCQVU2UNNpGf0Y5VQgu.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/F3MKOcZ3HJEwYd30dHMpcTCQVU2UNNpGf0Y5VQgu.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/4EgbjX8YLWDDPsEM7fVk949rcrSnn49T5G6jkdyf.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/4EgbjX8YLWDDPsEM7fVk949rcrSnn49T5G6jkdyf.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/o41eNDkGPnrViYl41gt20cbeE7AnmeMynvJScdtR.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/o41eNDkGPnrViYl41gt20cbeE7AnmeMynvJScdtR.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/1g69jWDLiHNjCLKPRfbsYZL4m6msQFLQk14jeb9g.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/1g69jWDLiHNjCLKPRfbsYZL4m6msQFLQk14jeb9g.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/oo3x9QUufdcYf0zJDA39Ltecn0XCgpN2JGbBrTb7.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/oo3x9QUufdcYf0zJDA39Ltecn0XCgpN2JGbBrTb7.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/lkZdnyU1In4zVHY0KEgHwS4g0TUfCmHWdRC69oEB.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/lkZdnyU1In4zVHY0KEgHwS4g0TUfCmHWdRC69oEB.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/bgWqttZohkUCJfcm01DFd40Oob3qNyDRFO0XJeMx.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/bgWqttZohkUCJfcm01DFd40Oob3qNyDRFO0XJeMx.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/j3EoMTBzHXVhHfPh6w9rsZ0mZ201tVz4B021pvQL.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/j3EoMTBzHXVhHfPh6w9rsZ0mZ201tVz4B021pvQL.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/qRlg83KkssSM836HDdZ5rrtdPOaFb5zxAvdnl4Ze.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/qRlg83KkssSM836HDdZ5rrtdPOaFb5zxAvdnl4Ze.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/N4HTXpGh0CUs46Lxu5Z0Rpi5afsReSWP2xVc9yRd.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/N4HTXpGh0CUs46Lxu5Z0Rpi5afsReSWP2xVc9yRd.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/weHufJNdz2DYGzUrnW4KTzctoSGOpgkIkutzEKDs.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/weHufJNdz2DYGzUrnW4KTzctoSGOpgkIkutzEKDs.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/3VGPCTEg7lHu5FzlUEfAxM1CduncwTTChhmuKJyO.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/3VGPCTEg7lHu5FzlUEfAxM1CduncwTTChhmuKJyO.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/1f9x2RLeIFVnQcQm6n0Ik33DWgTmupqtuAplntMr.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/1f9x2RLeIFVnQcQm6n0Ik33DWgTmupqtuAplntMr.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/Sf6sRzqHa5XSLuIYWam3MY8CGkdVJtM7jqD5Shmg.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/Sf6sRzqHa5XSLuIYWam3MY8CGkdVJtM7jqD5Shmg.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/NWD9Gpjdfh2lJUavFMebmgmXldaflEk9i6oGO765.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/NWD9Gpjdfh2lJUavFMebmgmXldaflEk9i6oGO765.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/4E884fdkM42IwxfIgzTc5YPQire3YMOfgoRZDR2l.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/4E884fdkM42IwxfIgzTc5YPQire3YMOfgoRZDR2l.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/QE1pLTeesLdye2dAnRzYyclUovBsvJfeGEf3COJ2.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/QE1pLTeesLdye2dAnRzYyclUovBsvJfeGEf3COJ2.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/3IOf11sHggWl5NQvcjsiSGxrFPNUHWCMY20NosVP.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/3IOf11sHggWl5NQvcjsiSGxrFPNUHWCMY20NosVP.jpg" alt="">
                    </a>
                </div>
                            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                    <a href="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/rcdWNSPShYnhnmug2QPydTHC31iw1GSWrxsXhBdl.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                        <img class="img-fluid" src="https://alumni.jnec.org//storage//albums/Alumni Pre-meet Delhi/rcdWNSPShYnhnmug2QPydTHC31iw1GSWrxsXhBdl.jpg" alt="">
                    </a>
                </div>
                    </div>



    </div>
    <!-- photo gallery ends -->

    <script>
        $(document).ready(function() {
            var popup_btn = $('.popup-btn');
            popup_btn.magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>





  
    <!-- Option 1: Bootstrap Bundle with Popper -->

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <script src="https://alumni.jnec.org//assets/js/main.js"></script>






    
<!-- Gallery End Start -->
    

        <!-- Contact -->

    

        <!-- Footer -->

        <footer class="footer">
            <div class="footer_content">
                <div class="container">
                    <div class="row">

                        <!-- Footer Column -->
                        <div class="col-lg-8 footer_col">
                            <div class="footer_about">
                                <div>
                                    <a href="#">
                                        <div
                                            class="logo_container d-flex flex-row align-items-start justify-content-start">
                                            <div class="logo_image">
                                                <div><img src="images/muet_logo.png" alt=""></div>
                                            </div>
                                            <div class="logo_content">
                                                <div id="logo_text" class="logo_text logo_text_not_ie">Sports Events
                                                    Management</div>
                                                <div class="logo_sub"> All Tournament , Competition , Events At One
                                                    Place</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="footer_about_text">
                                    <p>The Sport Platform, puts Great Olympic athletes at the heart of its proposition,
                                        with a greater depth of content, info and data, and a rich new platform...</p>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Column -->
                        <div class="col-lg-4 footer_col">
                            <div class="footer_links">
                                <ul>





                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="contact.html">About Us</a></li>
                                    <li><a href="facilities.html">Facitlities </a></li>
                                    <li><a href="Achievements.php">Speakers</a></li>


                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="footer_extra">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div
                                class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
                                <div class="footer_social">
                                    <div class="footer_social_title">Follow us on Social Media</div>
                                    <ul class="footer_social_list">
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer_extra_right ml-lg-auto text-lg-right">
                                    <div class="footer_extra_links">
                                        <ul>
                                            <li><a href="contact.html">Contact us</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="#">Privacy</a></li>
                                        </ul>
                                    </div>
                                    <div class="copyright">
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>
                                            document.write(new Date().getFullYear());
                                        </script> All rights reserved | This is made with <i
                                            class="fa fa-heart-o" aria-hidden="true"></i> <a href=""
                                            target="_blank">BTECH2 BOYS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
    <script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="{{asset('assets/js/contact.js')}}"></script>
</body>

</html>
