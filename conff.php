<?php

session_start();
if(!isset($_SESSION['tema'])){$_SESSION['tema']=1;}
$salt = "GIF#&IFiy82fgsgfu6&%43";
$dbcon=mysql_connect("localhost","root","");
if(!$dbcon)
{
	die("cannot conect");
}

$db_select=mysql_select_db("blog",$dbcon);

if(!$db_select)
{
	die("cant connect:".mysql_error);
}

?>