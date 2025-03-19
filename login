<html>
<head>
<title>login</title>
</head>
<body>
<center>
<form action="login.php" method="POST">
<h4>login to continue</h4>
<input type="text" name="uname" maxlength="20" placeholder="username">
<br>
<input type="text" name="password" maxlength="20" placeholder="password">
<br>
<input type="submit" name="submit" value="login">
<input type="reset">
</form>
</center>
</body>
</html>



<?php
$host = "localhost";
$username = "root";
$pass = "";
$con = mysqli_connect($host, $username, $pass, "log");
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$password=$_POST['password'];
$sql="select * from users where username='$uname' AND password='$password'";
$res=mysqli_query($con,$sql) or die (mysqli_error($con));
$val=mysqli_num_rows($res);
if($val>0)
{
echo("<script>alert('login success')</script>");
}
else
{
echo("<script>alert('failed')</script>");
}
}
?>



Create database log;
Use log;
Create table users(username varchar(10),password varchar(10));
Insert into users (username,password) values ("yims1","123");