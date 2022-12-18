@extends('layout.MainLayout',['parallax'=>false])
 @push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{ asset('asssets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('asssets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/responsive.css')}}">
    
@endpush


@section('content')


<!--VIDEO PARALEEX                 -->
        <div class="hero-wrapper">
            <div class="hero">
                <figure>
                    <video loop="loop" muted="muted" autoplay="autoplay">
                        <source src="images/1-0.mp4" />
                    </video>

                    <!-- <figcaption>
        <h1>Really cool video parallax</h1>
      </figcaption> -->

                </figure>
            </div>
        </div>
    
<div class="home_content_container">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="home_content">
                   <br><br><br><br>
                    <div class="home_location"> All Tournament , Competition , Events At One Place</div>
                    <div class="home_text">The Sport Platform, puts Great Olympic athletes at the heart of
                        its proposition, with a greater depth of content, info and data, and a rich new
                        platform...</div>
                    <div class="home_buttons">
                        <!--                                    <div class="button home_button"><a href="#">Buy Tickets Now!</a></div>-->
                        <div class="button home_button"><a href="#">Find out more</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Intro -->

<div class="intro">
<div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

    <!-- Intro Item -->
    <div class="intro_item">
        <div class="intro_image"><img src="images/Main-Sports/cricket.jpg" alt=""></div>
        <div class="intro_body">
            <div class="intro_title"><a href="{{route('registration')}}">All Department Cricket
                </a></div>
            <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
            <style>
                element.style {
                    color: blue;
                }
            </style>
            <div class="intro_title"><a href="{{route('registration')}}"> <b>Register Now</b></a>
            </div>



        </div>
    </div>

    <!-- Intro Item -->
    <div class="intro_item">
        <div class="intro_image"><img src="images/Main-Sports/football.jpg" alt=""></div>
        <div class="intro_body">
            <div class="intro_title"><a href="{{route('registration')}}">All Department FootBall
                </a></div>
            <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
            <div class="intro_title"><a href="{{route('registration')}}"> <b>Register Now</b></a>
            </div>
        </div>
    </div>

    <!-- Intro Item -->
    <div class="intro_item">
        <div class="intro_image"><img src="images/Main-Sports/basketball.webp" alt=""></div>
        <div class="intro_body">
            <div class="intro_title"><a href="{{route('registration')}}">All Department BasketBall
                </a></div>
            <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
            <div class="intro_title"><a href="{{route('registration')}}"> <b>Register Now</b></a>
            </div>
        </div>
    </div>

    <!-- Intro Item -->
    <div class="intro_item">
        <div class="intro_image"><img src="images/Main-Sports/tableteenis.webp" alt=""></div>
        <div class="intro_body">
            <div class="intro_title"><a href="{{route('registration')}}">All Department
                    TableTennis </a></div>
            <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
            <div class="intro_title"><a href="{{route('registration')}}"> <b>Register Now</b></a>
            </div>
        </div>
    </div>

    <!-- Intro Item -->
    <div class="intro_item">
        <div class="intro_image"><img src="images/Main-Sports/batbitan.webp" alt=""></div>
        <div class="intro_body">
            <div class="intro_title"><a href="{{route('registration')}}">All Department Badminton
                </a></div>
            <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
            <div class="intro_title"><a href="{{route('registration')}}"> <b>Register Now</b></a>
            </div>
        </div>
    </div>

    <!-- Intro Item -->
    <div class="intro_item">
        <div class="intro_image"><img src="images/Main-Sports/thugofwar.webp" alt=""></div>
        <div class="intro_body">
            <div class="intro_title"><a href="{{route('registration')}}">All Department Tug Of
                    WAR</a></div>
            <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
            <div class="intro_title"><a href="{{route('registration')}}"> <b>Register Now</b></a>
            </div>
        </div>
    </div>

    <!-- Intro Item -->
    <div class="intro_item">
        <div class="intro_image"><img src="images/Main-Sports/marathon.jpg" alt=""></div>
        <div class="intro_body">
            <div class="intro_title"><a href="{{route('registration')}}">All Department
                    Marathon</a></div>
            <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
            <div class="intro_title"><a href="{{route('registration')}}"> <b>Register Now</b></a>
            </div>
        </div>
    </div>

    <!-- Intro Item -->
    <div class="intro_item">
        <div class="intro_image"><img src="images/Main-Sports/vollball.jpg" alt=""></div>
        <div class="intro_body">
            <div class="intro_title"><a href="{{route('registration')}}">All Department
                    Volleyball</a></div>
            <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
            <div class="intro_title"><a href="{{route('registration')}}"> <b>Register Now</b></a>
            </div>
        </div>
    </div>

</div>

            <!-- solo section -->
            <div class="text-center">
                <h3><b>Solo Sports</b></h3> <br>
            </div>
            

            <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

                <!-- Intro Item -->
                <div class="intro_item">
                    <div class="intro_image"><img src="images/Main-Sports/boxing.jpg" alt=""></div>
                    <div class="intro_body">
                        <div class="intro_title"><a href="student%20registration/solo_register.html">Boxing </a></div>
                        <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                        <style>
                            element.style{
                                color: blue;
                            }
                        </style>
                        <div class="intro_title"><a href="student%20registration/solo_register.html"> <b>Register Now</b></a></div>
                    


                    </div>
                </div>

                <!-- Intro Item -->
                <div class="intro_item">
                    <div class="intro_image"><img src="images/Main-Sports/Cycling.jpg" alt=""></div>
                    <div class="intro_body">
                        <div class="intro_title"><a href="student%20registration/solo_register.html">Cycling </a></div>
                        <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                        <div class="intro_title"><a href="student%20registration/solo_register.html"> <b>Register Now</b></a></div>
                    </div>
                </div>
                
               

                <!-- Intro Item -->
                <div class="intro_item">
                    <div class="intro_image"><img src="images/Main-Sports/tableteenis.webp" alt=""></div>
                    <div class="intro_body">
                        <div class="intro_title"><a href="student%20registration/solo_register.html">Solo TableTennis </a></div>
                         <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                        <div class="intro_title"><a href="student%20registration/solo_register.html"> <b>Register Now</b></a></div>   </div>
                </div>

                <!-- Intro Item -->
                <div class="intro_item">
                    <div class="intro_image"><img src="images/Main-Sports/batbitan.webp" alt=""></div>
                    <div class="intro_body">
                        <div class="intro_title"><a href="student%20registration/solo_register.html">Solo Badminton </a></div>
                        <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                        <div class="intro_title"><a href="/soloreg"> <b>Register Now</b></a></div>
                    </div>
                </div>



                <!-- Intro Item -->
                <!-- <div class="intro_item">
                    <div class="intro_image"><img src="images/Main-Sports/marathon.jpg" alt=""></div>
                    <div class="intro_body">
                        <div class="intro_title"><a href="student%20registration/index.html">Marathon</a></div>
                        <div class="intro_subtitle">Donec quis metus ac arcu luctus accumsan.</div>
                        <div class="intro_title"><a href="student%20registration/index.html"> <b>Register Now</b></a></div>
                    </div>
                </div> -->

               

            </div>



            <!-- end solo section -->
</div>






<!-- Calendar -->

<div class="calendar">
<div class="container reset_container">
    <div class="row">
        <div class="col-xl-6 calendar_col">
            <div class="calendar_container">
                <div class="calendar_title_bar d-flex flex-row align-items-center justify-content-start">
                    <div>
                        <div class="calendar_icon"><img src="images/calendar.svg" alt=""></div>
                    </div>
                    <div class="calendar_title">22 april events calendar</div>
                </div>
                <div class="calendar_items">

                    <!-- Calendar Item -->
                    <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                        <div>
                            <div class="calendar_item_image"><img src="images/event_1.jpg"
                                    alt=""></div>
                        </div>
                        <div class="calendar_item_time">
                            <div>14:00</div>
                            <div>Auditorium</div>
                        </div>
                        <div class="calendar_item_text">
                            <div>Business 101</div>
                            <div>08 AM - 04 PM</div>
                            <div>Speaker: Daniel Hill</div>
                        </div>
                    </div>

                    <!-- Calendar Item -->
                    <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                        <div>
                            <div class="calendar_item_image"><img src="images/event_2.jpg"
                                    alt=""></div>
                        </div>
                        <div class="calendar_item_time">
                            <div>15:00</div>
                            <div>Auditorium</div>
                        </div>
                        <div class="calendar_item_text">
                            <div>About technology</div>
                            <div>08 AM - 04 PM</div>
                            <div>Speaker: Daniel Hill</div>
                        </div>
                    </div>

                    <!-- Calendar Item -->
                    <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                        <div>
                            <div class="calendar_item_image"><img src="images/event_3.jpg"
                                    alt=""></div>
                        </div>
                        <div class="calendar_item_time">
                            <div>17:00</div>
                            <div>Auditorium</div>
                        </div>
                        <div class="calendar_item_text">
                            <div>Conference calls</div>
                            <div>08 AM - 04 PM</div>
                            <div>Speaker: Daniel Hill</div>
                        </div>
                    </div>

                    <!-- Calendar Item -->
                    <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                        <div>
                            <div class="calendar_item_image"><img src="images/event_4.jpg"
                                    alt=""></div>
                        </div>
                        <div class="calendar_item_time">
                            <div>20:00</div>
                            <div>Auditorium</div>
                        </div>
                        <div class="calendar_item_text">
                            <div>Drinks and dinner</div>
                            <div>08 AM - 04 PM</div>
                            <div>Speaker: Daniel Hill</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-xl-6 calendar_col">
            <div class="calendar_container">
                <div class="calendar_title_bar d-flex flex-row align-items-center justify-content-start">
                    <div>
                        <div class="calendar_icon"><img src="images/calendar.svg" alt=""></div>
                    </div>
                    <div class="calendar_title">23 april events calendar</div>
                </div>
                <div class="calendar_items">

                    <!-- Calendar Item -->
                    <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                        <div>
                            <div class="calendar_item_image"><img src="images/event_5.jpg"
                                    alt=""></div>
                        </div>
                        <div class="calendar_item_time">
                            <div>14:00</div>
                            <div>Auditorium</div>
                        </div>
                        <div class="calendar_item_text">
                            <div>Business 101</div>
                            <div>08 AM - 04 PM</div>
                            <div>Speaker: Daniel Hill</div>
                        </div>
                    </div>

                    <!-- Calendar Item -->
                    <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                        <div>
                            <div class="calendar_item_image"><img src="images/event_6.jpg"
                                    alt=""></div>
                        </div>
                        <div class="calendar_item_time">
                            <div>15:00</div>
                            <div>Auditorium</div>
                        </div>
                        <div class="calendar_item_text">
                            <div>About technology</div>
                            <div>08 AM - 04 PM</div>
                            <div>Speaker: Daniel Hill</div>
                        </div>
                    </div>

                    <!-- Calendar Item -->
                    <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                        <div>
                            <div class="calendar_item_image"><img src="images/event_7.jpg"
                                    alt=""></div>
                        </div>
                        <div class="calendar_item_time">
                            <div>17:00</div>
                            <div>Auditorium</div>
                        </div>
                        <div class="calendar_item_text">
                            <div>Conference calls</div>
                            <div>08 AM - 04 PM</div>
                            <div>Speaker: Daniel Hill</div>
                        </div>
                    </div>

                    <!-- Calendar Item -->
                    <div class="calendar_item d-flex flex-row align-items-center justify-content-start">
                        <div>
                            <div class="calendar_item_image"><img src="images/event_8.jpg"
                                    alt=""></div>
                        </div>
                        <div class="calendar_item_time">
                            <div>20:00</div>
                            <div>Auditorium</div>
                        </div>
                        <div class="calendar_item_text">
                            <div>Drinks and dinner</div>
                            <div>08 AM - 04 PM</div>
                            <div>Speaker: Daniel Hill</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
</div>

<!-- Call to action -->

<div class="cta">
<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/1-0.jpg"
    data-speed="0.8"></div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="cta_content text-center">

                <!--                            <div class="cta_title">Get your tickets now!</div>-->
                <div class="button cta_button"><a href="#">Find out more</a></div>

            </div>
        </div>
    </div>
</div>
</div>



@endsection


@push('script')
<script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('assets/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('assets/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
@endpush 