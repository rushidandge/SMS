<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sports Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/images/icons/favicon-32x32.png')}}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!--===============================================================================================-->
</head>

<body>


    <div class="container-contact100">
        <div class="contact100-map" id="google_map" data-map-x="25.407384" data-map-y="68.261887" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

        <div class="wrap-contact100">
            <div class="contact100-form-title" style="background-image: url(images/sr-1.jpg);">
                <span class="contact100-form-title-1">
                    Register Now
                </span>

                <span class="contact100-form-title-2">
                    Sports Week 2020
                </span>
            </div>

            <form class="contact100-form validate-form" action="insert.php" method="post">
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <span class="label-input100">Full Name:</span>
                    <input class="input100" type="text" name="name" placeholder="Enter full name" id="lastName">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Roll No: </span>
                    <input class="input100" type="text" name="regno" id="rollno" placeholder="EXAMPLE :: 16SW189">

                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="email is required">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="email" name="email" id="email" placeholder="Example@gmail.com">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <label for="cars">Choose a sport</label>
                    <select class="select-css" id="Sport" name="course" class="sports" style="float: right">
                        <option value="6">Cricket</option>
                        <option value="7">Fooball</option>
                        <option value="8">Table Tennis</option>
                    </select> </div>
                
                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <label for="Depart">Choose Your Department</label>

                    <select class="select-css"id="depart" name="depart" style="float: right">
                        <option value="bilal">software</option>
                        <option value="sahil">Bio</option>
                        <option value="alisiyal">IT</option>
                    </select>
                </div>
                
                <br><br>
                <div class="wrap-input100 validate-input" data-validate="Phone is required">
                    <label for="year">Year  </label>
                    <select class="select-css" id="year" name="year" style="float: right">
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                    </select>
                </div>
                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn" type="submit" value="Submit">
                        <span style="color: white">
                            Submit
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true" style="color: white"></i>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/animsition/js/animsition.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/select2/select2.min.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/vendor/countdowntime/countdowntime.js')}}"></script>
    <!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrY4cWbMf23GoTKz7DkrZ960bsKRFMne4"></script>
    <script src="{{asset('assets/js/map-custom.js')}}"></script>
    <!--===============================================================================================-->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

</body></html>
