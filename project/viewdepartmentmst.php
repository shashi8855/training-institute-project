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

$sql="SELECT `dept_id`,`dept_name`,`dept_description`
FROM `departmentmst`";

$resultds=mysqli_query($conn,$sql);

echo "<table border='1'>";

echo "<tr>
    <th>deptid</th>
    <th>deptname</th>
    <th>description</th>
    </tr>";

if(mysqli_num_rows($resultds) > 0)
{
    while($row=mysqli_fetch_assoc($resultds))
    {
        $iddept=$row['dept_id'];
        $namedept=$row['dept_name'];
        $description=$row['dept_description'];

        echo "<tr>
            <td>$iddept</td>
            <td>$namedept</td>
            <td>$description</td>
            <td><a href='editdepartmentmst.php?departmentid=$iddept'>edit</a></td>
            </tr>";
    }
}

echo "</table>";

mysqli_close($conn);

?>