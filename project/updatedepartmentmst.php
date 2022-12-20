<?php

session_start();

$depatname=$_POST['dept_name'];
$depatdscription=$_POST['course_description'];

$servername="localhost";
$username="root";
$password="";
$dbname="trainingdb";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

$deptiddd=$_SESSION['departmentidd'];

$sql="UPDATE `departmentmst` 
SET `dept_name`='$depatname',`dept_description`='$depatdscription' 
WHERE `dept_id`=$deptiddd";

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