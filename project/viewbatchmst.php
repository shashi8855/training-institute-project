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

?>

<?php

$sql="SELECT `batch_id`,`batch_name`,`startdate`,`enddate`,`course_id`,`faculty_id`
FROM `batchmst`";

$resultbs=mysqli_query($conn,$sql);

echo "<table border='1'>";

echo "<tr>
    <th>Batchid</th>
    <th>Batchname</th>
    <th>startdate</th>
    <th>enddate</th>
    </tr>";

if(mysqli_num_rows($resultbs) > 0)
{
    while($row=mysqli_fetch_assoc($resultbs))
    {
        $facultyyid=$row['faculty_id'];
        $courseeeid=$row['course_id'];
        $idbatch=$row['batch_id'];
        $namebatch=$row['batch_name'];
        $starteddate=$row['startdate'];
        $enddatee=$row['enddate'];

        echo "<tr>
            <td>$idbatch</td>
            <td>$namebatch</td>
            <td>$starteddate</td>
            <td>$enddatee</td>
            <td><a href='editbatchmst.php?Batchid=$idbatch&COurseid=$courseeeid&FAcultyid=$facultyyid'>edit</a></td>
            </tr>";
    }
}
else
{
    echo "0 rows";
}

echo "</table>";

mysqli_close($conn);

?>