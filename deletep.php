<?php
include("conff.php");
$tempid=$_POST['delid'];

$query="DELETE FROM msg WHERE id='$tempid'";
$asd=mysql_query($query);

header("Location:blog.php");

?>