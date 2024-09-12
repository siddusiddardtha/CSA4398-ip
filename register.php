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
echo "connected successfully";
}
$stmt=$con->prepare("INSERT INTO users VALUES(?,?,?,?,?)");
$name=$_POST["name"];
$phno=$_POST["phone"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$stmt->bind_param("sisss",$name,$phno,$email,$username,$password);
$stmt->execute();
echo "<br><br><br>";
echo "you have successfuly registered";
$stmt->close();
$con->close();
header("refresh:3;url=login.html");
?>