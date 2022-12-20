<?php

$facultyname=$_POST['faculty_name'];
$facultyemail=$_POST['faculty_email'];
$facultynumber=$_POST['faculty_contactno'];



$servername="localhost";
$username="root";
$password="";
$dbname="trainingdb";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

$sql="INSERT INTO `facultymst`(`faculty_name`, `faculty_email`, `faculty_contactno`) 
                VALUES ('$facultyname','$facultyemail','$facultynumber')";

if(mysqli_query($conn,$sql))
{
    echo "New record created successfully";
}
else
{
    echo mysqli_error($conn);
}

mysqli_close($conn);
?>