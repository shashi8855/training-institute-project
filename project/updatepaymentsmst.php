<?php

session_start();

$staffid=$_POST['staff_id'];
$pmonth=$_POST['month'];
$pyear=$_POST['year'];
$psalary=$_POST['salary'];
$panyinsesnsitive=$_POST['e_insensitive'];
$pbonus=$_POST['bonus'];
$anydeducation=$_POST['deducation'];
$anyadvance=$_POST['advance_payment'];


//creating database
$servername="localhost";
$username="root";
$password="";
$dbname="trainingdb";

//connecting to db
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

$abcd=$_SESSION['stffidd'];

$update="UPDATE `paymentsmst` 
SET `month`='$pmonth',`year`='$pyear',`salary`='$psalary',
`e_insensitive`='$panyinsesnsitive',`bonus`='$pbonus',`deducation`='$anydeducation',`advance_payment`='$anyadvance' 
WHERE `staff_id`=$abcd";

if(mysqli_query($conn,$update))
{
    echo "record updated successfully";
}
else
{
    echo mysqli_error($conn);
}

mysqli_close($conn);

session_unset();

?>