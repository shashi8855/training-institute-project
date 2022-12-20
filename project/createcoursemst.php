<?php

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

$sql="INSERT INTO `coursemst`(`course_name`, `course_content`, `course_description`)
                        VALUES ('$coursename','$coursecontent','$coursedescription')";

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