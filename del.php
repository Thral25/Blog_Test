<?php
include("conff.php");

$id=$_POST['did'];

$query="DELETE FROM users WHERE id='$id'";
$query2="DELETE FROM msg WHERE userid='$id'";
$result1=mysql_query($query);
$result2=mysql_query($query2);
header("Location:index.php");

?>