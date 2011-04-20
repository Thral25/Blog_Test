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
		<div id="log"></div>
		
		<a href="index.php"><div id="b_home"></div></a>
		<a href="blog.php"><div id="b_blogs"></div></a>
		<a href="info.php"><div id="b_info"></div></a>
		
		
		<div id="post_cont">
			<div id="post">
				<div id="posthead"></div>
				<div id="postbody">
					<form name="login-form" id="login-form" method="post" action="login.php">
						<fieldset style="width:200px;padding-left:170px;padding-right:160px">
						<legend><b>Please login:</b></legend>
						<dl>
							<dt>
								<label title="Username">Username:
								<input tabindex="1" name="username" type="text" maxlength="50" id="username" />
								</label>
							</dt>
						</dl>
						<dl>
							<dt>
								<label title="Password">Password:
								<input tabindex="2"  name="password" type="password" maxlength="15" id="password" />
								</label>
							</dt>
						</dl>
						<dl>
							<dt>
								<label title="Submit">
								<br/>
								<input tabindex="3"  type="submit" name="cmdlogin" value="Login"  style="height: 35px; width: 70px"/>
								<a href="Reg.php">Register</a>
								</label>
							</dt>
						</dl>
						</fieldset>
					</form>
				</div>
				<div id="postfoot"></div>
			</div>
			
			
		
		</div>
	
	</div>

</body>

</html>