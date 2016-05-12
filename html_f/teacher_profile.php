<?php

session_start()
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PROFILE</title>
</head>
<link rel="stylesheet" type="text/css" href="css/profile.css">
<link rel="stylesheet" href="css/animated.css">
<body>
		<div  id="main_container">	
			<ul class="animated bounceInLeft" id="title">
				<li>Name  </li>
				<li>Date Of Birth  </li>
				<li>Sex  </li>
				<li>Email </li>
				<li>Departmnent  </li>
				</ul>



			<ul class="animated bounceInRight" id="info">
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
$result=mysql_query("select * from teacher where T_name='".$_SESSION['name']."'");

while($row=mysql_fetch_array($result))
{

				echo	"<li>".$row['T_name']."</li>";
				echo	"<li>".$row['doj']."</li>";
				echo	"<li>".$row['gender']."</li>";
				echo	"<li>".$row['T_email']."</li>";
				$var=$row['d_id'];

				?>	<li><?php

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
$result1=mysql_query("select * from departments where dept_id='".$var."'");
while($row1=mysql_fetch_array($result1))
{
		echo $row1['dept_name'];

}


				?></li>
				<?php  } ?>
				
		
			


			</ul>

		</div>
</body>
</html>
