<?php

session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOMEPAGE</title>
</head>
<link rel="stylesheet" href="css/homepage_teacher.css">
<link rel="stylesheet" href="css/animated.css">
<body>
	<div id="main_container">
		<div class="animated lightSpeedIn" id="upperbar">

			<a href="teacher_profile.php" target="mframe"><img id="dp" src="images/teacher.jpg"></a>
			
			<div id="linkbar">
				<ul>
					<li><a href="imgslider.html" target="mframe">HOME</a></li>
					<li><a href="news_t.php" target="mframe">NEWS FEED</a></li>
					<li><a href="explore.php" target="mframe">EXPLORE</a></li>
					<li><a href="support_teacher.php" target="mframe">SUPPORT</a></li>
				</ul>
			</div> <!-- div close for linkbar -->
			
			<div id="logout">
				<a href="index.php">Log out
				</a>
			</div> <!-- div close for logout -->

			<div id="notif">
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
			$_SESSION['depart']=$row['d_id'];
			$_SESSION['i']=$row['t_id'];
}

?>
				<a href="notifications_t.php" target="mframe"><?php
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
// $result=mysql_query("select * from notification where n_dep='".$_SESSION['department']."' and n_stid='".$_SESSION['name']."'");
$result=mysql_query("select * from notifications where dep_id='".$_SESSION['depart']."'and t_id='2' and reciver_id in ('".$_SESSION['i']."','0') ");
$check=mysql_num_rows($result);



				echo  "$check";
				?></a>
					
				<div class="animated pulse" id="notif_preview">	
				<ul>
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
// $result=mysql_query("select * from notification where n_dep='".$_SESSION['department']."' and n_stid='".$_SESSION['name']."'");
$result=mysql_query("select * from notifications where dep_id='".$_SESSION['depart']."'and t_id='2' and reciver_id in ('".$_SESSION['i']."','0') ");
$check=mysql_num_rows($result);
if($check==0)
{}
else
{

				while($row=mysql_fetch_array($result))
				{
				$a[]=$row['type'];
				}
				$c=count($a);
				if($c>4)
				{
				for($j=0;$j<4;$j++){
					echo $a[$j];
					echo '<br>';
				}
			}
			else
			{
				for($i=0;$i<$c;$i++)
				{
					echo $a[$i];
					echo '<br>';
				}

			}
			}	



			// 	if($check!=0)
			// 	{
			// 	for($i=0;$i<4;$i++)
			// 	{
			// 		echo mysql_result($result,$i);
			// 		echo '<br>';
			// 	}
			// }
					?>
										
				</ul>
				</div> <!-- div close for notif_preview -->
					
			</div> <!-- div close for notif -->

		</div> <!-- div close for upperbar -->

		<div class="animated zoomIn" id="frame">
			<iframe class="animated zoomIn" id=	"iframe" src="" name="mframe" frameborder="0" hscroll=no>
		</iframe>
		</div> <!-- div close for frame -->
	</div> <!-- div close for main_container -->
			
</body>
</html>