<?php
include 'opendb.php';

$uid = $_REQUEST['uid'];
$tab = $_REQUEST['tab'];
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
$gift = $_REQUEST['gift'];

$query = "UPDATE bradswedding SET " .
		"lname='". $lname .
		"', fname='". $fname .
		"', sname='". $sname .
		"', cname='". $cname .
		"', title='". $title .
		"', address='". $address .
		"', city='". $city .
		"', state='". $state .
		"', zip='". $zip .
		"', phone='". $phone .
		"', notes='". $notes .
		"', total='". $total .
		"', gift='" . $gift .
		"', flag='1".
		"' WHERE uid='" . $uid ."'";

$result = mysql_query($query) or die(mysql_error());
include 'closedb.php';
header('location: index.php');


?>
