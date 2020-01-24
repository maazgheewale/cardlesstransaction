<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
$_SESSION['id'] = "";
?>
<!DOCTYPE html>
<html lang="en">
    <head><style type="text/css">             #firstname{                 font-family: "Bauhaus 93";                 font-size: 40px;             }         </style>
        <script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>  
        <script type="text/javascript" src="js/Vegur_300.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script>
        <style type="text/css">
            .aa input[type="reset"]{
                width: 70px;
                height: 35px;
                border-radius: 5px;
                background-color: transparent;
                border:1;

                font-weight: bolder;
            }

            .aa input[type="text"]{
                width: 255px;
                height: 35px;
                border-radius: 5px;
                padding-left: 5px;
                background-color: transparent;
                border:1;


            }
            .aa input[type="password"]{
                width: 255px;
                height: 35px;
                border-radius: 5px;
                padding-left: 5px;
                background-color: transparent;	
                border:1;

            }
            .aa input[type="email"]{
                width: 255px;
                height: 35px;
                border-radius: 5px;
                padding-left: 5px;
                background-color: transparent;	
                border:1;

            }
            .aa input[type="submit"]{
                width: 120px;
                height: 35px;
                border-radius: 5px;
                background-color: transparent;
                border:1;

                font-weight: bolder;
            }
            .aa input[type="submit"]:hover{
                mouse:pointer;
            }
        </style>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>DROP IN</title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!-- Slick slider -->
        <link href="assets/css/slick.css" rel="stylesheet">
        <!-- Gallery Lightbox -->
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        <!-- Skills Circle CSS  -->
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/circlebars@1.0.3/dist/circle.css">


        <!-- Main Style -->
        <link href="style.css" rel="stylesheet">

        <!-- Fonts -->

        <!-- Google Fonts Raleway -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
        <!-- Google Fonts Open sans -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">


    </head>
    <script>
        function check(){
            if((isNaN(document.f.cardno.value)) || (document.f.cardno.value.length<16)){
                alert("Invalid card no");
                return false;
            }
            if((isNaN(document.f.mobile.value)) || (document.f.mobile.value.length<10)){
                alert("Invalid mobile no");
                return false;
            }
        
            if(((document.f.pass.value)) != (document.f.repass.value)){
                alert("Password does not match");
                return false;
            }
            return true;
        }    
    </script>
    <body>
        
        <!--START SCROLL TOP BUTTON -->
        <a class="scrollToTop" href="#">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- END SCROLL TOP BUTTON -->

        <!-- Start Header -->
        <header id="mu-hero">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light mu-navbar">
                    <!-- Text based logo -->
                  <a class="navbar-brand mu-logo" href="index.php"><p id="firstname"><span><i>DROP IN</i></span></p></a>
                    <!-- image based logo -->
                    <!-- <a class="navbar-brand mu-logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span><br/></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto mu-navbar-nav">
                            <li class="nav-item"><a href="index.php">Home</a></li>
                            <li class="nav-item"><a href="login.php">Login</a></li>
                            <li class="nav-item"><a href="register.php">Register</a></li>
                            <li class="nav-item active">
                                <a href="#changepassword.html">Reset Password</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- End Header -->

        <!-- Start Page Header area -->
        <div id="mu-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-page-header-area">                            
                                <div class="aa">
                                    <center>
                                        <h2 style="color:red;">Reset Password</h2><br/>
                                        <form method="post" action="rotp.php">
                                            <table cellpadding="2px;">
                                                <tr><td><span>Email</span></td><td><input type="email" placeholder="example@domain.com" name="email"  required/></td></tr>
                                                <tr><td><span>&nbsp;</span></td><td></td></tr>
                                                <tr><td><span>ATM Card No</span></td><td><input type="text" placeholder="16 Digit card no" name="cardno"  required maxlength="16"/></td></tr>
                                                <tr><td><span>&nbsp;</span></td><td></td></tr>
                                                <tr><td><span>ATM Pin No</span></td><td><input type="password" placeholder="4 Digit pin no" name="pinno"  required maxlength="4"/></td></tr>
                                                <tr><td><span>&nbsp;</span></td><td></td></tr>
                                                <tr><td><span></span></td><td><input type="submit" name="confirm" value="Confirm" class="button1"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Clear"/></td></tr>
                                            </table>
                                        </form>
                                    </center></div></div></div></div></div></div>

        <div id="mu-clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mu-clients-area">

                            <!-- Start Clients brand logo -->
                            <div class="mu-clients-slider">

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-1.jpg" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-2.jpg" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-3.jpg" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-4.jpg" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-5.jpg" alt="Brand Logo">
                                </div>

                                <div class="mu-clients-single">
                                    <img src="assets/images/client-brand-6.jpg" alt="Brand Logo">
                                </div>
                            </div>
                            <!-- End Clients brand logo -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Clients -->
        <footer id="mu-footer">
    <div class="mu-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-footer-bottom-area">
                        <p class="mu-copy-right">&copy; Copyright 2018 <a rel="nofollow" href="index.php">Drop In</a>. All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>
        <!-- End footer -->

        <!-- JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <!-- Slick slider -->
        <script type="text/javascript" src="assets/js/slick.min.js"></script>
        <!-- Progress Bar -->
        <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
        <!-- Filterable Gallery js -->
        <script type="text/javascript" src="assets/js/jquery.filterizr.min.js"></script>
        <!-- Gallery Lightbox -->
        <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Counter js -->
        <script type="text/javascript" src="assets/js/counter.js"></script>
        <!-- Ajax contact form  -->
        <script type="text/javascript" src="assets/js/app.js"></script>


        <!-- Custom js -->
        <script type="text/javascript" src="assets/js/custom.js"></script>

        <!-- About us Skills Circle progress  -->
        <script>
            // First circle
            new Circlebar({
                element : "#circle-1",
                type : "progress",
                maxValue:  "90"
            });
		
            // Second circle
            new Circlebar({
                element : "#circle-2",
                type : "progress",
                maxValue:  "84"
            });

            // Third circle
            new Circlebar({
                element : "#circle-3",
                type : "progress",
                maxValue:  "60"
            });

            // Fourth circle
            new Circlebar({
                element : "#circle-4",
                type : "progress",
                maxValue:  "74"
            });
            $(window).load(function(){
                $('#slider')._TMS({
                    banners:true,
                    waitBannerAnimation:false,
                    preset:'diagonalFade',
                    easing:'easeOutQuad',
                    pagination:true,
                    duration:400,
                    slideshow:8000,
                    bannerShow:function(banner){
                        banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
                    },
                    bannerHide:function(banner){
                        banner.stop().animate({marginRight:-500}, 600)
                    }
                })
            })
        </script>

    </body>
</html>