﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include("conff.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>THE Blog</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<?php

if(isset($_SESSION['theme']))
	{
	if($_SESSION['theme']=='1')
		{echo'<link rel="stylesheet" type="text/css" href="index.css" />';
		echo'<!--[if IE 6]>
<link type="text/css" rel="stylesheet" type="text/css" href="index.css" />

#repeated_back{position:absolute;}

</style>
<![endif]-->';}
	if ($_SESSION['theme']=='2')
		{echo'<link rel="stylesheet" type="text/css" href="index2.css" />';
		echo'<!--[if IE 6]>
<link type="text/css" rel="stylesheet" type="text/css" href="index2.css" />

#repeated_back{position:absolute;}

</style>
<![endif]-->';}
	if ($_SESSION['theme']=='3')
		{echo'<link rel="stylesheet" type="text/css" href="index3.css" />';
		echo'<!--[if IE 6]>
	<link type="text/css" rel="stylesheet" type="text/css" href="index3.css" />

		#repeated_back{position:absolute;}

			</style>
<![endif]-->';
		}
	}
else
	{echo'<link rel="stylesheet" type="text/css" href="index.css" />';}
?>
</head>
<body>

	<div id="repeated_back"></div>
	
	<div id="center">
	
		<div id="logo"></div>
		<div id="head"></div>
		
		
		
		<div id="log">
		<?php
		
		if(!isset($_SESSION['username']))
			{
			echo'
			<a href="loginn.php"><div id="b_log"></div></a>';
			}
			else
			{
			echo $_SESSION['username'];
			echo'
			<br/>
			<form name="profile-form" id="profile-form" method="post" action="profile.php">
			<input type="submit" name="cmdlogout" value="Profile" style="height: 25px; width: 55px" />
			</form>
			<form name="logout-form" id="logout-form" method="post" action="logout.php">
			<input type="submit" name="cmdlogout" value="Logout" style="height: 25px; width: 55px"/>
			</form>';
			}
		?>
		</div>
		
		<a href="index.php"><div id="b_home"></div></a>
		<a href="blog.php"><div id="b_blogs"></div></a>
		<a href="info.php"><div id="b_info"></div></a>
		
		<div id="post_cont">
			<div id="post">
				<div id="posthead"></div>
				<div id="postbody">
					<form name="input" action="createpost.php" method="post">
						<p><b>Title:</b><br/><input type="text" name="title" size="15" maxlength="40" value=""></p>
						Post: <br/><textarea name="post" rows="20" cols="74" wrap="virtual"/></textarea>
						<br/>
						
						
						
						Permit visitors and users to comment this post:
						<input type="radio" name="group1" value="1" checked> Yes
						<input type="radio" name="group1" value="0"> No<br/>
						Permit only users to comment this post:
						<input type="radio" name="group2" value="1" checked> Yes
						<input type="radio" name="group2" value="0"> No<br/>
						<input type="submit" value="Post" style="height: 35px; width: 70px"/>
						
					</form>
				</div>
				<div id="postfoot"></div>
			</div>
		
		</div>
	
	</div>

</body>

</html>