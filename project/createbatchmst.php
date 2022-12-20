<?php

$batchid=$_POST['batch_id'];
$courseid=$_POST['course_id'];
$batchname=$_POST['batch_name'];
$starteddate=$_POST['startdate'];
$enddatee=$_POST['enddate'];
$facultyid=$_POST['faculty_id'];
$fee=$_POST['fees'];


$servername="localhost";
$username="root";
$password="";
$dbname="trainingdb";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}


$sqlinsert="INSERT INTO `batchmst`(`batch_id`, `course_id`, `batch_name`, `startdate`, `enddate`, `faculty_id`, `fees`) 
                            VALUES ('$batchid','$courseid','$batchname','$starteddate','$enddatee','$facultyid','$fee')";


if(mysqli_query($conn,$sqlinsert))
{
    echo "New record created successfully";
}
else
{
    echo mysqli_error($conn);
}

mysqli_close($conn);


?>