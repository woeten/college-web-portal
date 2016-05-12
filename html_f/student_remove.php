<?php
session_start();

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
$result1=mysql_query("select * from students");
if(!$result1){
	die("Databse query failed :".mysql_error());
}
echo "stud_name&nbsp;&nbsp;&nbsp;st_pass&nbsp;&nbsp;&nbsp;stud_id&nbsp;&nbsp;&nbsp;stu_img&nbsp;&nbsp;&nbsp;c_id&nbsp;&nbsp;&nbsp;dep_id&nbsp;&nbsp;&nbsp;stud_phno&nbsp;&nbsp;&nbsp;stud_email&nbsp;&nbsp;&nbsp;stud_gender&nbsp;&nbsp;&nbsp;stud_semester&nbsp;&nbsp;&nbsp;stud_dob&nbsp;&nbsp;&nbsp;address&nbsp;&nbsp;&nbsp;batch&nbsp;&nbsp;&nbsp;Login_code";
echo '<br/><br/><br/>'; 
while($row1=mysql_fetch_array($result1)){
echo $row1['stud_name']."  ".$row1['st_pass']."  ".$row1['stud_id']."  ".$row1['stu_img']."  ".$row1['c_id']."  ".$row1['dep_id']."  ".$row1['stud_phno']."  ".$row1['stud_email']."  ".$row1['stud_gender']."  ".$row1['stud_semester']."  ".$row1['stud_dob']."  ".$row1['address']."  ".$row1['batch']."  ".$row1['Login_code']."<br/><br/><br/>";
}
echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/>';

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
$result=mysql_query("select * from teacher");
if(!$result){
	die("Databse query failed :".mysql_error());
}

echo "T_name&nbsp;&nbsp;&nbsp;d_id&nbsp;&nbsp;&nbsp;subj_id&nbsp;&nbsp;&nbsp;ph_no&nbsp;&nbsp;&nbsp;T_email&nbsp;&nbsp;&nbsp;gender&nbsp;&nbsp;&nbsp;doj&nbsp;&nbsp;&nbsp;Login_code&nbsp;&nbsp;&nbsp;password";
echo '<br/><br/><br/>'; 
while($row=mysql_fetch_array($result))
{
echo $row['T_name']."  ".$row['d_id']."  ".$row['subj_id']."  ".$row['ph_no']."  ".$row['T_email']."  ".$row['gender']."  ".$row['doj']."  ".$row['Login_code']."  ".$row['password']."<br/><br/><br/>";
} 







?>