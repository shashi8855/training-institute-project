<?php

session_start();

$coursename=$_POST['course_name'];
$coursecontent=$_POST['course_content'];
$coursedescription=$_POST['course_description'];

$servername="localhost";
$username="root";
$password="";
$dbname="trainingdb";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

$abcd=$_SESSION['idcoursee'];

$sql="UPDATE `coursemst` 
SET `course_name`='$coursename',`course_content`='$coursecontent',`course_description`='$coursedescription'
WHERE `course_id`=$abcd";

if(mysqli_query($conn,$sql))
{
    echo " record updated successfully";
}
else
{
    echo mysqli_error($conn);
}

mysqli_close($conn);

session_unset();

session_destroy();
?>