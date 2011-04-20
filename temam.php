<?php
include("conff.php");

	$_SESSION['tema']-=1;
	header("Location:blog.php");
?>