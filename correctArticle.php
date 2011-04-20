<?php

include("conff.php");

$id=$_POST['id'];
$title=$_POST['title'];
$article=$_POST['post'];
		$title = stripslashes($title);
		$title = htmlentities($title);
		$title = mysql_real_escape_string($title);
			$article = stripslashes($article);
			$article = htmlentities($article);
			$article = mysql_real_escape_string($article);
$commentUser=$_POST['group2'];
$commentVisit=$_POST['group1'];
if(isset($_POST['id']))
{
    $query="UPDATE msg SET body='$article',title='$title',unregcom='$commentVisit',regcom='$commentUser' WHERE id='$id' ";
    $sql=mysql_query($query) ; 
    header("Location:blog.php");
}
?>