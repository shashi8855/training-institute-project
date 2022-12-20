<?php

$staffname=$_POST['staff_id'];
$staffsalary=$_POST['salary'];
$startmonth=$_POST['start_month'];
$syear=$_POST['year'];

$servername="localhost";
$username="root";
$password="";
$dbname="trainingdb";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

$sql="INSERT INTO `salarymst`(`staff_id`, `salary`, `start_month`, `year`) 
                    VALUES ('$staffname','$staffsalary','$startmonth','$syear')";


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