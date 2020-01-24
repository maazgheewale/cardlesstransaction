<?php

include 'dbconnection.php';
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
$query = "select * from tbltransfer where regmob='{$_GET['mob']}'";
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);


$query1 = "select max(slno) as sl from tbltransaction where accno='{$row['accno']}'";
$result1 = mysql_query($query1);
$row1 = mysql_fetch_assoc($result1);

$query2 = "select * from tbltransaction where slno='{$row1['sl']}'";
$result2 = mysql_query($query2);
$row2 = mysql_fetch_assoc($result2);

$newslno = $row2['slno'] + 1;
$type = "AMOUNT REFUNDED:" . $_GET['reg'];
$amt = $row2['bal'] + $row['bal'];

$queryt1 = "insert into tbltransaction values('$newslno','{$row['bcode']}','{$row['accno']}',now(),'$type','{$row['bal']}','0','$amt')";
$resultt1 = mysql_query($queryt1) or die($queryt1);
$result = mysql_query("delete from tbltransfer where replymob='{$_GET['reg']}' and regmob='{$_GET['mob']}'");
if (mysql_affected_rows() > 0) {
    $msgtxt = "Transfer from Mob No: " . $_GET['reg'] . " with Amt Rs. " . $row['bal'] . " has been sucessfully cancelled";
    $receipientno = $_GET['mob'];
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
    header("location:moneytransfer.php?m=3");
} else {
    header("location:moneytransfer.php?m=4");
}
?>
