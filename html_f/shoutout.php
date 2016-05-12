<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SHOUT OUT</title>
</head>
<link rel="stylesheet" href="css/shoutout.css">
<link rel="stylesheet" href="css/animated.css">
<body >
	<form action="" method="POST">
	<br><br>
	<span  id="label1" class="label">Topic : &nbsp; </span>
		<select  name="category" id="ccat" class="cat">
			<option value="Academics">Academics</option>
			<option value="Hostel">Hostel</option>
		</select>
		<br><br>
	<span  id="label2" class="label">Department :  </span>
		<select  name="department" id="cdept" class="cat">
			<option value="101">101</option>
			<option value="102">102</option>
		</select>

<br><br>
	<span  id="label1" class="label">Type : &nbsp; </span>
		<select  name="type" id="ccat" class="cat">
			<option value="2">Teacher</option>
			<option value="1">Student</option>
		</select>
		<br><br>
		<span  id="label3" class="label">Shout Out : &nbsp; </span>
		<textarea  name="cta" id="cta" cols="30" rows="10" id="cta" placeholder="Start typing here...." required="yes"></textarea>
		<br><br><br><br>
		<input  type="submit" value="SHOUT IT" name="submit" id="button">
	</form>
</body>
<?php

if(isset($_POST['submit']))
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
$result=mysql_query("select * from teacher where T_name='".$_SESSION['name']."'");
	while($row=mysql_fetch_array($result))
{
		$val1=$row['T_name'];
		$val6=$row['t_id'];
			//mysql_close($connection);
}
$val2=$_POST['category'];
$val3=$_POST['department'];
$val4=$_POST['type'];
$val5=$_POST['cta'];



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
$result1=mysql_query("insert into notifications(type,description,dep_id,topic,sender_id,reciver_id,t_id) values ('shoutout','$val5','$val3','$val2','$val6','NULL','$val4')");

if(!$result1)
{
die("Database query failed:"/mysql_error());
}
 echo "<script type='text/javascript'>
    alert('Shoutout is sent')
</script>";

}


?>




</html>