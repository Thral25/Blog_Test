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
				
				<b>Current settings:</b><br/>
				<?php
				echo'<b>Name: </b>';
				echo $_SESSION['username'];
				echo'<br/><b>E-mail: </b>';
				echo $_SESSION['email'];
				?>
				<form name ="formuser" method="post" action="changeUser.php">
						<fieldset style="width:200px;padding-left:190px;padding-right:140px">
							<legend><b>Change USER</b></legend>
							<p>New Username:<br/><input type="text" name="user1" size="15" maxlength="20" value=""></p>
							<p>Confirm Username:<br/><input type="text" name="user2" size="15" maxlength="20" value=""></p>
							<p>Password:<br/><input type="password" name="pass" size="15" maxlength="10" value=""></p>
							<input tabindex="3"  type="submit" name="cmdeditu" value="Change"  style="height: 35px; width: 70px"/>
						</fieldset>
					</form>
					<form name ="formpass" method="post" action="changePass.php">
						<fieldset style="width:200px;padding-left:190px;padding-right:140px">
							<legend><b>Change PASS</b></legend>
							<p>Old Password:<br/><input type="password" name="opass" size="15" maxlength="10" value=""></p>
							<p>New Password:<br/><input type="password" name="npass" size="15" maxlength="10" value=""></p>
							<p>Confirm Password:<br/><input type="password" name="npass2" size="15" maxlength="10" value=""></p>
							<br/>	
							<input tabindex="3"  type="submit" name="cmdeditp" value="Change"  style="height: 35px; width: 70px"/>
						</fieldset>
					</form>
					<form name ="formemail" method="post" action="changeEmail.php">
						<fieldset style="width:200px;padding-left:190px;padding-right:140px">
							<legend><b>Change EMAIL</b></legend>
							<p>New Email:<br/><input type="text" name="email" size="15" maxlength="60" value=""></p>
							<p>Confirm Email:<br/><input type="text" name="email2" size="15" maxlength="60" value=""></p>
							<p>Password:<br/><input type="password" name="pass" size="15" maxlength="10" value=""></p>
							<br/>
							<input tabindex="3"  type="submit" name="cmdedite" value="Change"  style="height: 35px; width: 70px"/>
						</fieldset>
					</form>
					<form name ="formtheme" method="post" action="changeTheme.php">
						<fieldset style="width:200px;padding-left:190px;padding-right:140px">
							<legend><b>Change Theme</b></legend>
							<br/>
								<input type="radio" name="group1" value="1" checked> Green theme<br>
								<input type="radio" name="group1" value="2"> Red theme<br>
								<input type="radio" name="group1" value="3"> Blue theme
							<br/>
							<input tabindex="3"  type="submit" name="cmdeditt" value="Change"  style="height: 35px; width: 70px"/>
						</fieldset>
					</form>
				</div>
				<div id="postfoot"></div>
			</div>
		
		</div>
	
	</div>

</body>

</html>