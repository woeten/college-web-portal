<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TEACHER</title>
</head>
<link rel="stylesheet" href="css/teacher1.css">
<body>
	<div id="main_container">
		<form action="" method="POST">
			<!-- ID TYPE IS THE STUDENT ID TYPE -->
			
		<ul id="label">
			<li><span id="lbl">TEACHER NAME </span></li>
			<li><span id="lbl">SUBJECT ID </span></li>
			<li><span id="lbl">DEPARTMENT ID </span></li>
			<li><span id="lbl">PHONE </span></li>
			<li><span id="lbl">EMAIL </span></li>
			<li><span id="lbl">GENDER</span> </li>
			<li><span id="lbl">D.O.B</span> </li>
			<li><span id="lbl">IMG </span></li>
			<li><span id="lbl">USER ID </span></li>
			<li><span id="lbl">PASSWORD </span></li>


		</ul>
		<ul id="txbo">
			<li><input type="text" required class="input" name="t_name"><br><br></li>
			<li><input type="number" required class="input" name="sub_id">	<br><br></li>
			<li><input type="number" required class="input" name="d_id"><br><br></li>
			<li><input type="number" required class="input" name="phn"><br><br></li>
			<li><input type="email" required class="input" name="email"> <br><br></li>
			<li><br><br><input type="radio" name="sex" value="male">MALE<br><br> </li>
			<li><input type="radio" name="sex" value="female">FEMALE<br><br></li>
			<li><input type="date" required class="input" name="dob"><br><br></li>
			<li><input type="text" required class="input" name="img"> <br><br></li>
			<li><input type="text" required class="input" name="login"><br><br></li>
			<li><input type="text" required class="input" name="pass"><br><br></li>
		</ul>
		<br><br>
			<input type="submit" name="submit" value="ADD" id="button">
		</form>
		</form>
<?php
if(isset($_POST['submit']))
{
$val1=$_POST['t_name'];
$val2=$_POST['d_id'];
$val3=$_POST['sub_id'];
$val4=$_POST['phn'];
$val5=$_POST['email'];
$val6=$_POST['sex'];
$val7=$_POST['dob'];
$val8=$_POST['login'];
$val9=$_POST['pass'];
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
$result1=mysql_query("insert into teacher (T_name,d_id,subj_id,ph_no,T_email,gender,doj,login_code,password) values ('$val1','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9')");
if(!$connection1)
{
	die("Database Connection failed:".mysql_error());
}
$db_select1=mysql_select_db("pro",$connection1);
if(!$db_select1)
{
	die("Database selection failed:".mysql_error());
}
$result1=mysql_query("insert into login (user_name,passcode,Type) values ('$val1','$val9','$val8')");
echo "<script type='text/javascript'>
    alert('Teacher details are stored')
</script>";
}


?>




	</div>
</body>
</html>
