<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
$_SESSION['id'] = "";
$_SESSION['id2'] = "";
$_SESSION['id3'] = "";
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
                width: 100px;
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
                width: 130px;
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

        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
        <!-- Fonts -->

        <!-- Google Fonts Raleway -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
        <!-- Google Fonts Open sans -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">


    </head>
    <script>
        function check(){
            var numbers = /^[0-9]+$/;
            if((isNaN(document.f.accno.value)) || (document.f.accno.value.match(!numbers))){
                alert("Please only enter numeric characters for your Account No! (Allowed input:0-9)")
                return false;
            }
            var numbers = /^[0-9]+$/;
            if((isNaN(document.f.cardno.value)) || (document.f.cardno.value.match(!numbers))){
                alert("Please only enter numeric characters for your ATM Card No! (Allowed input:0-9)")
                return false;
            }
            var numbers = /^[0-9]+$/;
            if((isNaN(document.f.mobile.value)) || (document.f.mobile.value.match(!numbers))){
                alert("Please only enter numeric characters for your Mobile No! (Allowed input:0-9)")
                return false;
            }
            if((isNaN(document.f.pass.value)) || (document.f.pass.value.match(!numbers))){
                alert("Please only enter numeric characters for your Pin-Password No! (Allowed input:0-9)")
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
        <?php
        session_start();
        ?>
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
                            <li class="nav-item active">
                                <a href="register.php">Register</a>
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
                                    <h2>Register</h2><br/>
                                    <?php
                                    //session_start();
                                    if (isset($_GET['m'])) {
                                        echo "<font color='blue'>{$_GET['m']}</font><br/>";
                                    }
                                    ?>
                                    <form name="f" id="ContactForm" method="post" action="" onsubmit="javascript:return check();"><br/>
                                        <table cellpadding="2px;">
                                            <tr><td><span>Account No</span></td><td><input type="text" placeholder="Account No" name="accno"  required/></td></tr>
                                            <tr><td><span>&nbsp;</span></td><td></td></tr>
                                            <tr><td><span>ATM Card No</span></td><td><input type="text" placeholder="16 Digit card no" name="cardno"  required maxlength="16"/></td></tr>
                                            <tr><td><span>&nbsp;</span></td><td></td></tr>
                                            <tr><td><span>ATM Pin No</span></td><td><input type="password" placeholder="4 Digit pin no" name="pinno"  required maxlength="4"/></td></tr>
                                            <tr><td><span>&nbsp;</span></td><td></td></tr>
                                            <tr><td><span>Mobile No</span></td><td><input type="text" placeholder="Registered mobile no" name="mobile"  required maxlength="10"/></td></tr>
                                            <tr><td><span>&nbsp;</span></td><td></td></tr>
                                            <tr><td><span>Email</span></td><td><input type="email" placeholder="example@domain.com" name="email"  required/></td></tr>
                                            <tr><td><span>&nbsp;</span></td><td></td></tr>
                                            <tr><td><span>Password</span></td><td><input type="password" placeholder="4 Digit pin" name="pass" required maxlength="4"/></td></tr>
                                            <tr><td><span>&nbsp;</span></td><td></td></tr>
                                            <tr><td><span>Re-enter Password</span></td><td><input type="password" placeholder="4 Digit pin" name="repass" required maxlength="4"/></td></tr>
                                            <tr><td><span>&nbsp;</span></td><td></td></tr>
                                            <tr><td><span>Not a Robot</span></td><td><input type="text" name="captcha" placeholder="Enter Displayed Code" name="captcha" required maxlength="4"/>&nbsp;<img src="captcha.php" /></td></tr>
                                            <tr><td><span>&nbsp;</span></td><td></td></tr>
                                            <tr><td><span></span></td><td><div class="pretty p-default"><font size="2px" color="#4299DA"><input type="checkbox" checked="checked" required="required"/><div class="state"><label>I accept the</label></div></div><u><a href="terms.php">Terms and Conditions</a></u></font></td></tr>
                                            <tr><td><span>&nbsp;</span></td><td></td></tr>
                                            <tr><td><span></span></td><td><input type="submit" name="reg" value="Register" class="button1" onclick="return check()"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"/></td></tr>
                                        </table>
                                    </form>

                                    <?php
                                    if (isset($_REQUEST['reg'])) {
                                        if ($_SESSION["code"] != $_POST["captcha"]) {
                                            //header("location:register.php?m=Invalid captcha");
                                            echo "<script>window.location.href=register.php?m=Invalid captcha</script>";
                                        } else {
                                            include 'dbconnection.php';

                                            $query = "select * from tbluserdetails where accno='{$_POST['accno']}' and atmcard='{$_POST['cardno']}' and atmpin='{$_POST['pinno']}' and regmob='{$_POST['mobile']}' and email='{$_POST['email']}'";
                                            $result = mysql_query($query) or die(mysql_error());
                                            if (mysql_num_rows($result) > 0) {
                                                $result = mysql_query("select * from tbluserlogin where email='{$_POST['email']}'");
                                                if (mysql_num_rows($result) > 0) {
                                                    //header("location: login.php?m=Record with the details already present. Please login to continue");
                                                    echo "<script>window.location.href='login.php?m=Record with the details already present. Please login to continue'</script>";
                                                } else {
                                                    $date = date("Y/m/d");
                                                    $result = mysql_query("insert into tbluserlogin values('{$_POST['email']}','{$_POST['pass']}','$date','0','0')");
                                                    if ($result) {
                                                        //header("location: login.php?m=Registered successful. Please login to continue");
                                                        echo "<script>window.location.href='login.php?m=Registered successful. Please login to continue'</script>";
                                                    } else {
                                                        // header("location:register.php?m=Cannot proceed the request, please try later");
                                                        echo "<script>window.location.href='register.php?m=Cannot proceed the request, please try later'</script>";
                                                    }
                                                }
                                            } else {
                                                //header("location:register.php?m=Invalid details");
                                                echo "<script>window.location.href='register.php?m=Invalid details'</script>";
                                            }
                                        }
                                    }
                                    ?>
                                </center>
                            </div> 
                            </form>
                            <!--                                            <span>&nbsp;</span><a href="register.php">Create your account here</a>-->
                        </div>
                        </center></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header area -->

    <!-- Start Breadcrumb -->

    <!-- End Breadcrumb -->


    <!-- Start main content -->
<main>
    <!-- Start About -->


</div>
</div>
</div>
<!-- Start Feature Content -->
</div>
</div>
</div>
</div>
</section>
<!-- End About -->

<!-- Start Skills -->

<!-- End Team -->

<!-- Start Clients -->
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