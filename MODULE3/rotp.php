<?php

ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include 'dbconnection.php';
$query = "select * from tbluserdetails where email='{$_POST['email']}' and atmcard='{$_POST['cardno']}' and atmpin='{$_POST['pinno']}'";
$result = mysql_query($query) or die(mysql_error());
session_start();
$_SESSION['id2'] = $_POST['email'];
if (mysql_num_rows($result) > 0) {
    $query5 = "select * from resetopt where email='{$_POST['email']}'";
    $result5 = mysql_query($query5) or die(mysql_error());
    if (mysql_num_rows($result5) > 0) {
        $query6 = "DELETE FROM resetopt WHERE email='{$_POST['email']}'";
        $result6 = mysql_query($query6) or die(mysql_error());
    }
    $row = mysql_fetch_assoc($result);
    $_SESSION['id3'] = $row['regmob'];
    $code = rand(1000, 9999);
    $query1 = "insert into resetopt values('{$_POST['email']}','$code')";
    $result1 = mysql_query($query1);
    if ($result1) {
        $msgtxt = "OTP to reset your password is " . $code;
        $receipientno = $row['regmob'];
        $ch = curl_init();
        $a = "API68232382092";
        $b = "HTbJxbbzEs";
        $c = "T";
        $d = "T";
        $e = "DROPIN";
        curl_setopt($ch, CURLOPT_URL, "http://api.smsala.com/api/SendSMS");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "api_id=$a&api_password=$b&sms_type=$c&encoding=$d&sender_id=$e&phonenumber=$receipientno&textmessage=$msgtxt");
        $buffer = curl_exec($ch);
        if (empty($buffer)) {
            $i = $i + 1;
        } else { /* echo $buffer; */
        }
        curl_close($ch);
        echo "<script>window.location.href='resetotp.php'</script>";
    } else {
        echo "<script type='text/javascript'>alert('Server is busy. Please try again later');</script>";
        echo "<script>window.location.href='resetpassword.php'</script>";
    }
} else {
    echo "<script type='text/javascript'>alert('Invalid details');</script>";
    echo "<script>window.location.href='resetpassword.php'</script>";
}
?>
