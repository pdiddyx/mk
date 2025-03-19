<?php
if($_POST){
$rg=$_POST['txtreg'];
$host = "localhost";
$username = "root";
$pass = "";
$con = mysqli_connect($host, $username, $pass, "student");
if($con)
echo "Database Connection Established Successfully... <br>";
$qry="select * from student where rollno='$rg'";
$result=mysqli_query($con,$qry);
$nos=mysqli_num_rows($result);
while($row=mysqli_fetch_row($result))
{
echo "<br>\n";
echo "Rollno: $row[0] <br> Name: $row[1] <br> Mark: $row[2] <br> Grade: $row[3]";
}
}
?>