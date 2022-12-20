
<?php

session_start();

$depatname=$_POST['dept_name'];
$depatdscription=$_POST['course_description'];

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
<form action="updatedepartmentmst.php" method="post">
  <div class="container">
    <h1>Departmentmst</h1>
    <hr>

    <?php
    
    $departmentid=$_GET['departmentid'];

    $_SESSION['departmentidd']=$departmentid;

    $sql="SELECT `dept_id`,`dept_name`,`dept_description`
    FROM `departmentmst`
    WHERE `dept_id`=$departmentid";
    
    $resulteds=mysqli_query($conn,$sql);

    if(mysqli_num_rows($resulteds) > 0)
    {
        while($row=mysqli_fetch_assoc($resulteds))
        {
            $iddept=$row['dept_id'];
            $namedept=$row['dept_name'];
            $descriptiondept=$row['dept_description'];
        }
    }
    
    
    ?>

    <b>Deptname</b><br>
    <input type="text" name="dept_name" value="<?php echo $namedept ?>"><br><br>

    <b>DeptDescription</b><br>
    <input type="text" name="course_description" value="<?php echo $descriptiondept ?>"><br><br>

    <hr>

    <input type="submit" class="registerbtn" value="Submit">
  </div>

</form>
</body>
</html>

<?php

?>