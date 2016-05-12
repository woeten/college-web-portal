<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NEWS</title>
</head>
<link rel="stylesheet" href="css/news.css">
<link rel="stylesheet" href="css/animated.css">
<body>
	<div id="main_container">
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
			
			$_SESSION['department']=$row['d_id'];
			mysql_close($connection);
		}
			
?>
		
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
$result=mysql_query("select * from newsfeed where d_id='".$_SESSION['department']."'");
$check=mysql_num_rows($result);
if($check==0)
{
	echo'<div class="animated bounceInDown headbar">';
	echo '<span class="newsheading">NO NOTIFICATIONS</span>';
	echo '</div>';
}
?>		 <!-- div close for infobar -->
<?php   

	for ($i=0; $i <=$check; $i++) { 
		# code...
	while($row=mysql_fetch_array($result)){
				echo'<div class="animated bounceInDown headbar">';
		 echo '<span class="newsheading">'.$row['head'].'</span>';	
		echo'</div> <!-- div close for headbar -->';
		echo'<div class="animated bounceInDown infobar">';
		echo'	<span class="info">'.$row['description'].'</span>';
		echo"</div> <!-- div close for infobar -->";
	}
}
mysql_close($connection);
?>

 <!-- div close for infobar -->


	</div>  <!-- div close for main_container -->
</body>
</html>