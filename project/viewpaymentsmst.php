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

$sql="SELECT ps.staff_id, ps.month, ps.salary, ps.advance_payment
FROM paymentsmst ps";

$resultps= mysqli_query($conn,$sql);

echo "<table border='1'>";
echo "<tr><th>staffid</th><th>month</th><th>salary</th><th>advancepayments</th></tr>";


if(mysqli_num_rows($resultps) > 0)
{
    while($row= mysqli_fetch_assoc($resultps))
    {
        $idstaff=$row['staff_id'];
        $monthss=$row['month'];
        $salaryy=$row['salary'];
        $advpayments=$row['advance_payment'];
        
       echo "<tr>
            <td>$idstaff</td>
            <td>$monthss</td>
            <td>$salaryy</td>
            <td>$advpayments</td>
            <td><a href='editpaymentsmst.php?stfidd=$idstaff'>edit</a></td>
            </tr>";
        
    }
}
else
{
    echo "0 results";
}

echo "</table>";

mysqli_close($conn);

?>