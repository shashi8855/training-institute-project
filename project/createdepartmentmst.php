<?php

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

$sql="INSERT INTO `departmentmst`( `dept_name`, `dept_description`)
                            VALUES ('$depatname','$depatdscription')";

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