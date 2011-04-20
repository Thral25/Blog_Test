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

<style type="text/css">

#b_add_post{
	position:absolute;
	left:-250px;
	top:160px;
	width:34px;
	height:34px;
	background-image:url('pics/add.png');
	z-index:3;
}
#b_add_com{
	position:absolute;
	bottom:-36px;
	width:34px;
	height:34px;
	background-image:url('pics/add.png');
	z-index:3;
}

#comhead{
	position:static;
	top:0px;
	margin-left:22px;
	width:389px;
	height:8px;
	background-image:url('pics/comhead.jpg');
	z-index:3;
}
#combody{
	position:static;
	margin-left:22px;
	padding-left:10px;
	top:8px;
	width:389px;
	background-image:url('pics/comback.jpg');
	background-repeat:repeat-y;
	z-index:3;
}
#comfoot{
	position:static;
	margin-left:22px;
	top:0px;
	width:389px;
	height:8px;
	background-image:url('pics/comfoot.jpg');
	z-index:3;
}

</style>

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
		<?php
		$temp=$_POST['id'];
		$asd=$_SESSION['tema'];
		
		if(isset($_SESSION['id']))
		{
			if($_SESSION['id']==$temp)
			{
			echo '<a href="addp.php"><div id="b_add_post"></div></a>';
			}
		}
			
		echo'<div id="post_cont">';
		
		if ($asd==5)
		{
			echo '<a href="temam.php"><button type="submit" name="id" value="p" style="width:74px; height:35px;">Previous</button></a>';
		}
		else If($asd!=1)
		{
			echo '<a href="temap.php"><button type="submit" name="id" value="n" style="width:74px; height:35px;">Next</button></a>';
			echo '<a href="temam.php"><button type="submit" name="id" value="p" style="width:74px; height:35px;">Previous</button></a>';
		}
		else
		{
			echo '<a href="temap.php"><button type="submit" name="id" value="n" style="width:74px; height:35px;">Next</button></a>';
		}
		
		echo'The current category is : ';
		if($asd==1)
		{echo 'Movies';}
		else if ($asd==2)
		{echo 'Music';}
		else if ($asd==3)
		{echo 'Games';}
		else if ($asd==4)
		{echo 'Sports';}
		else if ($asd==5)
		{echo 'Other';}
		
		echo'
		<form name="dpost-form" id="dpost-form" method="post" action="personalblogmonth.php"  style="width:200px;padding-left:190px">';
		echo'Month: ';
		echo'	<select name="months">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
				<option>9</option>
				<option>10</option>
				<option>11</option>
				<option>12</option>
			</select>
			<button type="submit" name="date" value="'; echo $temp; echo'" style="width:74px; height:35px;">Sort</button>
		</form>';
		
		$query="SELECT * FROM msg WHERE userid='$temp' AND cat='$asd' ";
		$result=mysql_query($query) or die(mysql_error());
	
		while($row=mysql_fetch_array($result))
		{ 
			echo'
				<div id="post">
					<div id="posthead"></div>
					<div id="postbody"><b>';
			echo 'Date:'.$row['date'].' Title: '.$row['title'];
			echo'</b><br/>';
			echo $row['body'];
			
				if(isset($_SESSION['id']))
				{
					if(($_SESSION['id']==$temp)||($_SESSION['admin']=='1'))
					{
						echo'<form name="apost-form" id="apost-form" method="post" action="changep.php"  style="width:200px;padding-left:190px">
								<br/>
								<button type="submit" name="id" value="'; echo $row['id']; echo'" style="width:74px; height:35px;">Change</button>
							 </form>
							 <form name="dpost-form" id="dpost-form" method="post" action="deletep.php"  style="width:200px;padding-left:190px">
								<button type="submit" name="delid" value="'; echo $row['id']; echo'" style="width:74px; height:35px;">Delete</button>
							 </form>';
							 
							 
					}
				}
					
			echo'	</div>
					<div id="postfoot"></div>
				</div>';
			echo'
				<div id="post">
				<br/>
					<div id="comhead"></div>
					<div id="combody">';
					
			echo $row['coment'];
			if((($row['unregcom']==1)&&(!isset($_SESSION['id']))) || (($row['regcom']==1)&&(isset($_SESSION['id']))))
			{
				echo'<form name="apost-form" id="apost-form" method="post" action="addc.php"  style="width:200px;padding-left:190px">
						<br/>
						<button type="submit" name="id" value="'; echo $row['id']; echo'" style="width:74px; height:35px;">Add comment</button>
					</form>';
					
			}
			
			
			if(isset($_SESSION['id']))
				{
					if($_SESSION['admin']=='1')
					{
						echo'
						<form name="comc-form" id="comc-form" method="post" action="changec.php"  style="width:200px;padding-left:190px">
						<button type="submit" name="cid" value="'; echo $row['id']; echo'" style="width:74px; height:35px;">Edit comments</button>
						</form>';
							 
					}
				}
			
			
			
			
			echo'	</div>
					<div id="comfoot"></div>
				</div>
				';
				
		}
		echo'</div>';
	
		?>
	</div>

</body>

</html>