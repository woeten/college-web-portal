<?php

session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EXPLORE</title>
</head>
<link rel="stylesheet" href="css/explorev1.css">
<link rel="stylesheet" href="css/animated.css">
<body>
		

	<div id="main_container">
		<form class="animated bounceInLeft" action="" method="POST" id="form1">
		<span id="title">FROM :</span> 
		<select name="from" id="from">
			<option value="BLOCK1">BLOCK I</option>
			<option value="BLOCK2">BLOCK II</option>
			<option value="CENTRAL BLOCK">CENTRAL BLOCK</option>
		</select>
		<br><br>
		<span id="title"> &nbsp; &nbsp; &nbsp; TO :</span>
			<select name="to" id="to">
			<option value="BLOCK1">BLOCK I</option>
			<option value="BLOCK2">BLOCK II</option>
			<option value="CENTRAL BLOCK">CENTRAL BLOCK</option>
		</select>
		<br><br><br>
		<input  id="loc" type="submit" value="ROUTE" name="submit">
	</form>





	<div id="note" class="animated zoomIn">	<p>
		<span id="st">*</span>Please enter the name of the loaction you want to find and the same of the loaction you will begin from. Then click on <span id="gray">	"ROUTE" </span> button, to get the route info.
		</p></div>
	<div id="vr" class="animated zoomIn">	
	<!-- <iframe src=" -->
	<img id="route" src="images/<?php

if(isset($_POST['submit']))
{
	if($_POST['from']==$_POST['to'])
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
$result=mysql_query("select * from explore where r_id=0");
while($row=mysql_fetch_array($result))
{
			
			echo $row['map'];
			//mysql_close($connection);
		}
	}
	else if($_POST['from']=='BLOCK1' and $_POST['to']=='BLOCK2' or $_POST['from']=='BLOCK2' and $_POST['to']=='BLOCK1')
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
$result=mysql_query("select * from explore where r_id=1");
while($row=mysql_fetch_array($result))
{
			
			echo $row['map'];
			//mysql_close($connection);
		}
	}
	else if($_POST['from']=='BLOCK1' and $_POST['to']=='CENTRAL BLOCK' or $_POST['from']=='CENTRAL BLOCK' and $_POST['to']=='BLOCK1')
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
$result=mysql_query("select * from explore where r_id=2");
while($row=mysql_fetch_array($result))
{
			
			echo $row['map'];
			//mysql_close($connection);
		}
	}
	else if($_POST['from']=='BLOCK2' and $_POST['to']=='CENTRAL BLOCK' or $_POST['from']=='CENTRAL BLOCK' and $_POST['to']=='BLOCK2')
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
$result=mysql_query("select * from explore where r_id=3");
while($row=mysql_fetch_array($result))
{
			
			echo $row['map'];
			//mysql_close($connection);
		}


	}





}


?>"> <!-- frameborder="0"> --> 
<?php 
if(isset($_POST['submit']))
{	
	echo "<style> #route{ display:inline; } </style>";
}
	?>
</div>
	
	</iframe>
	</div>

</body>
</html>