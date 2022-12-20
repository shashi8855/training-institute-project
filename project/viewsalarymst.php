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

$sql="SELECT sm.salary_id,sm.staff_id,sm.start_month
FROM salarymst sm";

$resultsm=mysqli_query($conn,$sql);

echo "<table border='1'>";

echo "<tr>
    <th>salaryid</th>
    <th>staffid</th>
    <th>startmonth</th>
    </tr>";

if(mysqli_num_rows($resultsm))
{
    while($row=mysqli_fetch_assoc($resultsm))
    {
        $idsalary=$row['salary_id'];
        $idstaff=$row['staff_id'];
        $startingmonth=$row['start_month'];

        echo "<tr>
            <td>$idsalary</td>
            <td>$idstaff</td>
            <td>$startingmonth</td>
            <td><a href='editsalarymst.php?SAlaryid=$idsalary&STaffid=$idstaff'>edit</a></td>
            </tr>";

    }
}

echo "</table>";

mysqli_close($conn);
?>