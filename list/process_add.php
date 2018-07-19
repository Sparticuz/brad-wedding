<?php
include 'opendb.php';

$admin = $_REQUEST['tab'];
$lname = $_REQUEST['lname'];
$fname = $_REQUEST['fname'];
$sname = $_REQUEST['sname'];
$cname = $_REQUEST['cname'];
$title = $_REQUEST['title'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zip = $_REQUEST['zip'];
$phone = $_REQUEST['phone'];
$notes = $_REQUEST['notes'];
$total = $_REQUEST['total'];
$who = $_REQUEST['who'];
$gift = $_REQUEST['gift'];

$query = "INSERT INTO bradswedding VALUES('', '"
									 . $who ."', '"
									 . $lname . "', '"
									 . $fname . "', '"
									 . $sname . "', '"
									 . $cname . "', '"
									 . $title . "', '"
									 . $address . "', '"
									 . $city . "', '"
									 . $state . "', '"
									 . $zip . "', '"
									 . $phone . "', '"
									 . $notes . "', '"
									 . $total . "', '"
									 . $gift ."', '1')";

$result = mysql_query($query) or die(mysql_error());
include 'closedb.php';
header('location: index.php');


?>
