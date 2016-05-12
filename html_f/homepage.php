<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOMEPAGE</title>
</head>
<link rel="stylesheet" href="css/homepage.css">
<link rel="stylesheet" href="css/animated.css">
<body>
	<div id="main_container">
		<div class="animated lightSpeedIn" id="upperbar">

			<a href="profile.php" target="mframe"><img id="dp" src="images/<?php
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
			
			$_SESSION['image']=$row['stu_img'];
			//mysql_close($connection);
		}

		echo $_SESSION['image'];
			
?>"></a>
			
			<div id="linkbar">
				<ul>
					<li><a href="imgsilder1.html" target="mframe">HOME</a></li>
					<li><a href="news.php" target="mframe">NEWS FEED</a></li>
					<li><a href="explore.php" target="mframe">EXPLORE</a></li>
					<li><a href="support.php" target="mframe">SUPPORT</a></li>
				</ul>
			</div> <!-- div close for linkbar -->
			
			<div id="logout">
				<a href="index.php">Log out</a>
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
$result=mysql_query("select * from students where stud_name='".$_SESSION['name']."'");
while($row=mysql_fetch_array($result))
{
			$_SESSION['department']=$row['dep_id'];
			$_SESSION['id']=$row['stud_id'];
}

?>

				<a href="notifications.php" target="mframe">
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
$result=mysql_query("select * from notifications where dep_id='".$_SESSION['department']."'and t_id='1' and reciver_id in ('".$_SESSION['id']."','0') ");
$check=mysql_num_rows($result);



				echo  "$check";
				?>


				</a>
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
$result=mysql_query("select * from notifications where dep_id='".$_SESSION['department']."'and t_id='1' and reciver_id in ('".$_SESSION['id']."','0') ");
$check=mysql_num_rows($result);
if($check==0)
{

}
else{

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

			}}
				?>
	
			</ul>
				</div> <!-- div close for notif_preview -->
		
				


			</div> <!-- div close for notif -->

		</div> <!-- div close for upperbar -->

		<div class="animated zoomIn" id="frame">
			<iframe class="animated zoomIn" id=	"iframe" src="imgsilder1.html" name="mframe" seamless="seamless" frameborder="0" >
		</iframe>
		</div> <!-- div close for frame -->
	</div> <!-- div close for main_container -->
			
</body>
</html>