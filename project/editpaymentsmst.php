<?php

session_start();

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

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<form action="updatepaymentsmst.php" method="post">
  <div class="container">
    <h1>Payments</h1>
    <hr>

    <?php

    $stfidd=$_GET['stfidd'];

    $_SESSION['stffidd']=$stfidd;
    
    $sqlquery="SELECT `staff_id`,`month`,`year`,`salary`,`e_insensitive`,`bonus`,`deducation`,`advance_payment`
    FROM `paymentsmst`
    WHERE `staff_id`=$stfidd";

    $resultpmst=mysqli_query($conn,$sqlquery);

    if(mysqli_num_rows($resultpmst) > 0)
    {
        while($row=mysqli_fetch_assoc($resultpmst))
        {
            $monthh=$row['month'];
            $yearr=$row['year'];
            $salaryy=$row['salary'];
            $anyinsensitives=$row['e_insensitive'];
            $bbonus=$row['bonus'];
            $anydeducation=$row['deducation'];
            $anyadvpayments=$row['advance_payment'];
        }
    }

    
    ?>

    <!--staff_id is primary key-->
    <input type="hidden" name="staff_id" value="">

    <label for="month"><b>Month</b></label><br>
    <input type="text" name="month" value="<?php echo $monthh ?>" required><br><br>

    <b>Year</b><br>
    <input type="number" name="year" value="<?php echo $yearr ?>"><br><br>

    <b>Salary</b><br>
    <input type="number" name="salary" value="<?php echo $salaryy ?>"><br><br>

    <b>Any insensitive</b><br>
    <input type="number" name="e_insensitive" value="<?php echo $anyinsensitives ?>"><br><br>

    <b>Bonus</b><br>
    <input type="nbumber" name="bonus" value="<?php echo $bbonus ?>"><br><br>

    <b>Any Deduction</b><br>
    <input type="number" name="deducation" value="<?php echo $anydeducation ?>"><br><br>

    <b>Any Advance payments</b><br>
    <input type="number" name="advance_payment" value="<?php echo $anyadvpayments ?>"><br><br>

    <hr>

    <input type="submit" class="registerbtn" value="Submit">
  </div>

</form>
</body>
</html>

<?php

?>