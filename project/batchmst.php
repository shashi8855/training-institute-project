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
<form action="createbatchmst.php" method="post">
  <div class="container">
    <h1>Btachmst</h1>
    <hr>

    <!--batch_id is primary key-->
    <input type="hidden" name="batch_id" value="">

    <?php

    $sql="SELECT `course_id`, `course_name`
    FROM `coursemst`";

    $resultcs=mysqli_query($conn,$sql);

    ?>



    coursename:
    <select name="course_id">

    <?php

    if(mysqli_num_rows($resultcs) > 0)
    {
        while($row=mysqli_fetch_assoc($resultcs))
        {

            $idcourse=$row['course_id'];
            $namecourse=$row['course_name'];

            echo "<option value='$idcourse'>$namecourse</option>";

            //echo "<option value='$idcourse'>$namecourse</option>";

            //echo "<option value='".$idcourse."'>".$namecourse."</option>";
        }
    }
    
    ?>

    </select><br><br>

    Batchname:
    <input type="text" name="batch_name" value=""><br><br>

    startdate:
    <input type="date" name="startdate" value=""><br><br>

    enddate:
    <input type="date" name="enddate" value=""><br><br>

    <?php

    $sql1="SELECT `faculty_id`, `faculty_name`
    FROM `facultymst`";

    $resultfs=mysqli_query($conn,$sql1);

    ?>

    facultyname:
    <select name="faculty_id">

    <?php
    
    if(mysqli_num_rows($resultfs) > 0)
    {
        while($row=mysqli_fetch_assoc($resultfs))
        {

            $idfaculty=$row['faculty_id'];
            $namefaculty=$row['faculty_name'];

            echo "<option value='".$idfaculty."'>".$namefaculty."</option>";

        }
    }
    
    ?>

    </select><br><br>

    fees:
    <input type="number" name="fees" value="">

    <hr>

    <input type="submit" placeholder="enter your fee" class="registerbtn" value="Submit">
  </div>

</form>
</body>
</html>

<?php

?>