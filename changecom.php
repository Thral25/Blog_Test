<?php
include("conff.php");
$id=$_POST['rid'];
$coment=$_POST['coment'];

		$coment= stripslashes($coment);
		$coment = htmlentities($coment);
		$coment = mysql_real_escape_string($coment);
		
if(isset($id))
{
    $query="UPDATE msg SET coment='$coment'WHERE id='$id' ";
    $sql=mysql_query($query) ; 
    header("Location:blog.php");
}
?>