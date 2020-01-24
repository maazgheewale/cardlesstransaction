<?php
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/cufon-replace.js"></script>  
        <script type="text/javascript" src="js/Vegur_300.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_700.font.js"></script>
        <script type="text/javascript" src="js/PT_Sans_400.font.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script>
        <style type="text/css">
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 5px;
            }

            tr:hover {background-color:white;}

            th {
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
        <title>Login</title>
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
                    <a class="navbar-brand mu-logo" href="index.php"><span><b><i>Instant Money</i></b></span></a>
                    <!-- image based logo -->
                    <!-- <a class="navbar-brand mu-logo" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto mu-navbar-nav">
                            <li class="nav-item"><a href="index.php">Home</a></li>
                            <li class="nav-item"><a href="login.php">LOGIN</a></li>
                            <li class="nav-item"><a href="register.php">Register</a></li>
                            <li class="nav-item active">
                                <a href="terms.php">TERMS & CONDITIONS</a>
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



                                <br/><br/><p>                       Before a customer applies to us for activation of Online Banking Services or uses Online Banking Services for the first time, the customer shall carefully read the Terms and fully understand relevant provisions hereof, and the customer shall have the right to require us to provide sufficient explanation about the Terms. BY APPLYING TO US FOR THE ACTIVATION OF ONLINE BANKING SERVICES OR USING ONLINE BANKING SERVICES FOR THE FIRST TIME, CUSTOMERS SHALL BE DEEMED TO HAVE CAREFULLY READ, UNDERSTOOD AND ACCEPTED THE TERMS AND AGREED TO BE BOUND HEREBY. </p>
                                <br/><br/><center><u><b>STEPS FOR TRANSACTION OF MONEY</b> </u></center><br/><br/>
                                <b>(SENDER)</b><br/><br/>
                                1)The user must register with internet banking in the register from with the following details required make sure you agree the terms and  condition before reading it and click on Register.<br/>
                                2) Then Login with the user- id and password in login form make sure you enter correct password because entering wrong password 6 times will disable your Use-id and to enable it you need to contact your bank branch.<br/>
                                3) Then go to money transfer form Enter mobile number of the person you want to transfer money and the limit of amount you want to transfer then click Send Request.<br/>
                                4) Then in confirmation form confirm the following details are correct or not. If  yes click on Transfer Amount.<br/><br/>
                                <b>(RECEIVER)</b><br/><br/>
                                1)	After the sender transfer the amount to the Receiver. The Receiver receives a text message on his/ her mobile number with a onetime password(OTP) on his mobile that is temporary(OTP).<br/>
                                2)	 The Receiver needs to go to the ATM for the withdrawal of money sent by the sender.<br/>
                                3)	On the interface of ATM the User needs to select the cardless option.<br/>
                                4)	Enter his/her mobile number and select continue this generates a onetime password (OTP) on his mobile that is Temporary(OTP).<br/>
                                5)	Enter the Temporary  one time  password (OTP) and then select continue.<br/>
                                6)	Enter the original (OTP) and select continue .<br/>
                                7)	Then select withdraw and enter the amount you want o withdraw.<br/>
                                8)	Then you will be able to take the cash with a receipt containing the details of Transaction.<br/><br/><br/>

                                <br/><br/><b>We may provide other Online Banking Services to customers from time to time</b><br/>
                                1.	Customers who are above the age of 18, have full capacity for civil conduct and have opened saving accounts with us; <br/>
                                2.	Customers who have opened a Junior Savings Account and shall use Online Banking Services pursuant to the Special Terms & Conditions for Junior Savings Account of Standard Chartered Bank as well as to the Terms; <br/>
                                3.	Potential customers intending to consult us about our products and services. <br/>
                                4.	We may require different methods of identity verification (hereinafter referred to as Identity Verification Information) for different Online Banking service channels, and/or different financial transactions, and/or other security considerations, including but not limited to one or more of the following identity verification methods: <br/>
                                I.	Various Online Banking service passwords, including but not limited to Phone Banking password, Online Banking password, query password, transaction password, and electronic advice password (also called “Login Code” in some cases), which are hereinafter collectively referred to as “Online Banking Service Passwords” or simply “Passwords”;<br/> 
                                II.	Verification Codes; <br/>
                                III.	Preset security questions and answers;<br/>
                                IV.	Personal information (the usernames, Phone Banking user numbers,card numbers, expiry dates, ID documents and ID numbers, mobile phone numbers, fixed-line phone numbers, correspondence addresses and other customer information relating to these Services and used for verifying customers’ identity, which are set by customers/us, and/or recorded in databases of government departments/databases of other banks/other commercial databases).<br/>
                                <br/><br/>IF AN ERROR OCCURS TO A TRANSACTION INSTRUCTION WHEN WE ARE EXECUTING IT, THE RELEVANT CUSTOMER SHALL CONTACT US WITHIN 30 DAYS AFTER THE DATE WHEN THE CUSTOMER KNOWS OR OUGHT TO KNOW THAT SUCH ERROR OCCURS, OTHERWISE THE CUSTOMER SHALL BE DEEMED TO HAVE ACKNOWLEDGED AND ACCEPTED OUR EXECUTION, AND SHALL ASSUME THE RELEVANT CONSEQUENCES ARISING THEREFROM.<br/><br/>
                                Before a customer applies to us for activation of Online Banking Services or uses Online Banking Services for the first time, the customer shall carefully read the Terms and fully understand relevant provisions hereof, and the customer shall have the right to require us to provide sufficient explanation about the Terms. BY APPLYING TO US FOR THE ACTIVATION OF ONLINE BANKING SERVICES OR USING ONLINE BANKING SERVICES FOR THE FIRST TIME, CUSTOMERS SHALL BE DEEMED TO HAVE CAREFULLY READ, UNDERSTOOD AND ACCEPTED THE TERMS AND AGREED TO BE BOUND HEREBY.<br/><br/><br/>

                                I.	<u><b>Security Guarantee</b></u><br/><br/> 
                                1.	Customers shall properly keep their mobile phones used to receive Verification Codes (hereinafter referred to as Mobile Phones for Verification), Identity Verification Information, electronic advice passwords (if any) sent by us to the email boxes designated by customers, and so on. <br/>
                                2.	Customers are aware that they might suffer losses for any leakage of their Identity Verification Information to others. </br>
                                CUSTOMERS AGREE TO BEAR RELEVANT RISKS THAT THEIR IDENTITY VERIFICATION INFORMATION MIGHT BE USED BY UNAUTHORISED PERSONS OR USED FOR UNAUTHORISED PURPOSES, AND BEAR RELEVANT LOSSES CAUSED BY THE LEAKAGE OF SUCH INFORMATION. <br/>
                                3.	Once a customer knows or suspects that his/her Identity Verification Information is known to any unauthorised person, the Mobile Phone for Verification is lost, or any unauthorised person uses these Services impersonating the customer, the customer shall notify us by dialing the telephone number designated by us, and require us to suspend or terminate all/part of Online Banking Services (to the extent that such services can be suspended or terminated). </br>EXCEPT WHERE WE HAVE WILLFUL MISCONDUCT OR GROSS NEGLIGENCE, BEFORE WE ACCEPT THE CUSTOMER’S SUSPENSION OR TERMINATION INSTRUCTION, WE WILL NOT BE HELD LIABLE FOR ANY LOSS ARISING BECAUSE ANY UNAUTHORISED PERSON USES THESE SERVICES IMPERSONATING THE CUSTOMER OR THESE SERVICES ARE USED FOR UNAUTHORISED PURPOSES. <br/>
                                4.	Customers shall modify their Online Banking service passwords on a regular basis or as required by the system, and do not use any Online Banking service password that had ever been used. <br/>
                                5.	When a customer sets or changes his/her password, the customer must not use a password that can be easily guessed by a third person to give such third person the opportunity to use these Services impersonating the customer; for example, the customer shall avoid using his/her or anyone else’s birthday, ID card number, telephone number, repeated or consecutive numbers or characters as password. <br/>
                                6.	At any time, customers must take all reasonable actions to ensure the security of passwords. Customers must ensure that they will not disclose their passwords to any other persons, including our staff as well as persons providing assistance at technical information desk. Customers shall not record their passwords in order to prevent others from obtaining passwords easily. <br/>
                                7.	If a customer inadvertently discloses his/her password or suspects that anyone else knows his/her password, the customer must change the password immediately through these Services. If the password cannot be changed, the customer must notify us immediately through Phone Banking service. 
                                8.	If a customer finds/suspects that anyone else knows his/her Verification Code, the customer shall immediately exit/log out of these Services to make the Verification Code invalid, and notify us immediately. <br/>
                                9.	If a customer finds that there is any transaction not duly authorised by him/her in any of his/her accounts/services, the customer must notify us immediately via Phone Banking. Therefore, the customer must often check all his/her accounts/services to check for such transactions. <br/>
                                10.	CUSTOMERS SHALL USE THESE SERVICES PERSONALLY AND SHALL NOT ALLOW ANY PERSON TO USE THESE SERVICES ON THEIR BEHALF. <br/>
                                11.	In their use of these Services, customers shall not leave relevant computer devices or electronic service equipment, no matter whether such equipment is provided by us, and customers shall ensure that they log out of the Online Banking service system before leaving such equipment. <br/>
                                12.	Customers shall not operate these Services by using terminals connected to local area network (LAN) (such as in an office environment where it is impossible to ensure that no one can observe or duplicate customers’ operations and receive these Services impersonating customers). <br/>
                                13.	We may otherwise provide customers with security tips. Customers must ensure that they use the services safely according to the security requirements provided by us to customers (in whatever form). <br/>
                                14.	Customers shall take all reasonably practicable actions to ensure that the computers or other devices used by them for these Services are free of any computer viruses or similar devices or software, including but not limited to equipment regarded as software bombs, Trojan horses or worm viruses. These Services can be used via the Internet or other communication channels (as appropriate) but we are unable to control public systems, so customers must ensure that the computers or other devices they use for these Services have been provided with sufficient virus protection. <br/>



                            </div>
                        </div>
                    </div>
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
                        <p class="mu-copy-right">&copy; Copyright 2018 <a rel="nofollow" href="index.php">Instant Money</a>. All right reserved.</p>
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