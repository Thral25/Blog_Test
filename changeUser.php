<?php

include ("conff.php");
$password = strip_tags($_POST['pass']);
$password = sha1($salt . $password);
$id=$_SESSION['id'];
$username=$_SESSION['username'];

$user1=strip_tags($_POST['user1']);
$user1 = stripslashes($user1);
$user1 = htmlentities($user1);
$user1 = mysql_real_escape_string($user1);

$user2=strip_tags($_POST['user2']);
$user2 = stripslashes($user2);
$user2 = htmlentities($user2);
$user2 = mysql_real_escape_string($user2);

$query = "SELECT * FROM users WHERE id='$id'";
$result = mysql_query($query);
$value=mysql_num_rows($result);
if($password==$_SESSION['password'])
{

	if($user1!=$user2) {
	echo '<script language="javascript">alert("The two usernames are not the same!!!");
		window.location = "profile.php";</script>';
	}
		 else if (isset($_POST['cmdeditu']))
		{
			/*update profile*/
			$sql=mysql_query("UPDATE users SET username='$user1' WHERE id='$id' ") or die(mysql_error());  
			$_SESSION['username']=$user1;
			header("Location:profile.php");
		}
		
			  else {echo "You found my cryptonite";}
}else
{
   echo '<script language="javascript">alert("The password is not correct!!!");
		window.location = "profile.php";</script>';
}
?>



