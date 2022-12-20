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

$sql="SELECT `course_id`,`course_name`,`course_description`
FROM `coursemst`";

$resultcs=mysqli_query($conn,$sql);

echo "<table border='1'>";

echo "<tr>
    <th>courseid</th>
    <th>coursename</th>
    <th>coursedescription</th>
    </tr>";

if(mysqli_num_rows($resultcs) > 0)
{
    while($row=mysqli_fetch_assoc($resultcs))
    {
        $idcourse=$row['course_id'];
        $namecourse=$row['course_name'];
        $descriptioncourse=$row['course_description'];
        echo "<tr>
            <td>$idcourse</td>
            <td>$namecourse</td>
            <td>$descriptioncourse</td>
            <td><a href='editcoursemst.php?courseeeid=$idcourse'>edit</a></td>
            </tr>";
    }
}

echo "</table>";




?>