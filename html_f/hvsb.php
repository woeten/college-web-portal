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
$result1=mysql_query("select * from newsfeed");
if(!$result1){
	die("Databse query failed :".mysql_error());
}

echo "newsfeed_id&nbsp;&nbsp;&nbsp;d_id&nbsp;&nbsp;&nbsp;dofnewsfeed&nbsp;&nbsp;&nbsp;description&nbsp;&nbsp;&nbsp;head";
echo '<br/><br/><br/>'; 
while($row=mysql_fetch_array($result1)){
echo $row['newsfeed_id']."  ".$row['d_id']."  ".$row['dofnewsfeed']."  ".$row['description']."  ".$row['head']."<br/><br/><br/>";
}







?>