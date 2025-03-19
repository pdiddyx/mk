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