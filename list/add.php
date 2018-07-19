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
<h1>Add Entry</h1>
<form action="process_add.php" method="post">
<table border="1">
	<tr>
    	<td>Who:</td>
        <td>
        <select name="who">
          <option value="Sara">Sara</option>
          <option value="Brad">Brad</option>
          <option value="Both">Both</option>
        </select>        </td>
    </tr>
	<tr>
    	<td>Last Name:</td>
        <td><input name="lname" type="text" value=""/></td>
    </tr>
    	<tr>

        <td>First Name:</td>
        <td><input name="fname" type="text" value=""/></td>
    </tr>
    	<tr>

        <td>Spouse Name:</td>
        <td><input name="sname" type="text" value=""/></td>
    </tr>
    	<tr>

        <td>Children's Name:</td>
        <td><textarea name="cname"></textarea></td>
    </tr>
    	<tr>

        <td>Title:</td>
        <td><input name="title" type="text" value=""/></td>
    </tr>	<tr>

        <td>Address:</td>
        <td><input name="address" type="text" value=""/></td>
    </tr>	<tr>

        <td>City:</td>
        <td><input name="city" type="text" value=""/></td>
    </tr>	<tr>

        <td>State:</td>
        <td><input name="state" type="text" value=""/></td>
    </tr>	<tr>

        <td>Zip:</td>
        <td><input name="zip" type="text" value=""/></td>
    </tr>	<tr>

        <td>Phone:</td>
        <td><input name="phone" type="text" value=""/></td>
    </tr>	<tr>

        <td>Notes:</td>
        <td><textarea name="notes" type="text"></textarea></td>
    </tr>	<tr>

        <td>Total Attending:</td>
        <td><input name="total" type="text" value=""/></td>
    </tr>
    <tr>
    <td>Gift:</td>
        <td><textarea name="gift" type="text"></textarea></td>
    </tr>
<tr>
    	<td><input name="Cancel" type="button" onclick="javascript:window.location = 'index.php'" value='Cancel'/></td>
        <td><input name="Submit" type="submit" value="Submit"/></td>
    </tr>
</table>
</form>

</body>
</html>