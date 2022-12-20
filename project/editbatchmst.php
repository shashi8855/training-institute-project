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
<form action="updatebatchmst.php" method="post">
  <div class="container">
    <h1>Btachmst</h1>
    <hr>

    <?php

    session_start();
    
    $Batchid=$_GET['Batchid'];
    $COurseid=$_GET['COurseid'];
    $FAcultyid=$_GET['FAcultyid'];
    

    $_SESSION['batchiid']=$Batchid;
    
    $sqlquery="SELECT `batch_id`,`course_id`,`batch_name`,`startdate`,`enddate`,`faculty_id`,`fees`
    FROM `batchmst`
    WHERE batch_id=$Batchid";

    $resultform=mysqli_query($conn,$sqlquery);

    if(mysqli_num_rows($resultform) > 0)
    {
      while($row=mysqli_fetch_assoc($resultform))
      {
        $batchidd=$row['batch_id'];
        $courseidd=$row['course_id'];
        $batchnamee=$row['batch_name'];
        $startdatee=$row['startdate'];
        $enddatee=$row['enddate'];
        $facultyidd=$row['faculty_id'];
        $ffees=$row['fees'];
      }
    }
    
    $sqlcmst="SELECT `course_id`,`course_name`
    FROM `coursemst`
    WHERE course_id=$COurseid";

    $resultcmst=mysqli_query($conn,$sqlcmst);

    if(mysqli_num_rows($resultcmst) > 0)
    {
      while($rowc=mysqli_fetch_assoc($resultcmst))
      {
        $iddcourse=$rowc['course_id'];
        $nameecourse=$rowc['course_name'];
        
      }
    }

    ?>

    <!--batch_id is primary key-->
    <input type="hidden" name="batch_id" value="">

    coursename:
    <input type="text" value="<?php echo $nameecourse ?>">

    Batchname:
    <input type="text" name="batch_name" value="<?php echo $batchnamee ?>"><br><br>

    startdate:
    <input type="date" name="startdate" value="<?php echo $startdatee ?>"><br><br>

    enddate:
    <input type="date" name="enddate" value="<?php echo $enddatee ?>"><br><br>
    

    <?php
    //query for facultyid
    $sqlfmst="SELECT `faculty_id`, `faculty_name`
    FROM `facultymst`
    WHERE `faculty_id`=$FAcultyid";

    $resultfmst=mysqli_query($conn,$sqlfmst);

    if(mysqli_num_rows($resultfmst) > 0)
    {
      while($rowfmst=mysqli_fetch_assoc($resultfmst))
      {
        $nameefaculty=$rowfmst['faculty_name'];
      }
    }
    else
    {
      echo "0 rows";
    }

    ?>

    facultyname:
    <input type="text" value="<?php echo $nameefaculty ?>">

    fees:
    <input type="number" name="fees" value="<?php echo $ffees ?>">

    <hr>

    <input type="submit" placeholder="enter your fee" class="registerbtn" value="Submit">
  </div>

</form>
</body>
</html>

<?php

?>