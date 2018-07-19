<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Hello</title>
<link href="main.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="container">
	<div id="header">
		<div id="logo"><img src="bird.png" alt="Bird Slash" /><a href="index.php?page=home.php"><img src="name.png" alt="The Wedding of Sara Mantle and Bradley McNally" /></a></div>
      <div id="nav"><ul><li class="story"><a href="index.php?page=story.php">Our Story</a></li><li class="party"><a href="index.php?page=party.php">Wedding Party</a></li><li class="gift"><a href="index.php?page=gift.php">Gift Registry</a></li><li class="guestbook"><a href="index.php?page=guestbook.php">Guestbook</a></li><li class="contact"><a href="index.php?page=contact.php">Contact Us</a></li><li class="travel"><a href="index.php?page=travel.php">Travel &amp; Hotel Information</a></li>
		</ul>
   	    </div></div>
		<div id="master_content">
<div id="content">
   <?php 
   		if(isset($_REQUEST['page']))
			include($_REQUEST['page']);
		else
			include('home.php');
	?>
    </div>
	</div>
	<div id="footer"><img src="bg/footer.png" width="880" height="291" alt="" /></div>
</div>
</body>
</html>
