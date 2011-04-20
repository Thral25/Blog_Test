<?php
include("conff.php");

$article=$_POST['post'];
$title=$_POST['title'];
		$article = stripslashes($article);
		$article = htmlentities($article);
		$article= mysql_real_escape_string($article);
				$title= stripslashes($title);
				$title = htmlentities($title);
				$title = mysql_real_escape_string($title);


$userid=$_SESSION['id'];
$commentUser=$_POST['group2'];
$commentVisitandUse=$_POST['group1'];
if($commentVisitandUse==1){$commentVisit=$_POST['group1'];$commentUser=1;}
$postcat=$_SESSION['tema'];
$date=date("Y-m-d");
$query = "SELECT * FROM msg WHERE id= '$id' ";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
$sql="INSERT INTO msg (body,userid,title,unregcom,regcom,cat,date) VALUES ('$article','$userid','$title','$commentVisit','$commentUser','$postcat','$date')";
$result=mysql_query($sql);
header("Location:blog.php");
?>