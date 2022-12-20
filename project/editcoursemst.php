<?php

session_start();

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
<form action="updatecoursemst.php" method="post">
  <div class="container">
    <h1>Coursemst</h1>
    <hr>

    <?php

    $courseeeid=$_GET['courseeeid'];

    $_SESSION['idcoursee']=$courseeeid;

    $sqlquery="SELECT `course_name`,`course_content`,`course_description`
    FROM `coursemst`
    WHERE `course_id`=$courseeeid";

    $resultc=mysqli_query($conn,$sqlquery);

    while($row=mysqli_fetch_assoc($resultc))
    {
        $namecoursee=$row['course_name'];
        $contentcourse=$row['course_content'];
        $descriptioncourse=$row['course_description'];
    }

    ?>

    <b>coursename</b><br>
    <input type="text" name="course_name" value="<?php echo $namecoursee ?>"><br><br>

    <b>CourseContent</b><br>
    <input type="text" name="course_content" value="<?php echo $contentcourse ?>"><br><br>

    <b>CourseDescription</b><br>
    <input type="text" name="course_description" value="<?php echo $descriptioncourse ?>"><br><br>

    <hr>

    <input type="submit" class="registerbtn" value="Submit">
  </div>

</form>
</body>
</html>

<?php

?>