<?php

session_start();

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

$ffcaultyif=$_SESSION['facultyyid'];

$sql="UPDATE `facultymst` 
SET `faculty_name`='$facultyname',`faculty_email`='$facultyemail',`faculty_contactno`='$facultynumber'
WHERE `faculty_id`=$ffcaultyif";

if(mysqli_query($conn,$sql))
{
    echo "record updated successfully";
}
else
{
    echo mysqli_error($conn);
}

mysqli_close($conn);

session_unset();

session_destroy();
?>