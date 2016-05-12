<script>
	function msg
	{
		alert("ERROR MAN!");
	}
</script>


<?php

session_start();

?>
<?php
$connection=mysql_connect("localhost","root","");
if(!$connection)
{
	die("Database Connection failed:".mysql_error());
}
$db_select=mysql_select_db("pro",$connection);
if(!$db_select)
{
	die("Database selection failed:".mysql_error());
}
$a=$_POST['user'];
$b=$_POST['pass'];
$result=mysql_query("select * from login where user_name='".$a."'and passcode='".$b."'");
$check=mysqli_num_rows($result);
if($check==0)
{
	echo "msg()";
	//echo "<script type="."text/javascript"."> ShowMessage("."hello"."); </script>";
	//<script type="text/javascript">submitForm();</script>
	header("location:index.html");
	

	// alert("login fail");
	// $_SESSION['message']='login fail';
	// echo $_SESSION['message'];
}

	while($row=mysql_fetch_array($result))
{
	$var=$row['Type'];
	if($var==1)
	{
		$_SESSION['name']=$row['user_name'];
		
	header("location:homepage.php");
	}
	else if($var==2)
	{
		$_SESSION['name']=$row['user_name'];
	header("location:homepage_teacher.php");
	
	}
	else if($var==3)
	{
		$_SESSION['name']=$row['user_name'];
		header("location:homepage_admin.php");
	}

}




?>