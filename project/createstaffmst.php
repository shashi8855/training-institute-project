<?php

$deptname=$_POST['dept_id'];
$staffname=$_POST['stfname'];
$contactnum=$_POST['mobile_number'];
$semail=$_POST['email'];
$jdate=$_POST['joining_date'];


$servername="localhost";
$username="root";
$password="";
$dbname="trainingdb";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}


$sql="INSERT INTO `staffmst`(`dept_id`, `stfname`, `mobile_number`, `email`, `joining_date`) 
                    VALUES ('$deptname','$staffname','$contactnum','$semail','$jdate')";

if(mysqli_query($conn,$sql))
{
    echo "New record created successfully";
}
else
{
    echo myswli_error($conn);
}

mysqli_close($conn);

?>