<?php

$connection=mysql_connect('localhost','root','');
mysql_select_db('astro_db',$connection) or die('problem occured');

$uname=$_POST['uname'];
$uemail=$_POST['uemail'];
$umsg=$_POST['umsg'];

$sql="INSERT INTO `inbox` (`user_name`,`user_email`,`msg`) VALUES ('$uname','$uemail','$umsg')";
$con=mysql_query($sql);
if($con)
	echo "Send";
else
	echo "Faild";


?>