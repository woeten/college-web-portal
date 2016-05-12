<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>reply</title>
</head>
<link rel="stylesheet" href="css/reply.css">
<body>
<?php
?>
<?php
$abc=$_GET['a'];
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
$result=mysql_query("select * from notifications where description='$abc'");
$check=mysql_num_rows($result);

for ($i=0; $i <$check ; $i++) { 
		while ($row=mysql_fetch_array($result)) {
			$_SESSION['sender']=$row['sender_id'];
	echo'<div id="from">';
		echo "from";
$connection1=mysql_connect("localhost","root","");
if(!$connection1)
{
	die("Database Connection failed:".mysql_error());
}
$db_select1=mysql_select_db("pro",$connection1);
if(!$db_select1)
{
	die("Database selection failed:".mysql_error());
}
$result1=mysql_query("select * from teacher where t_id='".$_SESSION['sender']."'");
while($row1=mysql_fetch_array($result1))
{
			echo $row1['T_name'];
}

$connection1=mysql_connect("localhost","root","");
if(!$connection1)
{
	die("Database Connection failed:".mysql_error());
}
$db_select=mysql_select_db("pro",$connection1);
if(!$db_select1)
{
	die("Database selection failed:".mysql_error());
}
$result1=mysql_query("select * from admin where id='".$_SESSION['sender']."'");
$check1=mysql_num_rows($result1);
while($row1=mysql_fetch_array($result1))
{
			echo $row1['a_name'];
}
$connection1=mysql_connect("localhost","root","");
if(!$connection1)
{
	die("Database Connection failed:".mysql_error());
}
$db_select=mysql_select_db("pro",$connection1);
if(!$db_select1)
{
	die("Database selection failed:".mysql_error());
}
$result1=mysql_query("select * from students where stud_id='".$_SESSION['sender']."'");
$check1=mysql_num_rows($result1);
while($row1=mysql_fetch_array($result1))
{
			echo $row1['stud_name'];
}
echo'</div>';

	echo'<div id="topic">';
		echo "type";
		echo $row['type'];
	echo'</div>';
	echo'<div id="topic">';
	echo "topic";
	echo $row['topic'];
echo'</div>';
	echo'<div id="msg">';
		echo "message";
		echo "here"; 
		echo $row['description'];
$_SESSION['lastdes']=$row['description'];
		
	echo'</div>';
}
}
?>
	<form action="" method="POST">
		<input type="submit" value="DISMISS" name="dismiss" id="dismiss">
	</form>
<?php


if(isset($_POST['dismiss']))
{

$connection2=mysql_connect("localhost","root","");
if(!$connection2)
{
	die("Database Connection failed:".mysql_error());
}
$db_select2=mysql_select_db("pro",$connection2);
if(!$db_select2)
{
	die("Database selection failed:".mysql_error());
}
$result2=mysql_query("delete from notifications where description='$abc'");
$connection3=mysql_connect("localhost","root","");
if(!$connection3)
{
	die("Database Connection failed:".mysql_error());
}
$db_select3=mysql_select_db("pro",$connection3);
if(!$db_select3)
{
	die("Database selection failed:".mysql_error());
}
$result3=mysql_query("select * from students where stud_name='".$_SESSION['name']."'");
$check3=mysql_num_rows($result3);
if($check3==1)
{
	// header("location:notifications.php");
	echo "<script type='text/javascript'>
	parent.location.reload(true);
</script>";
}
$connection3=mysql_connect("localhost","root","");
if(!$connection3)
{
	die("Database Connection failed:".mysql_error());
}
$db_select3=mysql_select_db("pro",$connection3);
if(!$db_select3)
{
	die("Database selection failed:".mysql_error());
}
$result3=mysql_query("select * from teacher where T_name='".$_SESSION['name']."'");
$check3=mysql_num_rows($result3);
if($check3==1)
{
	echo "<script type='text/javascript'>
	parent.location.reload(true);
</script>";

}
$connection3=mysql_connect("localhost","root","");
if(!$connection3)
{
	die("Database Connection failed:".mysql_error());
}
$db_select3=mysql_select_db("pro",$connection3);
if(!$db_select3)
{
	die("Database selection failed:".mysql_error());
}
$result3=mysql_query("select * from admin where a_name='".$_SESSION['name']."'");
$check3=mysql_num_rows($result3);
if($check3==1)
{
	// header("location:notifications_a.php");
	echo "<script type='text/javascript'>
	parent.location.reload(true);
</script>";

}
}

?>
</body>
</html>