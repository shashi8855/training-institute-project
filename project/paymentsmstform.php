<?php

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
<form action="paymentsmst.php" method="post">
  <div class="container">
    <h1>Payments</h1>
    <hr>

    <!--staff_id is primary key-->
    <input type="hidden" name="staff_id" value="">

    <label for="month"><b>Month</b></label><br>
    <input type="month" name="month" required><br><br>

    <b>Year</b><br>
    <input type="number" name="year" value=""><br><br>

    <b>Salary</b><br>
    <input type="number" name="salary" value=""><br><br>

    <b>Any insensitive</b><br>
    <input type="number" name="e_insensitive" value=""><br><br>

    <b>Bonus</b><br>
    <input type="nbumber" name="bonus" value=""><br><br>

    <b>Any Deduction</b><br>
    <input type="number" name="deducation" value=""><br><br>

    <b>Any Advance payments</b><br>
    <input type="number" name="advance_payment" value=""><br><br>

    <hr>

    <input type="submit" class="registerbtn" value="Submit">
  </div>

</form>
</body>
</html>

<?php

?>