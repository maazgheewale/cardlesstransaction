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
$query = "select * from tbltransfer where accno='{$_POST['accno']}' and regmob='{$_POST['mob']}'";
$result = mysql_query($query);
if (mysql_num_rows($result) > 0) {
    header("location:moneytransfer.php?m=2");
} else {
    $code = rand(1000, 9999);
    $query = "insert into tbltransfer values('{$_POST['accno']}','{$_POST['name']}','{$_POST['bcode']}','{$_POST['mob']}','{$_POST['regmob']}','$code','{$_POST['amt']}',0)";
    $result = mysql_query($query) or die(mysql_error());
    if ($result) {
        $q = mysql_query("select max(slno) as sl from tbltransaction where accno='{$_POST['accno']}'");
        $r = mysql_fetch_assoc($q) or die($q);
        $q1 = mysql_query("select bal from tbltransaction where slno='{$r['sl']}'");
        $r1 = mysql_fetch_assoc($q1) or die($q1);
        $sl = $r['sl'] + 1;
        $msg = "ATM TRANSFER:" . $_POST['mob'];
        $amt = $r1['bal'] - $_POST['amt'];
        // int q = st.executeUpdate("insert into tbltransaction values(" + sl + ",'" + bcode + "','" + acc + "','" + dateFormat.format(date) + "','" + msg + "','0'," + txtamt.getText() + "," + t + ")");
        $queryt1 = "insert into tbltransaction values('$sl','{$_POST['bcode']}','{$_POST['accno']}',now(),'$msg','0','{$_POST['amt']}','$amt')";
        $resultt1 = mysql_query($queryt1) or die($queryt1);
        $msgtxt = "Your original OTP is: " . $code . " and you can remove amt only upto Rs: " . $_POST['amt'];
        $ch = curl_init();
        $receipientno = $_POST['mob'];
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


        $msgtxt1 = "Amt of Rs: " . $_POST['amt'] . " is removed from your Acc No: " . $_POST['accno'] . " by mob no " . $_POST['mob'];
        $ch1 = curl_init();
        $receipientno1 = $_POST['regmob'];
        curl_setopt($ch1, CURLOPT_URL, "http://api.smsala.com/api/SendSMS");
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch1, CURLOPT_POST, 1);
        curl_setopt($ch1, CURLOPT_POSTFIELDS, "api_id=$a&api_password=$b&sms_type=$c&encoding=$d&sender_id=$e&phonenumber=$receipientno1&textmessage=$msgtxt1");
        $buffer1 = curl_exec($ch1);
        if (empty($buffer1)) {
            $j = $j + 1;
        } else { /* echo $buffer; */
        }
        curl_close($ch1);
        header("location:moneytransfer.php?m=6");
    } else {
        header("location:moneytransfer.php?m=1");
    }
}
?>
