<?php
include("conff.php");

if (!isset($_SESSION['username']))
{
	// user is not logged in.
	if (isset($_POST['cmdlogin']))
	{
		$user = strip_tags($_POST["username"]);
		$user = stripslashes($user);
		$user = htmlentities($user);
		$user = mysql_real_escape_string($user);
		$pass = strip_tags($_POST["password"]);
		$pass = sha1($salt . $pass);
		
		$query = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
		$result = mysql_query($query);
		$value=mysql_num_rows($result);
		if ( $value!='1')
		{
			echo '<script language="javascript">alert("The password or username is not correct!!!");
				window.location = "loginn.php";</script>';
		} else {
			// Login was successfull
			$row = mysql_fetch_array($result);
			$_SESSION['id'] = $row['id'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['theme'] = $row['theme'];
			$_SESSION['username'] = $user;
			$_SESSION['password']=$row['password'];
			$_SESSION['admin']=$row['perm'];
			$_SESSION['tema']=1;
		header("Location:index.php");
		}
	} else {
		include ("loginn.php");
	}
 
} else {
	header("Location:index.php");
}
?>

