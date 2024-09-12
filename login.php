<?php
$servername="localhost";
$username="root";
$password="";
$dbname="autowala";
$con=new mysqli($servername,$username,$password,$dbname);
if($con->connect_error)
{
die("connection failed".con->connect_error);
}
else
{
echo "connected successfully<br>";
}
$uname=$_POST["uname"];
$Password=$_POST["pass"];
$sql="SELECT username,password FROM users where username='{$uname}'";
$result=$con->query($sql);
if($result ->num_rows>0){
 while($row=$result->fetch_assoc())
{
 if($row["username"]==$uname && $row["password"]==$Password)
 {
   echo "You have been Successfully validated";
header("refresh:3,url=services.html");

   }
else
{
 echo "Credentials Wrong, Try again";
header("refresh:3,url=login.html");
}
}
}
else
{
 echo "User name given was not exist";
header("refresh:3,url=login.html");

}
$con->close();
?>