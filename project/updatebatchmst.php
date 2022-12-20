<?php

session_start();

//$courseid=$_POST['course_id'];
$batchname=$_POST['batch_name'];
$starteddate=$_POST['startdate'];
$enddatee=$_POST['enddate'];
//$facultyid=$_POST['faculty_id'];
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

$abcd=$_SESSION['batchiid'];

$sqlinsert="UPDATE `batchmst` 
SET `batch_name`='$batchname',`startdate`='$starteddate',
`enddate`='$enddatee',`fees`='$fee'
WHERE `batch_id`='$abcd'";

if(mysqli_query($conn,$sqlinsert))
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