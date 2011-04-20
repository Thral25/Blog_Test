<?php

include ("conff.php");

$password = strip_tags($_POST['pass']);
$password = sha1($salt . $password);
$id=$_SESSION['id'];

$email1=strip_tags($_POST['email']);
$email1 = stripslashes($email1);
$email1 = htmlentities($email1);
$email1= mysql_real_escape_string($email1);



$email2=strip_tags($_POST['email2']);
$email2 = stripslashes($email2);
$email2 = htmlentities($email2);
$email2= mysql_real_escape_string($email2);
				
$query = "SELECT * FROM users WHERE id='$id'";
$result = mysql_query($query);
$value=mysql_num_rows($result);
if(!preg_match('/^[_A-z0-9-]+((\.|\+)[_A-z0-9-]+)*@[A-z0-9-]+(\.[A-z0-9-]+)*(\.[A-z]{2,4})$/', $_POST['email'])) 
        echo '<script language="javascript">alert("The entered email address is invalid !!!");
		window.location = "profile.php";</script>';
		else{
if($password==$_SESSION['password'])
{
if($email1!=$email2) { 
     echo '<script language="javascript">alert("The two emails are not the same!!!")
	   window.location = "profile.php";</script>';
}
     else if (isset($_POST['cmdedite']))
			{
				$sql=mysql_query("UPDATE users SET email='$email1' WHERE id='$id' ") or die(mysql_error());  
				$_SESSION['email']=$email1;
				header("Location:profile.php");

			}
		 else {echo "This is my cryptunite";}
}
else {echo '<script language="javascript">alert("The password is not correct!!!");
		window.location = "profile.php";</script>';
}
}
?>



