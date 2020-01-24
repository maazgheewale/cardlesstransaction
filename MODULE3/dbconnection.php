<?php
    $dbconn = mysql_connect('localhost','root',null);
    mysql_select_db('money',$dbconn);
    if(mysql_error()){
        die ("Connection to database failed:  ".mysql_error());
    }
?>