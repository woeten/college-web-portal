<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>location remove</title>
	<link rel="stylesheet" href="css/n_r.css">
</head>
<body>
	<div id="main_container">
		<form action="" method="POST">
			<span id="id">LOCATION ID</span> <input type="text" name="type">	
			<input type="submit" value="DELETE" name="submit" id="button" name="submit">				
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
$result=mysql_query("delete from explore where r_id ='".$_POST['type']."'");
echo "<script type='text/javascript'>
    alert('Map is deleted if id is correct')
</script>";
	}



  ?>
	</div>
</body>
</html>