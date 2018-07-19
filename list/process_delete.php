<?php
include 'opendb.php';

$uid = $_REQUEST['uid'];

$query = "DELETE FROM bradswedding WHERE uid='". $uid ."'";

$result = mysql_query($query) or die(mysql_error());

include 'closedb.php';

header('location: index.php');
?>
