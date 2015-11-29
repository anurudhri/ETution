<?php
require_once('includes/config.php');
session_start();
$time = date("Y-m-d  h:i:sa");
$go="UPDATE register_new_user SET `logout_time`='".$time."' WHERE new_id=".$_SESSION['SESS_ID'];
mysql_query($go);
unset($_SESSION["SESS_NAME"]);
session_destroy();
header("location: index.php");
?>
