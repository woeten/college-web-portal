<?php

session_start();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>USP</title>
</head>
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" href="css/animated.css">
<link rel="icon" type="image/png" href="images/usp logo new.png">
	<body background="images/uni3!!.jpg">
		<div id="main_container">
			<div class="animated bounceInDown" id="banner">
				<img id="usp_name" src="images/banner_white1.png" alt="USP : UNIVERSITY STUDENT PORTAL">	
			</div>
				<div class="animated bounceInRight"  id="login">
					<form method="POST" action="" >
						<br>
						<div id="uid"><span id="uspd">User ID &nbsp;</span> <input type="text" name="user" placeholder=" name " id="form1_textbox" required="yes">	</div><br><br>
						<div id="pswd"><span id="uspd">	Password &nbsp;</span> <input type="password" name="pass" placeholder=" ********** " id="form1_textbox" required="yes"></div><br><br>	
						<input type="submit" value="Log in" id="submit_button" name="submit" > 
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
$a=$_POST['user'];
$b=$_POST['pass'];
$result=mysql_query("select * from login where user_name='".$a."'and passcode='".$b."'");
global $check;
$check=mysql_num_rows($result);
if($check==1)
{
	while($row=mysql_fetch_array($result))

{
	$var=$row['Type'];
	if($var==1)
	{
		$_SESSION['name']=$row['user_name'];
		
	header("location:homepage.php");
	}
	else if($var==2)
	{
		$_SESSION['name']=$row['user_name'];
	header("location:homepage_teacher.php");
	
	}
	else if($var==3)
	{
		$_SESSION['name']=$row['user_name'];
		header("location:homepage_admin.php");
	}

}
}
else{
	echo "</div>
					<div class='animated bounceInLeft' id='center'>
					<div id='padder'>
					<span id='q1'>What is USP, you ask?</span> <br><br>
					<marquee behavior='slide' direction='up' scrollamount='6' loop='0'><span id='q2'>We all know communication plays a major role in our daily lives. We need it to get any work done.  Communication happens between people all over the world, but let us now talk about a particular set of people. Our subjects in this discussion are the students and the working staff. Students go to universities to expand their knowledge and hone their skills by seeking all the help they can get from their teachers and educational institute faculty. But almost all students face some difficulty at some point of time or the other, if not too often, in communicating with the faculty. This may happen for a number of reasons like poor communicating skills, unresponsive staff, inconvenience of medium to communicate. We believe, that our project is just the right solution to overcome this problem. We are modern in our thinking, in our lifestyle and so should be our approach to things. With that kind of modern thinking in mind we have come up with this project. Gone are the days, when we were restricted to just communicating in person. We now have the means to put our message forth and get answered without even having to move anywhere, and so we shall utilize that to the fullest in our project. Our project is primarily a portal to connect the students to their faculty. 
					<br><br>
					We want the students to be able to put out their opinion freely to the university officials. We intend to create a portal for the formal and casual healthy interactions between them. This will act as a platform for getting problems solved quickly in a hassle free manner. Apart from suggesting, pointing out problems and giving feedbacks the students can also take the help of the university to get some sort of counselling in times of need or they may request any profession help with any issue, even personal ones. The latter will remain strictly confidential for the sake of student’s privacy. Our project will not only benefit the students, but also the faculty. They can put forth their own opinions and requests to upper levels and get real time responses. This project is mutually beneficial for both the ends.
					</span>

					</marquee>
					</div>
					</div>
					<div class='animated bounceInUp'  id='side_bottom'>
					<div id='padder'>
						<div class='msgb' id='m1'><span id='a'>Developers</span><span id='b'>We are :  <span id='uspsite'>TEAM USP</span></span></div>
						<div class='msgb' id='m2'><span id='a'>Feedback</span><span id='b'>Tell Us : <span id='uspsite'>to be added</span></span></div>
						<div class='msgb' id='m3'><span id='a'>Know More</span><span id='b'>Visit : <span id='uspsite'>to be added</span></span></div>
						<div class='msgb' id='m4'><span id='a'>Get in Touch</span><span id='b'>Email : <span id='uspsite'>projusp@gmail.com	</span></span></div>
					</div>
					</div>
		</div>

		<audio src='music/hello1!!.mp3' autoplay ></audio>";
	 echo "<script type='text/javascript'>
    alert('Wrong Username or Password')
</script>";


}




					}

					  ?>				
				</div>
					<div class="animated bounceInLeft" id="center">
					<div id="padder">
					<span id='q1'>What is USP, you ask?</span> <br><br>
					<marquee behavior='slide' direction='up' scrollamount='6' loop='0'><span id='q2'>We all know communication plays a major role in our daily lives. We need it to get any work done.  Communication happens between people all over the world, but let us now talk about a particular set of people. Our subjects in this discussion are the students and the working staff. Students go to universities to expand their knowledge and hone their skills by seeking all the help they can get from their teachers and educational institute faculty. But almost all students face some difficulty at some point of time or the other, if not too often, in communicating with the faculty. This may happen for a number of reasons like poor communicating skills, unresponsive staff, inconvenience of medium to communicate. We believe, that our project is just the right solution to overcome this problem. We are modern in our thinking, in our lifestyle and so should be our approach to things. With that kind of modern thinking in mind we have come up with this project. Gone are the days, when we were restricted to just communicating in person. We now have the means to put our message forth and get answered without even having to move anywhere, and so we shall utilize that to the fullest in our project. Our project is primarily a portal to connect the students to their faculty. 
					<br><br>
					We want the students to be able to put out their opinion freely to the university officials. We intend to create a portal for the formal and casual healthy interactions between them. This will act as a platform for getting problems solved quickly in a hassle free manner. Apart from suggesting, pointing out problems and giving feedbacks the students can also take the help of the university to get some sort of counselling in times of need or they may request any profession help with any issue, even personal ones. The latter will remain strictly confidential for the sake of student’s privacy. Our project will not only benefit the students, but also the faculty. They can put forth their own opinions and requests to upper levels and get real time responses. This project is mutually beneficial for both the ends.
					</span>

					</marquee>
					</div>
					</div>
					<div class="animated bounceInUp"  id="side_bottom">
					<div id="padder">
						<div class="msgb" id="m1"><span id="a">Developers</span><span id="b">We are :  <span id="uspsite">TEAM USP</span></span></div>
						<div class="msgb" id="m2"><span id="a">Feedback</span><span id="b">Tell Us : <span id="uspsite">to be added</span></span></div>
						<div class="msgb" id="m3"><span id="a">Know More</span><span id="b">Visit : <span id="uspsite">to be added</span></span></div>
						<div class="msgb" id="m4"><span id="a">Get in Touch</span><span id="b">Email : <span id="uspsite">projusp@gmail.com	</span></span></div>
					</div>
					</div>
		</div>

		<audio src="music/hello1!!.mp3" autoplay ></audio>
		
		
		<!-- src="music/vivacity.mp3#t=0,10" where #t=[start time][stop time]-->
		
	</body>
</html>