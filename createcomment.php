<?php
include("conff.php");
$userid=$_SESSION['id'];
$coment=$_POST['post'];
$postid=$_POST['id'];

	$coment= stripslashes($coment);
		$coment = htmlentities($coment);
		$coment = mysql_real_escape_string($coment);
if(isset($_SESSION['username']))		
	{$coment=$_SESSION["com"].'\n<br/>'.$_SESSION['username'].':'.'\n<br/>'.$coment;}
else
	{$coment=$_SESSION["com"].'\n<br/>'.'Guest'.':'.'\n<br/>'.$coment;}
	
$sql="UPDATE msg SET coment='$coment' WHERE id='$postid'";
$asd=mysql_query($sql);
header("Location:blog.php");
?>