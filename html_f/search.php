<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>search</title>
</head>
<link rel="stylesheet" href="css/search.css">
<link rel="stylesheet" type="text/css" href="css/profile.css">
<body>
	<div id="main_container">
	<p>You can find a record stored in the database by referring to their primary key [ REFERENCE ID ] .</p>
		<form action="" method="POST">
			<input type="search" name="id" id="search" required placeholder="Enter ID here..."><br><br>
			<input type="radio" required name="id_type" id="type1" value="1"><span ><label for="type1" class="label1">STUDENT ID  </label></span><br><br>
			<input type="radio" required name="id_type" id="type2" value="2"><span ><label for="type2" class="label1">TEACHER ID</label> </span><br><br>
			<input type="radio" required name="id_type" id="type4" value="4"><span ><label for="type4" class="label1">ROUTE ID </label></span><br><br>
			<input type="radio" required name="id_type" id="type5" value="5"><span ><label for="type5" class="label1">NEWSFEED ID </label></span><br><br>
			<!-- <input type="checkbox" required name="cb" id="cb"><span id="tnc"><label for="cb">I have verified the option</label>  </span><br><br> -->
			<input type="submit" name="submit" id="find" value="FIND" required>
		</form>
		


		<div id="result"> <span id="res">CHECK RESULT HERE: </span>
			<?php
if(isset($_POST['submit']))
{
	$_SESSION['val1']=$_POST['id'];
	$_SESSION['val']=$_POST['id_type'];
	

	if($_SESSION['val']==1)
	{

		echo '<div  id="main_container">';	
		echo	'<ul class="animated bounceInLeft" id="title">';
		echo	'	<li>Name  </li>';
		echo		'<li>Date Of Birth  </li>';
		echo	'	<!-- <li>Age  </li> -->';
		echo		'<li>Sex  </li>';
		echo		'<li>Address  </li>';
		echo		'<li>Email </li>';
		echo		'<li>Departmnent  </li>';
		echo		'<li>Course  </li>';
		echo		'<li>Batch  </li>';
		echo		'<li>Semester  </li>';
		echo	'</ul>';



		echo	'<ul class="animated bounceInRight" id="info">';


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
$result=mysql_query("select * from students where stud_id='".$_SESSION['val1']."'");
$check=mysql_num_rows($result);
if($check==0)
{
	header("location:search.php");
}
else
{
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

			echo'	<li>';
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

	echo '</li>';
	
			echo	"<li>".$row['c_id']."</li>";
			echo	"<li>".$row['batch']."</li>";
			echo	"<li>".$row['stud_semester']."</li>";
			
		}
			


			echo'</ul>';

		echo'</div>';


	}
}
	else if($_SESSION['val']==2 )
	{
		echo    '<div  id="main_container">';
		echo	'<ul class="animated bounceInLeft" id="title">';
		echo		'<li>Name  </li>';
		echo		'<li>Date Of Birth  </li>';
		echo		'<li>Sex  </li>';
		echo		'<li>Email </li>';
		echo		'<li>Departmnent  </li>';
		echo		'</ul>';



		echo	'<ul class="animated bounceInRight" id="info">';
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
$result=mysql_query("select * from teacher where t_id='".$_SESSION['val1']."'");
$check=mysql_num_rows($result);
if($check==0)
{
	header("location:search.php");
}
else
{
while($row=mysql_fetch_array($result))
{

				echo	"<li>".$row['T_name']."</li>";
				echo	"<li>".$row['doj']."</li>";
				echo	"<li>".$row['gender']."</li>";
				echo	"<li>".$row['T_email']."</li>";
				$var=$row['d_id'];

				echo'	<li>';

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


				echo '</li>';
				  } 
				
		
			


			echo '</ul>';

		echo '</div>';

	}
}
	else if($_SESSION['val']==3 )
	{
		echo    '<div  id="main_container">';
		echo	'<ul class="animated bounceInLeft" id="title">';
		
		echo		'<li>Name  </li>';
		echo		'<li>id </li>';
		echo		'</ul>';
		echo	'<ul class="animated bounceInRight" id="info">';
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
$result=mysql_query("select * from admin where id='".$_SESSION['val1']."'");
$check=mysql_num_rows($result);
if($check==0)
{
	header("location:search.php");
}
else
{

while($row=mysql_fetch_array($result))
{
	
				echo	"<li>".$row['a_name']."</li>";
				echo	"<li>".$row['id']."</li>";
				

	}

	}
}
	else if($_SESSION['val']==4)
	{
			echo    '<div  id="main_container">';
		echo	'<ul class="animated bounceInLeft" id="title">';
		echo		'<li>ID  </li>';
		echo		'<li>From  </li>';
		echo		'<li>To </li>';
		echo		'<li>Map</li>';
		echo		'</ul>';
		echo	'<ul class="animated bounceInRight" id="info">';
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
$result=mysql_query("select * from explore where r_id='".$_SESSION['val1']."'");
$check=mysql_num_rows($result);
if($check==0)
{
	header("location:search.php");
}
else
{

while($row=mysql_fetch_array($result))
{
	
				echo	"<li>".$row['r_id']."</li>";
				echo	"<li>".$row['from']."</li>";
				echo	"<li>".$row['to']."</li>";
				echo	"<li>".$row['map']."</li>";

	}
	}
}
	else if($_SESSION['val']==5 )
	{
		echo    '<div  id="main_container">';
		echo	'<ul class="animated bounceInLeft" id="title">';
		echo		'<li>Newsfeed id  </li>';
		echo		'<li>Department id  </li>';
		echo		'<li>date of newsfeed  </li>';
		echo		'<li>description </li>';
		echo		'<li>head </li>';
		echo		'</ul>';
		echo	'<ul class="animated bounceInRight" id="info">';
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
$result=mysql_query("select * from newsfeed where newsfeed_id='".$_SESSION['val1']."'");
$check=mysql_num_rows($result);
if($check==0)
{
	header("location:search.php");
}
else
{
while($row=mysql_fetch_array($result))
{
	echo	"<li>".$row['newsfeed_id']."</li>";
				echo	"<li>".$row['d_id']."</li>";
				echo	"<li>".$row['dofnewsfeed']."</li>";
				echo	"<li>".$row['description']."</li>";
				echo	"<li>".$row['head']."</li>";
}
	}
}
}
	


		?>
	</div>
		
	</div>
</body>
</html>