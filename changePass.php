<?php

include "conff.php";

$password = strip_tags($_POST['opass']);
$password = sha1($salt . $password);
$id=$_SESSION['id'];

$newpassword=$_POST['npass'];
$newpassword2=$_POST['npass2'];
$newpassword= strip_tags($newpassword);
$newpassword = sha1($salt . $newpassword);
$newpassword2= strip_tags($newpassword2);
$newpassword2 = sha1($salt . $newpassword2);

$query = "SELECT * FROM users WHERE id='$id'";
$result = mysql_query($query);
$value=mysql_num_rows($result);
if($password==$_SESSION['password'])
{

	if($newpassword!=$newpassword2) {
	echo '<script language="javascript">alert("The two passwords are not the same!!!")
		window.location = "profile.php";</script>';
	}
		 else if (isset($_POST['cmdeditp']))
	{
		/*update profile*/
		
		$sql=mysql_query("UPDATE users SET password='$newpassword' WHERE id='$id' ") or die(mysql_error());  
		header("Location:profile.php");
		$_SESSION['password']=$newpassword;
	}
}
else  {echo '<script language="javascript">alert("The password is not correct!!!");
		window.location = "profile.php";</script>';
}

?>



