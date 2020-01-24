<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
if ($_SESSION['id'] == "") {
    echo "<script>window.location.href='index.php'</script>";
}
include 'dbconnection.php';
$queryt = "Select * from logintime where email='{$_SESSION['id']}'";
$resultt = mysql_query($queryt);
$rowt = mysql_fetch_assoc($resultt);
date_default_timezone_set('Asia/Kolkata');
$h = date('H');
$i = date('i');
$c = $i - $rowt['minutes'];
if ($c >= 3) {
    echo "<script type='text/javascript'>alert('Time Out. ReLogin to continue');</script>";
    echo "<script>window.location.href='login.php'</script>";
} else {
    $queryt1 = "UPDATE logintime SET hour='$h',minutes='$i' WHERE email='{$_SESSION['id']}'";
    $resultt1 = mysql_query($queryt1);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head><style type="text/css">             #firstname{                 font-family: "Bauhaus 93";                 font-size: 40px;             }         </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

        <!-- Fonts -->

        <!-- Google Fonts Raleway -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600,700" rel="stylesheet">
        <!-- Google Fonts Open sans -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">


    </head>
    <script>
        function check(){
            var numbers = /^[0-9]+$/;
            if((isNaN(document.f.oldpassword.value)) || (document.f.oldpassword.value.match(!numbers))){
                alert("Please only enter numeric characters for your Current Password-PIN! (Allowed input:0-9)")
                return false;
            }
            if((isNaN(document.f.pass.value)) || (document.f.pass.value.match(!numbers))){
                alert("Please only enter numeric characters for your New Password-PIN! (Allowed input:0-9)")
                return false;
            }
            if((isNaN(document.f.repass.value)) || (document.f.repass.value.match(!numbers))){
                alert("Please only enter numeric characters for your Confirm New Password-PIN! (Allowed input:0-9)")
                return false;
            }
            if((isNaN(document.f.captcha.value)) || (document.f.captcha.value.match(!numbers))){
                alert("Please only enter numeric characters for Captcha! (Allowed input:0-9)")
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

                            <li class="nav-item"><a href="home.php">Home</a></li>
                            <li class="nav-item"><a href="viewaccount.php">VIEW ACCOUNT</a></li>
                            <li class="nav-item"><a href="moneytransfer.php">MONEY TRANSFER</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" class="nav-item active" data-toggle="dropdown" href="#">GENERAL SETTINGS</a>
                                <ul class="dropdown-menu" >
                                    <div class="aa">
                                        <li class="nav-item"><a href="changepassword.php">CHANGE PASSWORD</a></li>
                                        <li class="nav-item"><a href="logindetails.php">LOGIN DETAILS</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li class="nav-item active">
                                <a href="changepassword.php">CHANGE PASSWORD</a>
                            </li>
                            <li class="nav-item"><a href="logout.php">LOGOUT</a></li>
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



                                    <article id="content"><div class="ic"></div>
                                        <div class="wrapper"><center>
                                                <h2 style="color:red;">Change Password</h2><br/>
                                                <form name="f" id="ContactForm" method="post" action="" onsubmit="javascript:return check();">
                                                    <table cellpadding="2px;">
                                                        <tr><td><span>Current Password</span></td><td><input type="password" placeholder="4 Digit pin no" name="oldpassword" required maxlength="4"/></td></tr>
                                                        <tr><td><span>&nbsp;</span></td><td></td></tr>
                                                        <tr><td><span>New Password</span></td><td><input type="password" placeholder="4 Digit pin no" name="pass" required maxlength="4"/></td></tr>
                                                        <tr><td><span>&nbsp;</span></td><td></td></tr>
                                                        <tr><td><span>Confirm Password&nbsp;</span></td><td><input type="password" placeholder="4 Digit pin no" name="repass" required maxlength="4"/></td></tr>
                                                        <tr><td><span>&nbsp;</span></td><td></td></tr>
                                                        <tr><td><span>Not a Robot</span></td><td><input type="text" name="captcha" placeholder="Enter Displayed Code" name="captcha" required maxlength="4"/>&nbsp;<img src="captcha.php" /></td></tr>
                                                        <tr><td><span>&nbsp;</span></td><td></td></tr>
                                                        <tr><td><span></span></td><td><input type="submit" name="confirm" value="Confirm" class="button1" onclick="return check()"//>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Clear"/></td></tr>
                                                    </table>
                                                </form>
                                                <?php
                                                if (isset($_REQUEST['confirm'])) {
                                                    include 'dbconnection.php';
                                                    $queryt = "Select * from logintime where email='{$_SESSION['id']}'";
                                                    $resultt = mysql_query($queryt);
                                                    $rowt = mysql_fetch_assoc($resultt);
                                                    date_default_timezone_set('Asia/Kolkata');
                                                    $h = date('H');
                                                    $i = date('i');
                                                    $c = $i - $rowt['minutes'];
                                                    if ($c >= 3) {
                                                        echo "<script type='text/javascript'>alert('Time Out. ReLogin to continue');</script>";
                                                        echo "<script>window.location.href='login.php'</script>";
                                                    } else {
                                                        $queryt1 = "UPDATE logintime SET hour='$h',minutes='$i' WHERE email='{$_SESSION['id']}'";
                                                        $resultt1 = mysql_query($queryt1);
                                                    }
                                                    $query = "select * from tbluserlogin where email='{$_SESSION['id']}'";
                                                    $result = mysql_query($query);
                                                    $row = mysql_fetch_assoc($result);
                                                    if ($_SESSION["code"] != $_POST["captcha"]) {
                                                        echo "<script type='text/javascript'>alert('Invalid captcha');</script>";
                                                    } elseif ($row['password'] == $_POST['oldpassword'] && $_POST['pass'] == $_POST['repass']) {
                                                        $query2 = "UPDATE tbluserlogin SET password='{$_POST['pass']}' WHERE email='{$_SESSION['id']}'";
                                                        $result2 = mysql_query($query2);
                                                        echo "<script type='text/javascript'>alert('Password Changed Sucessfully.Login to continue');</script>";
                                                        echo "<script>window.location.href='login.php'</script>";
                                                    } elseif ($_POST['pass'] !== $_POST['repass']) {
                                                        echo "<script type='text/javascript'>alert('Make sure the New Password and confirm feild match');</script>";
                                                        echo "<script>window.location.href='changepassword.php'</script>";
                                                    } else {
                                                        echo "<script type='text/javascript'>alert('Invalid Current Password. Relogin to continue');</script>";
                                                        echo "<script>window.location.href='login.php'</script>";
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