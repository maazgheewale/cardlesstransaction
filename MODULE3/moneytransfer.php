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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            function pagechange(frompage, topage) {
                var page=document.getElementById('formpage_'+frompage);
                if (!page) return false;
                page.style.visibility='hidden';
                page.style.display='none';

                page=document.getElementById('formpage_'+topage);
                if (!page) return false;
                page.style.display='block';
                page.style.visibility='visible';

                return true;
            }
        </script>
        <script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>  
        <script type="text/javascript" src="js/Vegur_300.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script>
        <style type="text/css">
            .ab table {
                border-collapse: collapse;
                width: 100%;
            }

            .ab th, td {
                text-align: left;
                padding: 5px;
            }

            .ab tr:hover {background-color:white;}

            .ab th {
                background-color: #4299DA  ;
                color: white;
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
                width: 190px;
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
            if((isNaN(document.f.amt.value)) || (document.f.amt.value % 100 !== 0)){
                alert("Enter the amount in multiples of 100")
                return false;
            }
            if((isNaN(document.f.mobile.value)) || (document.f.mobile.value.length<10)){
                alert("invalid mobile no");
                return false;
            }
            if((isNaN(document.f.amt.value)) || (document.f.amt.value.length<3)){
                alert("Amount should be in multiple of 100");
                return false;
            }
            if(isNaN(document.f.amt.value)){
                alert("Invalid amount");
                return false;
            }
            return true;
        }    
    </script>
    <body id="page5">


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
                            <li class="nav-item active">
                                <a href="moneytransfer.php">MONEY TRANSFER</a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">GENERAL SETTINGS</a>
                                <ul class="dropdown-menu" >
                                    <div class="aa">
                                        <li class="nav-item"><a href="changepassword.php">CHANGE PASSWORD</a></li>
                                        <li class="nav-item"><a href="logindetails.php">LOGIN DETAILS</a></li>
                                    </div>
                                </ul>
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

                                    <?php
                                    if (isset($_GET['m'])) {
                                        if ($_GET['m'] == 1) {
                                            echo "<font color='yellow'>Amount cannot be transfered now. Please try later</font>";
                                        } else if ($_GET['m'] == 2) {
                                            echo "<script type='text/javascript'>alert('Transfer amount is already registerd for this number.');</script>";
                                            echo "<script>window.location.href='moneytransfer.php'</script>";
                                        } else if ($_GET['m'] == 3) {
                                            echo "<script type='text/javascript'>alert('Transfer discarded successfully.');</script>";
                                            echo "<script>window.location.href='moneytransfer.php'</script>";
                                        } else if ($_GET['m'] == 4) {
                                            echo "<font color='yellow'>Transfer cannot be discarded at this time.</font>";
                                        } else if ($_GET['m'] == 5) {
                                            echo "<script type='text/javascript'>alert('No requests for transfers.');</script>";
                                            echo "<script>window.location.href='moneytransfer.php'</script>";
                                        } else if ($_GET['m'] == 6) {

                                            echo "<script type='text/javascript'>alert('Request for amount transfer is generated successfully');</script>";
                                            echo "<script>window.location.href='moneytransfer.php'</script>";
                                        }
                                    }
                                    ?>
                                    <div id="formpage_1" style="visibility: visible; display: block;">
                                        <h2>Transfer Details</h2><br/>
                                        <form name="f" id="ContactForm" method="post" action="" onsubmit="javascript:return check();">
                                            <input type="text" placeholder="Mobile No" name="mobile" class="textbox" required maxlength="10"/></br><br/>
                                            <input type="text" required placeholder="Amount" name="amt" class="textbox" required maxlength="5"/><br/><br/>
                                            <input type="submit" name="reg" value="Send Request" onclick="return check()"/><br/>
                                        </form>
                                        <br/>
                                        <form method="post" action="">
                                            <tr><td><span></span></td><td><input type="submit" name="request" value="View Transfer Request"></td></tr>
                                        </form>

                                    </div>
                                    <?php
                                    if (isset($_REQUEST['request'])) {
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
                                        echo "<script>window.location.href='moneytransfer.php?view'</script>";
                                    }
                                    include 'dbconnection.php';
                                    if (isset($_REQUEST['reg'])) {
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
                                        echo "<script>pagechange(1,2);</script>";
                                        $query = "select * from tbluserdetails where email='{$_SESSION['id']}'";
                                        $result = mysql_query($query);
                                        $row = mysql_fetch_assoc($result);
                                        $query = "select bal from tbltransaction where accno='{$row['accno']}' and bcode='{$row['bcode']}' order by slno desc limit 1";
                                        $res = mysql_query($query) or die(mysql_error());
                                        $r = mysql_fetch_assoc($res);
                                        if ($r['bal'] < $_POST['amt']) {
                                            echo "<script type='text/javascript'>alert('Insufficient balance in account');</script>";
                                            echo "<script>window.location.href='moneytransfer.php'</script>";
                                        } else {
                                            $query1 = "select email from tbluserdetails where regmob='{$_POST['mobile']}' and regmob!='{$row['regmob']}'";
                                            $result1 = mysql_query($query1) or die(mysql_error());
                                            $row1 = mysql_fetch_assoc($result1);
//                                                $query2 = "select email from tbluserlogin where email='{$row1['email']}'";
//                                                $result2 = mysql_query($query2) or die(mysql_error());
//                                                if (mysql_num_rows($result2) > 0) {
                                            ?>                       
                                            <form name="f" method="post" action="allow.php">
                                                <h2 style="color:red;">CORFIRMATION</h2><br/>
                                                <input type="hidden" name="bcode" value="<?php echo $row['bcode'] ?>"/>
                                                <input type="hidden" name="regmob" value="<?php echo $row['regmob'] ?>"/>
                                                <table cellpadding="20px;">
                                                    <tr><td><span>My Account Name:</span></td><td><input type="text" name="name" class="textbox" value="<?php echo $row['name'] ?>" readonly/></td></tr>
                                                    <tr><tr><td><span>My Account Type:</span></td><td><input type="text" name="type" class="textbox" value="<?php echo $row['acctype'] ?>" readonly/></td></tr>
                                                    <tr><td><span>My Account No:</span></td><td><input type="text" name="accno" class="textbox" value="<?php echo $row['accno'] ?>" readonly/></td></tr>
                                                    <tr><td><span>My Account Balance:</span></td><td><input type="text" name="bal" class="textbox" value="<?php echo $r['bal'] ?>" readonly/></td></tr>
                                                    <tr><td><span>Send To Mobile No:</span></td><td><input type="text" placeholder="Mobile No" name="mob" class="textbox" value="<?php echo $_POST['mobile'] ?>" readonly/></td></tr>
                                                    <tr><td><span>Transfer Amount:</span></td><td><input type="text" placeholder="Amount" name="amt" class="textbox" value="<?php echo $_POST['amt'] ?>" readonly/></td></tr>
                                                    <tr><td><span></span></td><td><br/><input type="submit" name="reg" value="Tranfer Amount" class="button1">&nbsp;&nbsp;&nbsp;<a href="moneytransfer.php"><img src="assets\images\discard.gif" width="24px;" height="24px;"/></a></td></tr>
                                                </table>
                                            </form>
                                            <?php
//                                                } else {
//                                                    echo "<script type='text/javascript'>alert('Invalid Mobile Number');</script>";
//                                                    echo "<script>window.location.href='moneytransfer.php'</script>";
//                                                }
                                        }
                                    }

                                    if (isset($_GET['view'])) {
                                        $sl = 1;
                                        ?><div><div class="ab">
                                                <br/><br/><table>
                                                    <trz>
                                                        <th>Sl No</th>
                                                        <th>Transfer To</th>
                                                        <th>Amount</th>
                                                        <th>Cancel</th>
                                                        </tr>
                                                        <?php
                                                        $sql = mysql_query("select * from tbluserdetails where email='{$_SESSION['id']}'");
                                                        $sql = mysql_fetch_assoc($sql);
                                                        $mob = $sql['regmob'];
                                                        $query = "select * from tbltransfer where replymob='$mob'";
                                                        $result = mysql_query($query);
                                                        while ($row = mysql_fetch_assoc($result)) {
                                                            ?>
                                                            <tr align="center"><td align="center"><?php echo $sl ?></td>
                                                                <td><?php echo $row['regmob'] ?></td>
                                                                <td><?php echo "<font color='#4299DA'>" . $row['bal'] ?></td>
                                                                <td><a href="cancel.php?mob=<?php echo $row['regmob'] ?>&reg=<?php echo $row['replymob'] ?>"><img src="assets\images\discard.gif" width="24px;" height="24px;"/></a></td></tr>

                                                            <?php
                                                            $sl = $sl + 1;
                                                        }
                                                        echo "</table>";
                                                        if ($sl == 1) {
                                                            echo "<script>window.location.href='moneytransfer.php?m=5'</script>";
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