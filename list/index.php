<?php include 'opendb.php'; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="robots" content="noindex, nofollow" />
<title>Brad & Sara's Wedding List</title>
<style type="text/css">
<!--
img {border: 0px;}
-->
</style>
</head>
<body>
<h1>Sara &amp; Brad's Wedding List</h1>

<p><a href="address.php">Print View</a></p>
<table border="1">
	<tr>
    	<td style="background-color: #feccff;;">Sara's Guests</td>
        <td style="background-color: #ccd9ff;;">Brad's Guests</td>
        <td style="background-color: #d4ffcc;;">Both Guests</td>
        <td style="background-color: #fff65f;">Recently Edited</td>
        <td>Total Attending: <?php 
		
		$query = "SELECT SUM(total) FROM bradswedding";
		$result = mysql_query($query);
		$row = mysql_fetch_array($result);
		echo $row['SUM(total)'];
				
		?></td>
    </tr>
</table><br />
<?php echo "<a href='add.php'>Add New Entry</a>"; ?>
<br />
<table border="1">
	<tr>
    	<th>Edit</th>
    	<th>Last Name</th>
        <th>First Name</th>
        <th>Spouse Name</th>
        <th>Children's Names</th>
        <th>Title</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Phone</th>
        <th>Notes</th>
        <th>Total Attending</th>
        <th>Gift</th>
        <th>Clear</th>
        <th>Delete</th>
    </tr>
<?php

$query = "SELECT * FROM bradswedding ORDER BY lname";

$result = mysql_query($query);


while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	if($row['flag'] != 0)
		echo "<tr style='background-color: #fff65f;'>\n";
	else {
		if($row['who'] == 'Both')
			echo "<tr style='background-color: #d4ffcc;'>\n";
		elseif($row['who'] == 'Sara')
			echo "<tr style='background-color: #feccff;'>\n";
		elseif($row['who'] == 'Brad')
			echo "<tr style='background-color: #ccd9ff;'>\n";
		else
			echo "<tr>";
		}
			
	
	echo "<td>" . "<a href='edit.php?uid=" . $row['uid'] . "'><img src='edit.png' alt='Edit' /></a></td>\n";
	echo "<td>" . $row['lname'] . "</td>\n";
	echo "<td>" . $row['fname'] . "</td>\n";
	echo "<td>" . $row['sname'] . "</td>\n";
	echo "<td>" . $row['cname'] . "</td>\n";
	echo "<td>" . $row['title'] . "</td>\n";
	echo "<td>" . $row['address'] . "</td>\n";
	echo "<td>" . $row['city'] . "</td>\n";
	echo "<td>" . $row['state'] . "</td>\n";
	echo "<td>" . $row['zip'] . "</td>\n";
	echo "<td>" . $row['phone'] . "</td>\n";
	echo "<td>" . $row['notes'] . "</td>\n";
	echo "<td>" . $row['total'] . "</td>\n";
	echo "<td>" . $row['gift'] . "</td>\n";
	echo "<td>" . "<a href='clear.php?uid=" . $row['uid'] ."'><img src='clear.png' alt='Clear' /></a></td>\n";
	echo "<td>" . "<a href='delete.php?uid=" . $row['uid'] . "'><img src='drop.png' alt='Delete' /></a></td>\n";
	echo "</tr>\n";
}
?>


</table>
</body>
</html>
<?php include 'closedb.php'; ?>
