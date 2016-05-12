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
				<!-- <li>Age  </li> -->
				<li>Sex  </li>
				<li>Address  </li>
				<li>Email </li>
				<li>Departmnent  </li>
				<li>Course  </li>
				<li>Batch  </li>
				<li>Semester  </li>
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
$result=mysql_query("select * from students where stud_name='".$_SESSION['name']."'");

while($row=mysql_fetch_array($result))
{
			echo	"<li>".$row['stud_name']."</li>";
			echo	"<li>".$row['stud_dob']."</li>";
				// echo "<li>";
				// 				$date1=$row['stud_dob'];
				// 				$date2=date('Y-m-d');
				// 				list($y1,$m1,$d1)=explode('-',$date1);
				// 				list($y2,$m2,$d2)=explode('-',$date2);
				// 				$m1=$m2-$m1;
				// 				if($m1<0 || ($m1==0 && $d2=$d1<0))
				// 				{
				// 					$y1++;
				// 				}
				// 				$a=$y2=$y1;
				// 				echo($a);
				// 			echo "</li>";
			echo	"<li>".$row['stud_gender']."  </li>";
			echo	"<li>".$row['address']."</li>";
			echo	"<li>".$row['stud_email']."</li>";
			$var=$row['dep_id'];

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
?>
	</li>
	<?php
			echo	"<li>".$row['c_id']."</li>";
			echo	"<li>".$row['batch']."</li>";
			echo	"<li>".$row['stud_semester']."</li>";
			
		}
			
?>

			</ul>

		</div>
</body>
</html>
