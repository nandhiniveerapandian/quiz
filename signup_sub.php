<?php
include("class/users.php");
$register=new users;
extract($_POST);
$query="INSERT INTO `signup` (`name`, `email`, `pass`, `mbl`) VALUES ('$name', '$email', '$pass', '$phno');";
if($register->signup($query))
{
	$register->url("index.php?run=success");
}
?>
