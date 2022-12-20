<?php

session_start();

//$staffname=$_POST['staff_id'];
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

$salaryiid=$_SESSION['salaryiid'];

$sqlu="UPDATE `salarymst` 
SET /*`staff_id`='[value-2]'*/`salary`='$staffsalary',`start_month`='$startmonth',`year`='$syear'
WHERE `salary_id`=$salaryiid";


if(mysqli_query($conn,$sqlu))
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