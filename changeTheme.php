<?php

include ("conff.php");

$id=$_SESSION['id'];

$theme=$_POST['group1'];

if (isset($_POST['cmdeditt']))
{
	$sql=mysql_query("UPDATE users SET theme='$theme' WHERE id='$id' ") or die(mysql_error());  
	$_SESSION['theme']=$theme;
	header("Location:profile.php");
	
}

?>



