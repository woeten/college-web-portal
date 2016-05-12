<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>COMPLAINT</title>
</head>
<link rel="stylesheet" href="css/complaint.css">
<link rel="stylesheet" href="css/animated.css">
<body >
	<form action="" method="POST">
	<br><br>
	<span  id="label1" class="label">Category : &nbsp; </span>
		<select  name="Category" id="ccat" class="cat">
			<option value="Academics">Academics</option>
			<option value="Hostel">Hostel</option>
			
		</select>
		<br><br>
	<span  id="label2" class="label">Department :  </span>
		<select  name="Department" id="cdept" class="cat">
			<option value="101">101</option>
			<option value="102">102</option>
			
		</select>
		<br><br>

		<!-- <div id="uid"><span class="label" >Teacher &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</span> <input type="text" name="teach"   id="cdept" class="cat" >	</div><br><br>
 -->


		<span  id="label3" class="label">Complaint : &nbsp; </span>
		<textarea  name="cta" id="cta" cols="30" rows="10" id="cta" placeholder="Start typing here...." required="yes"></textarea>
		<br><br><br><br>
		<input  type="submit" value="SEND" name="submit" id="button">
	</form>
	<?php

if(isset($_POST['submit']))
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
$result2=mysql_query("select * from students where stud_name='".$_SESSION['name']."'");
	while($row2=mysql_fetch_array($result2))
{
			
			$val1=$row2['stud_id'];
			//mysql_close($connection);
}

// 	$connection=mysql_connect("localhost","root","");
// if(!$connection)
// {
// 	die("Database Connection failed:".mysql_error());
// }
// $db_select=mysql_select_db("pro",$connection);
// if(!$db_select)
// {
// 	die("Database selection failed:".mysql_error());
// }
// $result=mysql_query("select * from teacher where T_name='".$_POST['teach']."'");
// $check=mysql_num_rows($result);
// if ($check==0)
// {
// 	echo "Wrong user";

// }
// else
// {
// while($row=mysql_fetch_array($result))
// {
// 		$val5=$row['T_name'];
// 			//mysql_close($connection);
// }

$val2=$_POST['Category'];
$val3=$_POST['Department'];
$val4=$_POST['cta'];




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
$result1=mysql_query("insert into notifications(type,description,dep_id,topic,sender_id,reciver_id,t_id) values ('complaint','$val4','$val3','$val2','$val1','NULL','2')");

if(!$result1)
{
die("Database query failed:"/mysql_error());
}
 echo "<script type='text/javascript'>
    alert('complaint is sent')
</script>";
}


?>
</body>
</html>