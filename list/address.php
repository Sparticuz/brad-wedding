<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Address List</title>
</head>

<body>
<?php

include 'opendb.php';

$query = "SELECT * FROM bradswedding ORDER BY lname";
$result = mysql_query($query) or die("Couldn't Run Query: ".$query);

$j=0;

while($row = mysql_fetch_assoc($result)){
	echo "<p style='padding-bottom: 4px;display:box;'>";	
	echo $row['title'] ." ". $row['fname'];
	if ( strcmp($row['sname'], ""))
		echo " &amp; ". $row['sname'];
	echo " ". $row['lname'] ."&emsp;";
	echo $row['address'] ."\t". $row['city'] .", ".$row['state'] ."  ". $row['zip'] ."&emsp;&emsp; Notes: " . $row['notes'] ."<br />";
	echo "</p>\n";
	$j++;
}
echo "<br /><br />Number of Addresses: " . $j;

include 'closedb.php';

?>

</body>
</html>