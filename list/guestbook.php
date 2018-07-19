<form id="guestbook" name="guestbook" method="post" action="guestbook_process.php">
  <table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
    <tr>
      <td colspan="2"><span style="font-weight:bold;">Sign our Wedding guestbook</span></td>
    </tr>
    <tr>
      <td width="100">Name</td>
<td width="294"><input name="name" type="text" id="name" size="40" /></td>
    </tr>
    <tr>
      <td>Email</td>
<td><input name="email" type="text" id="email" size="40" /></td>
    </tr>
    <tr>
      <td valign="top">Comment</td>
<td><textarea name="comment" cols="40" rows="3" id="comment"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>


<?php

$host=""; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name=""; // Database name
$tbl_name=""; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect server ");
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
$result=mysql_query($sql);

while($rows=mysql_fetch_array($result)){
?>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="1" style="border-top: 1px solid #a67c52; margin-top: 10px;">
  <tr>
    <td width="100">Name</td>
<td width="285"><? echo stripslashes($rows['name']); ?></td>
  </tr>
  <tr>
    <td valign="top">Comment</td>
<td><? echo stripslashes($rows['comment']); ?></td>
  </tr>
</table>
<?
}
mysql_close(); //close database
?>