<?php

$host=""; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name=""; // Database name
$tbl_name=""; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect server ");
mysql_select_db("$db_name")or die("cannot select DB");

$datetime=date("y-m-d h:i:s"); //date time

$name = mysql_real_escape_string($_POST['name']);
$email = mysql_real_escape_string($_POST['email']);
$comment = mysql_real_escape_string($_POST['comment']);
$song = mysql_real_escape_string($_POST['song']);

$sql="INSERT INTO $tbl_name(name, email, comment, song, datetime)VALUES('$name', '$email', '$comment','$song', '$datetime')";
$result=mysql_query($sql);

//check if query successful
if($result)
	header("Location:http://wedding.constellationco.com/index.php?page=guestbook.php");
else
	die("ERROR, Please Press back in your browser and try again.");

mysql_close();
?>