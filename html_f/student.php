<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>STUDENT</title>
</head>
<link rel="stylesheet" href="css/student.css">
<body>
	<div id="main_container">
		<form action="" method="POST">
			<!-- ID TYPE IS THE STUDENT ID TYPE -->

		<ul id="label">
			<li><span id="lbl">STUDENT ID </span></li>
			<li><span id="lbl">COURSE ID </span></li>
			<li><span id="lbl">STUDENT NAME </span></li>
			<li><span id="lbl">DEPARTMENT ID </span></li>
			<li><span id="lbl">PHONE </span></li>
			<li><span id="lbl">ADDRESS </span></li>
			<li><span id="lbl">EMAIL </span></li>
			<li><span id="lbl">GENDER</span> </li>
			<li><span id="lbl">SEMESTER</span> </li>
			<li><span id="lbl">D.O.B</span> </li>
			<li><span id="lbl">IMG </span></li>
			<li><span id="lbl">USER ID </span></li>
			<li><span id="lbl">PASSWORD </span></li>
			<li><span id="lbl">BATCH </span></li>


		</ul>
		<ul id="txbo">
			<li><input type="number" required class="input" name="Std_id" ><br><br></li>
			<li><input type="number" required class="input" name="cours_id">	<br><br></li>
			<li><input type="text" required class="input" name="st_name"><br><br></li>
			<li><input type="number" required class="input" name="dep_id"><br><br></li>
			<li><input type="number" required class="input" name="phn"> <br><br></li>
			<li><input type="text" required class="input" name="address"><br><br></li>
			<li><input type="email" required class="input" name="email"><br><br></li>
			<li><br><br><input type="radio" name="sex" value="male">MALE<br><br> </li>
			<li><input type="radio" name="sex" value="female">FEMALE<br><br></li>
			<li><input type="number" required class="input" name="semester"><br><br></li>
			<li><input type="date" required class="input" name="dob"><br><br></li>
			<li><input type="text" required class="input" name="img"> <br><br></li>
			<li><input type="number" required class="input" name="id"><br><br></li>
			<li><input type="text" required class="input" name="pass"><br><br></li>
			<li><input type="number" required class="input" name="batch"> <br><br></li>
		</ul>
		<br><br>
			<input type="submit" name="submit" value="ADD" id="button">
		</form>


<?php

if(isset($_POST['submit']))
{
$val1=$_POST['st_name'];
$val2=$_POST['pass'];
$val3=$_POST['Std_id'];
$val4=$_POST['img'];
$val5=$_POST['cours_id'];
$val6=$_POST['dep_id'];
$val7=$_POST['phn'];
$val8=$_POST['email'];
$val9=$_POST['sex'];
$val10=$_POST['semester'];
$val11=$_POST['dob'];
$val12=$_POST['address'];
$val13=$_POST['batch'];
$val14=$_POST['id'];
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
$result1=mysql_query("insert into students(stud_name,st_pass,stud_id,stu_img,c_id,dep_id,stud_phno,stud_email,stud_gender,stud_semester,stud_dob,address,batch,login_code) values ('$val1','$val2','$val3','$val4','$val5','$val6','$val7','$val8','$val9','$val10','$val11','$val12','$val13','$val14')");
if(!$result1)
{
	echo "error";
}
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
$result1=mysql_query("insert into login(user_name,passcode,Type) values ('$val1','$val2','$val14')");
echo "<script type='text/javascript'>
    alert('Student details are stored')
</script>";
}

?>

	</div>
</body>
</html>