<?php 

session_start();
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NEWS</title>
</head>
<link rel="stylesheet" href="css/news_add1.css">
<body>
	<div id="main_container">
		<form action="" method="POST">
			<!-- ID TYPE IS THE STUDENT ID TYPE -->

			<ul id="label">
			<li><span id="lbl">NEWSFEED ID </span></li>
			<li><span id="lbl">DEPARTMENT ID </span></li>
			<li><span id="lbl">NEWS HEADING </span></li>
			<li><span id="lbl">NEWS INFO </span></li>
			</ul>
			
			<ul id="txbo">
			<li><input type="number" required class="input" name="n_id"><br><br>  </li>
			<li><input type="text" required class="input" name="d_id"> <br><br>  </li>
			<li><input type="text" required class="input" name="n_head"><br><br>  </li>
			<li><input type="text" required class="input" name="n_info"><br><br>  </li>
			</ul>

			<input type="submit" name="submit" value="ADD" id="button">
		</form>
<?php
	if(isset($_POST['submit']))
	{
		$val1=$_POST['n_id'];
		$val2=$_POST['d_id'];
		$val3=$_POST['n_info'];
		$val4=$_POST['n_head'];
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
$result1=mysql_query("insert into newsfeed (newsfeed_id,d_id,description,head) values('$val1','$val2','$val3','$val4')");
echo "<script type='text/javascript'>
    alert('Newsfeed is added')
</script>";
	}

?>



	</div>
</body>
</html>
