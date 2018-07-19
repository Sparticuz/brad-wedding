<?php include 'opendb.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Brad & Sara's Wedding List</title>
<style type="text/css">
<!--
img {border: 0px;}
-->
</style>
</head>
<body>
<h1>Edit Entry</h1>
<?php
$uid = $_REQUEST['uid'];
$query = "SELECT * FROM bradswedding WHERE uid=" . $uid;
$result = mysql_query($query);
$row = mysql_fetch_array($result, MYSQL_ASSOC)
?>
<form action="process.php?uid=<?php echo $uid; ?>" method="post">
<table border="1">
	<tr>
    	<td>Last Name:</td>
        <td><input name="lname" type="text" value="<?php echo $row['lname']; ?>"/></td>
    </tr>
    <tr>
        <td>First Name:</td>
        <td><input name="fname" type="text" value="<?php echo $row['fname']; ?>"/></td>
    </tr>
    <tr>
        <td>Spouse Name:</td>
        <td><input name="sname" type="text" value="<?php echo $row['sname']; ?>"/></td>
    </tr>
    <tr>
        <td>Children's Name:</td>
        <td><textarea name="cname" type="text"><?php echo $row['cname']; ?></textarea></td>
    </tr>
    <tr>
        <td>Title:</td>
        <td><input name="title" type="text" value="<?php echo $row['title']; ?>"/></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><input name="address" type="text" value="<?php echo $row['address']; ?>"/></td>
    </tr>
    <tr>
        <td>City:</td>
        <td><input name="city" type="text" value="<?php echo $row['city']; ?>"/></td>
    </tr>
    <tr>
        <td>State:</td>
        <td><input name="state" type="text" value="<?php echo $row['state']; ?>"/></td>
    </tr>
    <tr>
        <td>Zip:</td>
        <td><input name="zip" type="text" value="<?php echo $row['zip']; ?>"/></td>
    </tr>
    <tr>
        <td>Phone:</td>
        <td><input name="phone" type="text" value="<?php echo $row['phone']; ?>"/></td>
    </tr>
    <tr>
        <td>Notes:</td>
        <td><textarea name="notes" type="text"><?php echo $row['notes']; ?></textarea></td>
    </tr>
    <tr>
        <td>Total Attending:</td>
        <td><input name="total" type="text" value="<?php echo $row['total']; ?>"/>
			<input type="hidden" type="text" value="<?php echo $uid; ?>"/></td>
    </tr>
    <tr>
    <td>Gift:</td>
        <td><textarea name="gift" type="text"><?php echo $row['gift']; ?></textarea></td>
    </tr>
    <tr>
    	<td><input name="Cancel" type="button" onclick="javascript:window.location = 'index.php'" value="Cancel"/></td>
        <td><input name="Submit" type="submit" value="Submit"/></td>
    </tr>
</table>
</form>

</body>
</html>
<?php include 'closedb.php'; ?>