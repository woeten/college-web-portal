<?php

session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NOTIFICATIONS</title>
</head>
<link rel="stylesheet" href="css/notif_a.css">
<link rel="stylesheet" href="css/animated.css">
<body>
// <?php
// 				$connection=mysql_connect("localhost","root","");
// if(!$connection)
// {
// 	die("Database Connection failed:".mysql_error());
// }
// $db_select=mysql_select_db("pro",$connection);
// if(!$db_select)
// {
// 	die("Database selection failed:".mysql_error());
// }
// $result=mysql_query("select * from admin where a_name='".$_SESSION['name']."'");
// while($row=mysql_fetch_array($result))
// {
// 			$_SESSION['i']=$row['id'];
// }

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
// $result=mysql_query("select * from notification where n_dep='".$_SESSION['department']."' and n_stid='".$_SESSION['name']."'");
$result=mysql_query("select * from notifications where  t_id='3' ");
$check=mysql_num_rows($result);
?>
<?php
	echo'<p class="animated flipInX"><span id="name">'.$_SESSION['name'].'</span>, You have <span id="number">'.$check.'</span> notifications waiting for you.</p>';
	echo'<ul>';
	for ($i=0; $i <$check ; $i++) { 
		while ($row=mysql_fetch_array($result)) {
			echo'<li class="animated rubberBand"> '.$row['description'].'<a href="read.php?a='.$row['description'].'">READ</a></li>';
}
			}
	echo'	</ul>';	
?>
</body>
</html>