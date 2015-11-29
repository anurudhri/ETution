<?php
$con = mysql_connect("localhost", "root", "");
mysql_select_db('tutor_management',$con);


$_SESSION['host']='localhost'; //Host Name
$_SESSION['dbuname']='root'; //database User Name
$_SESSION['dbpwd']=''; //database Password
$_SESSION['dbname']='tutor_management'; //database Name

?>

