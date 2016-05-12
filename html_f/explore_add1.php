<?php  


session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STUDENT</title>
</head>
<link rel="stylesheet" href="css/teacher.css">
<body>
	<div id="main_container">
		<form action="" method="POST">
			<!-- ID TYPE IS THE STUDENT ID TYPE -->
			FROM <input type="text" name="from" required class="input" required="yes"><br><br>
			TO <input type="text" name="to" required class="input"> <br><br>
			ROUTE ID <input type="text" name="route" required class="input"><br><br>
			MAP <input type="url" name="map" required class="input"><br><br>
			<input type="submit" name="submit" value="ADD">
		</form>
		<?php
	if(isset($_POST['submit']))
	{
		$val1=$_POST['from'];
		$val2=$_POST['to'];
		$val3=$_POST['route'];
		$val4=$_POST['map'];
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
$result1=mysql_query("insert into explore(from,to,map,r_id) values('$val1','$val2','$val4','$val3')");
echo "<script type='text/javascript'>
    alert('New map is stored')
</script>";
	}
	?>
	</div>
</body>
</html>
