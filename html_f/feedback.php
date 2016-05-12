<?php


session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FEEDBACK</title>
</head>
<link rel="stylesheet" href="css/feedback.css">
<link rel="stylesheet" href="css/animated.css">
<body>
	<form  action="" method="POST">
	<br><br>
	<span id="label">Category : &nbsp; </span>
		<select name="category" id="fbcat" >
			<option value="Academics" >Academics</option>
			<option value="Hostel" >Hostel</option>
			>
		</select>
		<br><br>
		<span id="label">Feedback : &nbsp; </span>
		<textarea name="fdbk" id="fdbk" cols="30" rows="10" id="fdbk" placeholder="Start typing here...." required="yes"></textarea>
		<!-- <span id="label">Feedback : </span><input type="text" name="fdbk" id="fdbk" required> -->
		<br><br><br><br>
		<input type="submit" value="SEND" name="submit" id="button">
	</form>






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
$result=mysql_query("select * from students where stud_name='".$_SESSION['name']."'");
	while($row=mysql_fetch_array($result))
{
			
			$val1=$row['stud_id'];
			$val4=$row['dep_id'];
			//mysql_close($connection);
}
	
	$val2=$_POST['category'];
	$val3=$_POST['fdbk'];



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
$result1=mysql_query("insert into notifications(type,description,dep_id,topic,sender_id,reciver_id,t_id) values ('feedback','$val3','$val4','$val2','$val1','1','3')");

if(!$result1)
{
die("Database query failed:"/mysql_error());

}
 echo "<script type='text/javascript'>
    alert('Feedback is sent')
</script>";
}

?>


</body>
</html>