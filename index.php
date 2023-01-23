<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>ONLINE QUIZ</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="note">
<center><h2>If you are new to this site first get signup into this page</h2></center>
<center><h2>If you already signed up then get into login page</h2></center>
</div>
<br><div class="regform"> <h1>Login</h1> </div>
<div class="main">
 <?php
 if(isset($_GET['run'])&&$_GET['run']=="failed")
 {
	 echo '<script>alert("Your email or password is not correct")</script>';
 }
 ?>
<form action="signin_sub.php" method="post"> 
        <h2 class="name">Email</h2> 
        <input class="email" type="email" name="email" placeholder="Enter your email">
		<h2 class="name">Password</h2>
        <input class="number" type="text" name="pass" placeholder="Enter your password">
        <center><button type="submit" name="submit">LOGIN</button></center><br><br>
    </form>
</div>

<br><br><div class="regform"> <h1>Signup</h1> </div>
<div class="main"> 
<?php
if(isset($_GET['run'])&&$_GET['run']=="success")
{
	echo '<script>alert("Successfully loged")</script>';
}
?>
    <form action="signup_sub.php" method="post"> 
        <h2 class="name">Name</h2>
        <input class="firstname" type="text" name="name" placeholder="Enter your name">
        <h2 class="name">Email</h2> 
        <input class="email" type="email" name="email" placeholder="Enter your email">
		<h2 class="name">Password</h2>
        <input class="number" type="text" name="pass" placeholder="Enter your password">
        <h2 class="name"> Phone</h2>
        <input class="number" type="text" name="phno" placeholder="Enter your Phone Number">
        <center><button type="submit" name="submit">REGISTER</button></center><br><br>
    </form>
</div> 
</body> 
</html>