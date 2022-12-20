<?php

$servername="localhost";
$username="root";
$password="";
$dbname="trainingdb";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}

$sql="SELECT `staff_id`,`stfname`,`dept_id`
FROM `staffmst`";

$resultsm=mysqli_query($conn,$sql);

echo "<table border='1'>";
echo "<tr>
    <th>staffid</th>
    <th>staffname</th>
    <th>deptid</th>
    </tr>";

if(mysqli_num_rows($resultsm) > 0)
{
    while($row=mysqli_fetch_assoc($resultsm))
    {
        $idstaff=$row['staff_id'];
        $namestaff=$row['stfname'];
        $iddept=$row['dept_id'];

        echo "<tr>
        <td>$idstaff</td>
        <td>$namestaff</td>
        <td>$iddept</td>
        </tr>";

    }
}


?>