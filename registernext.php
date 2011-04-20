<?php
include ("conff.php");
//test user
$test=$_POST["user"];

	if(preg_match("([A-Za-z0-9_])",$test))
	{

		$query="SELECT * FROM users WHERE username='$test'";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);

		if($num==0)
		{
			//email
			$em=$_POST["email"];
			$query2="SELECT * FROM users WHERE email='$em'";
			$result2=mysql_query($query2);
			$num2=mysql_num_rows($result2);

	   if($num2==0)
		{
		  if(($_POST["pass"]==$_POST["pass2"]&&($_POST["email"]==$_POST["email2"])))
			{

				//HACKERS
				$name=strip_tags($_POST["user"]);
				$email=strip_tags($_POST["email"]);
				$pass=strip_tags($_POST["pass"]);

				$name = stripslashes($name);
				$name = htmlentities($name);
				$name = mysql_real_escape_string($name);

				$email = stripslashes($email);
				$email = htmlentities($email);
				$email = mysql_real_escape_string($email);

				$pass = sha1($salt . $pass);
			if(!preg_match('/^[_A-z0-9-]+((\.|\+)[_A-z0-9-]+)*@[A-z0-9-]+(\.[A-z0-9-]+)*(\.[A-z]{2,4})$/', $_POST['email'])) 
				echo '<script language="javascript">alert("The entered email address is invalid !!!");
				window.location = "Reg.php";</script>';
			else {
				//INSERT DATA
				$sql="INSERT INTO users  (username, email, password, theme) VALUES ('$name','$email','$pass','1')";
				$result=mysql_query($sql);
				header("Location:registrationAcc.php");
			 }
			}
		else
		{echo '<script language="javascript">alert("Wrong username or password!!!");
				window.location = "Reg.php";</script>';
		}
}

}else
{
echo '<script language="javascript">alert("Equal names!!!");
				window.location = "Reg.php";</script>';
/*header("Location:nameinuse.html");*/
}


}else
{
echo '<script language="javascript">alert("Invalid name!!!");
				window.location = "Reg.php";</script>';
/*header("Location:invalidname.html");*/
}


?>