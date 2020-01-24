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


            .aa input[type="email"]{
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
            .aa input[type="submit"]{
                width: 160px;
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
    <script type="text/javascript">
        function check(){
            var numbers = /^[0-9]+$/;
            if((isNaN(document.f.pass.value)) || (document.f.pass.value.match(!numbers))){
                alert("Please only enter numeric characters for your Password-PIN! (Allowed input:0-9)")
                return false;
            }}
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
                            <li class="nav-item active">
                                <a href="login.php">Login</a>
                            </li>
                            <li class="nav-item"><a href="register.php">Register</a></li>
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
                            <form name="f" id="ContactForm" method="post" action="" onsubmit="javascript:return check();">
                                <div class="aa">
                                    <center>
                                        <h2>Login</h2><br/>
                                        <?php
                                        if (isset($_GET['msg'])) {
                                            echo "<font color='red'>{$_GET['msg']}</font><br/>";
                                        }

                                        if (isset($_GET['m'])) {
                                            echo "<font color='blue'>{$_GET['m']}</font><br/>";
                                        }
                                        ?>
                                        <br/><input type="password" name="user"  placeholder="Username" required/><br /><br />
                                        <input type="password" name="pass" placeholder="Password" required maxlength="4"/><br /><br />
                                        <input type="submit" value="Let me in" name="log" onclick="return check()"/><br/><br/>
                                        <font size="2px" color="#4299DA"><a href="resetpassword.php">Forgot password?</a></font>
                                    </center>
                                </div> 
                            </form>
                            <br/><br/>
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

    <?php
    include 'dbconnection.php';
    if (isset($_REQUEST['log'])) {

        $date = date("Y/m/d");
        $query = "Select * from tbluserlogin where email='{$_POST['user']}'"; //to check user is present
        $result = mysql_query($query);

        $query3 = "Select * from tbluserlogin where email='{$_POST['user']}' and password='{$_POST['pass']}' and disable='1' and disabledate!='$date'"; //to check user is present and 
        $result3 = mysql_query($query3);

        $query4 = "Select * from tbluserlogin where email='{$_POST['user']}' and password!='{$_POST['pass']}'"; //to check user is present and 
        $result4 = mysql_query($query4);

        $query9 = "Select * from tbluserlogin where email='{$_POST['user']}' and password='{$_POST['pass']}' and disable='1' and disabledate='$date'"; //to check user is present and 
        $result9 = mysql_query($query9);

        if (mysql_num_rows($result) > 0) {//if username exist
            $query2 = "Select * from tbluserlogin where email='{$_POST['user']}' and password='{$_POST['pass']}' and disable='0'";
            $result2 = mysql_query($query2);

            if (mysql_num_rows($result2) > 0) {//usernmame and password is correct and account is normal
                $query11 = "UPDATE tbluserlogin SET disabledate='$date',disablecount='0',disable='0' WHERE email='{$_POST['user']}'";
                $result11 = mysql_query($query11);
                session_start();
                $_SESSION['id'] = $_POST['user'];
                $que = "Select * from logintime where email='{$_POST['user']}'";
                $res = mysql_query($que);
                if (mysql_num_rows($res) > 0) {//update new last active time of user
                    date_default_timezone_set('Asia/Kolkata');
                    $h = date('H');
                    $i = date('i');
                    $que1 = "UPDATE logintime SET hour='$h',minutes='$i' WHERE email='{$_POST['user']}'";
                    $res1 = mysql_query($que1);
                } else {//set new active time of user
                    date_default_timezone_set('Asia/Kolkata');
                    $h = date('H');
                    $i = date('i');
                    $que3 = mysql_query("insert into logintime values('{$_POST['user']}','$h','$i')");
                    $res3 = mysql_query($que3);
                }
                include 'systeminfo.php';
                $localIP = getHostByName(getHostName());
                ob_start();
                system('ipconfig/all');
                $mycom = ob_get_contents();
                ob_clean();
                $findme = "Physical";
                $pmac = strpos($mycom, $findme);
                $mac = substr($mycom, ($pmac + 36), 17);
                $macc = 'UNKNOWN';
                foreach (explode("\n", str_replace(' ', '', trim(`getmac`, "\n"))) as $i)
                    if (strpos($i, 'Tcpip') > -1) {
                        $macc = substr($i, 0, 17);
                        break;
                    }
                if ($macc != "UNKNOWN") {
                    $a = $macc;
                } else {
                    $a = $mac;
                }
                $que3 = "insert into logindetails values('0','{$_POST['user']}',now(),'$localIP','$a','$browser','$os')";
                $res3 = mysql_query($que3) or die(mysql_error());
                $date = date("Y/m/d");
                $row = mysql_fetch_assoc($result1);
                $query11 = "UPDATE tbluserlogin SET disabledate='$date' , disablecount='0', disable='0' WHERE email='{$_POST['user']}'";
                $result11 = mysql_query($query11);
                echo "<script>window.location.href='home.php'</script>";
            } elseif (mysql_num_rows($result3) > 0) {//username password is correct account is blocked but new day
                $query111 = "UPDATE tbluserlogin SET disabledate='$date',disablecount='0',disable='0' WHERE email='{$_POST['user']}'";
                $result111 = mysql_query($query111);
                session_start();
                $_SESSION['id'] = $_POST['user'];
                $que = "Select * from logintime where email='{$_POST['user']}'";
                $res = mysql_query($que);
                if (mysql_num_rows($res) > 0) {
                    date_default_timezone_set('Asia/Kolkata');
                    $h = date('H');
                    $i = date('i');
                    $que1 = "UPDATE logintime SET hour='$h',minutes='$i' WHERE email='{$_POST['user']}'";
                    $res1 = mysql_query($que1);
                } else {
                    date_default_timezone_set('Asia/Kolkata');
                    $h = date('H');
                    $i = date('i');
                    $que3 = mysql_query("insert into logintime values('{$_POST['user']}','$h','$i')");
                    $res3 = mysql_query($que3);
                }
                include 'systeminfo.php';
                $localIP = getHostByName(getHostName());
                ob_start();
                system('ipconfig/all');
                $mycom = ob_get_contents();
                ob_clean();
                $findme = "Physical";
                $pmac = strpos($mycom, $findme);
                $mac = substr($mycom, ($pmac + 36), 17);
                $macc = 'UNKNOWN';
                foreach (explode("\n", str_replace(' ', '', trim(`getmac`, "\n"))) as $i)
                    if (strpos($i, 'Tcpip') > -1) {
                        $macc = substr($i, 0, 17);
                        break;
                    }
                if ($macc != "UNKNOWN") {
                    $a = $macc;
                } else {
                    $a = $mac;
                }
                $que3 = "insert into logindetails values('0','{$_POST['user']}',now(),'$localIP','$a','$browser','$os')";
                $res3 = mysql_query($que3) or die(mysql_error());
                $date = date("Y/m/d");
                $row = mysql_fetch_assoc($result1);
                $query1111 = "UPDATE tbluserlogin SET disabledate='$date' , disablecount='0', disable='0' WHERE email='{$_POST['user']}'";
                $result1111 = mysql_query($query1111);
                echo "<script>window.location.href='home.php'</script>";
            } elseif (mysql_num_rows($result9) > 0) {

                echo "<script type='text/javascript'>alert('User Id is locked due to 3 wrong password trials. Try to ReLogin after 24 hours or Contact your Bank Branch to enable your user id instantly');</script>";
                echo "<script>window.location.href='login.php'</script>";
            } elseif (mysql_num_rows($result4) > 0) {//if password is wrong....................................................................
                $query5 = "Select * from tbluserlogin where email='{$_POST['user']}' and password!='{$_POST['pass']}' and disable='0' and disabledate='$date' "; //to check user is present and 
                $result5 = mysql_query($query5);
                $query6 = "Select * from tbluserlogin where email='{$_POST['user']}' and password!='{$_POST['pass']}' and disable='0' and disabledate!='now()' "; //to check user is present and 
                $result6 = mysql_query($query6);
                $query7 = "Select * from tbluserlogin where email='{$_POST['user']}' and password!='{$_POST['pass']}' and disable='1' and disabledate='$date'"; //to check user is present and 
                $result7 = mysql_query($query7);
                $query8 = "Select * from tbluserlogin where email='{$_POST['user']}' and password!='{$_POST['pass']}' and disable='1' and disabledate!='now()' "; //to check user is present and 
                $result8 = mysql_query($query8);

                if (mysql_num_rows($result5) > 0) {//not blocked but I entered wrong password today (a)
                    $row = mysql_fetch_assoc($result);
                    $count = $row['disablecount'];
                    if ($count >= "2") {
                        //today more then 3 times wrong password
                        $newcount = $count + 1;
                        $query21 = "UPDATE tbluserlogin SET disablecount='$newcount', disable='1' WHERE email='{$_POST['user']}'";
                        $result21 = mysql_query($query21);
                        echo "<script type='text/javascript'>alert('User Id is locked due to 3 wrong password trials. Try to ReLogin after 24 hours or Contact your Bank Branch to enable your user id instantly');</script>";
                        echo "<script>window.location.href='login.php'</script>";
                    } else {//wrong password
                        $newcount = $count + 1;
                        $query22 = "UPDATE tbluserlogin SET disablecount='$newcount' WHERE email='{$_POST['user']}'";
                        $result22 = mysql_query($query22);
                        echo "<script type='text/javascript'>alert('Warning 3 wrong password attempts will disable User Id.');</script>";
                        echo "<script>window.location.href='login.php?msg=Invalid Credentials'</script>";
                    }
                } elseif (mysql_num_rows($result6) > 0) {//not blocked but I entered wrong password next day (b)
                    $query23 = "UPDATE tbluserlogin SET disabledate='$date' , disablecount='1' WHERE email='{$_POST['user']}'";
                    $result23 = mysql_query($query5);
                    echo "<script type='text/javascript'>alert('Warning 3 wrong password attempts will disable User Id.');</script>";
                    echo "<script>window.location.href='login.php?msg=Invalid Credentials'</script>";
                } elseif (mysql_num_rows($result7) > 0) {//account blocked but I entered wrong password today
                    echo "<script type='text/javascript'>alert('User Id is locked due to 3 wrong password trials. Try to ReLogin after 24 hours or Contact your Bank Branch to enable your user id instantly');</script>";
                    echo "<script>window.location.href='login.php'</script>";
                } elseif (mysql_num_rows($result8) > 0) {//account blocked but I entered wrong password next day
                    $query24 = "UPDATE tbluserlogin SET disabledate='$date' , disablecount='1' WHERE email='{$_POST['user']}'";
                    $result24 = mysql_query($query24);
                    echo "<script type='text/javascript'>alert('Warning 3 wrong password attempts will disable User Id.');</script>";
                    echo "<script>window.location.href='login.php?msg=Invalid Credentials'</script>";
                } elseif (mysql_num_rows($result8) > 0) {
                    echo "<script type='text/javascript'>alert('User Id is locked due to 3 wrong password trials. Try to ReLogin after 24 hours or Contact your Bank Branch to enable your user id instantly');</script>";
                    echo "<script>window.location.href='login.php'</script>";
                }
            }//..............................................................................................................................
        } else {//user not present
            echo "<script>window.location.href='login.php?msg=Invalid Credentials'</script>";
        }
    }
    ?>
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

</main>

<!-- End main content -->	


<!-- Start footer -->
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

</script>

</body>
</html>