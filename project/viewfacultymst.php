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

$sql="SELECT `faculty_id`,`faculty_name`,`faculty_email`
FROM `facultymst`";

$resultfs=mysqli_query($conn,$sql);

echo "<table border='1'>";

echo "<tr>
    <th>facultyid</th>
    <th>facultyname</th>
    <th>facultyemail</th>
    </tr>";

if(mysqli_num_rows($resultfs) > 0)
{
    while($row=mysqli_fetch_assoc($resultfs))
    {
        $idfaculty=$row['faculty_id'];
        $namefaculty=$row['faculty_name'];
        $emailfaculty=$row['faculty_id'];

        echo "<tr>
            <td>$idfaculty</td>
            <td>$namefaculty</td>
            <td>$emailfaculty</td>
            <td><a href='editfacultymst.php?facultyid=$idfaculty'>edit</a></td>
            </tr>";
    }
}



?>