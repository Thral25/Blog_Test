<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
			<input type="submit" name="cmdlogout" value="Profile" />
			</form>
			<form name="logout-form" id="logout-form" method="post" action="logout.php">
			<input type="submit" name="cmdlogout" value="Logout" />
			</form>';
			}
		?>
		</div>
		
		<a href="index.php"><div id="b_home"></div></a>
		<a href="blog.php"><div id="b_blogs"></div></a>
		<div id="b_info"></div>
		
		<div id="post_cont">
			<div id="post">
				<div id="posthead"></div>
				<div id="postbody">
					Welcome to The Blog.</br>
					This site is created for study purposes. Please take your time to create your own account to have access to more features.
					We hope you are satisfied from the service we offer. Have fun.
				</div>
				<div id="postfoot"></div>
			</div>
		
		</div>
	
	</div>

</body>

</html>