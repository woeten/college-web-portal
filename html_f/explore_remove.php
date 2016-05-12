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
$result1=mysql_query("select * from explore");
if(!$result1){
	die("Databse query failed :".mysql_error());
}

echo "ID&nbsp;&nbsp;&nbsp;FROM&nbsp;&nbsp;&nbsp;TO&nbsp;&nbsp;&nbsp;MAP";
echo '<br/><br/><br/>'; 
while($row=mysql_fetch_array($result1)){
echo $row['r_id']."  ".$row['from']."  ".$row['to']."  ".$row['map']." <br/><br/><br/>";
}







?>