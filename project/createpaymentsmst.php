<?php

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

$insert="INSERT INTO `paymentsmst`
(`staff_id`,`month`,`year`,`salary`,`e_insensitive`,`bonus`,`deducation`,`advance_payment`)
VALUES ('$staffid','$pmonth','$pyear','$psalary','$panyinsesnsitive','$pbonus','$anydeducation','$anyadvance')";


if(mysqli_query($conn,$insert))
{
    echo "New record created successfully";
}
else
{
    echo mysqli_error($conn);
}

mysqli_close($conn);


?>