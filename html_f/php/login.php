<?php
	$conn=new mysqli('localhost','root','','usp');
	$result=$conn->query("select * from login where user_name='".$_POST['user']."' and passcode='".$_POST['pass']."'");
	$check=mysqli_num_rows($result);
	if($check==1)
	{
		header("location:homepage.html");

	}
	else{
                header("location:index.html");
	}
$conn->close();

?>