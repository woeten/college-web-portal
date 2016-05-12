<?php  


session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>EXPLORE</title>
</head>
<link rel="stylesheet" href="css/explore_add.css">
<body>
	<div id="main_container">
		<form action="">
			<!-- ID TYPE IS THE STUDENT ID TYPE -->
			

			<ul id="label">
			<li><span id="lbl">FROM </span></li>
			<li><span id="lbl">TO </span></li>
			<li><span id="lbl">ROUTE ID </span></li>
			<li><span id="lbl">MAP </span></li>
			</ul>
			
			<ul id="txbo">
			<li><input type="text" required class="input"><br><br>  </li>
			<li><input type="text" required class="input"> <br><br>  </li>
			<li><input type="text" required class="input"><br><br>  </li>
			<li><input type="url" required class="input"><br><br>  </li>
			</ul>
			
			<input type="submit" name="create" value="ADD" id="button">
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
