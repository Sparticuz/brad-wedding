<?php
include 'opendb.php';

$uid = $_REQUEST['uid'];

$query = "UPDATE bradswedding SET flag='0' WHERE uid='" . $uid . "'";

$result = mysql_query($query) or die(mysql_error());

header("location:index.php");
?>