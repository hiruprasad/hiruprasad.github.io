<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (!$conn) 
{
    echo "Connection failed: ";
}
if (!mysqli_select_db($conn,'hotel')) 
{
	echo "Database Not Selected !";
}

$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$approval = "Not Allowed";

$query="insert into contact(name,phone,email,cdate,approval)VALUES('$name','$phone','$email',now(),'$approval')";

if(!mysqli_query($conn,$query))
{
	echo 'Not';
}
else
{
	echo' <script language="javascript" type="text/javascript"> alert("User name and password update") </script>';
}
header("refresh:0; url=index.php")
?>