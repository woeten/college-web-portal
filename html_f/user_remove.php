<?php

session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>user remove</title>
	<link rel="stylesheet" href="css/u_r1.css">
</head>
<body>
	<div id="main_container">
		<form action="" method="POST">
			<span><input type="radio" name="type" id="student" value="student" required> <label for="student">STUDENT</label></span><br><br>
			<span><input type="radio" name="type" id="teacher" value="teacher"><label for="teacher">TEACHER</label> </span><br><br>
			<span id="id" >ID</span> <input type="text" name="id" required>	<br><br>
			<input type="submit" value="DELETE" name="submit" id="button">				
		</form>


<?php
if(isset($_POST['submit']))
{
	if($_POST['type']=='student')
	{
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
$result=mysql_query("delete from students where stud_id='".$_POST['id']."'");
echo "<script type='text/javascript'>
    alert('Student details are removed if id is correct')
</script>";

}
elseif ($_POST['type']=='teacher') {
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
$result=mysql_query("delete from teacher where t_id='".$_POST['id']."'");
echo "<script type='text/javascript'>
    alert('Teacher details are removed if id is correct')
</script>";
}
else
{

}



	}

	
?>
	</div>
</body>
</html>