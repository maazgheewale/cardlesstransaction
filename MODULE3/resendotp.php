<?php

ini_set('error_reporting', 0);
ini_set('display_errors', 0);
session_start();
include 'dbconnection.php';
$query5 = "select * from resetopt where email='{$_SESSION['id2']}'";
$result5 = mysql_query($query5) or die(mysql_error());
if (mysql_num_rows($result5) > 0) {
    $query6 = "DELETE FROM resetopt WHERE email='{$_SESSION['id2']}'";
    $result6 = mysql_query($query6) or die(mysql_error());
}
$code = rand(1000, 9999);
$query1 = "insert into resetopt values('{$_SESSION['id2']}','$code')";
$result1 = mysql_query($query1);
if ($result1) {
    $msgtxt = "Do not share this OTP with anyone. OTP to reset your password is" . $code;
    $receipientno = $_SESSION['id3'];
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
?>
