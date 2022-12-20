<?php

session_start();

include 'dbconnect.php';

$usernamee=$_POST['username'];
$passwordd=$_POST['passwoord'];

$passwordencrypted= md5($passwordd);

$sql="SELECT `user_id`,`mobile_number`,`email`,`user_type`
FROM `user_table`
WHERE   `password`='$passwordencrypted' AND (`email`='$usernamee' OR `mobile_number`='$usernamee')";

$resultuser=mysqli_query($conn,$sql);

if(mysqli_num_rows($resultuser) > 0)
{
    while($row=mysqli_fetch_assoc($resultuser))
    {
        $iduser=$row['user_id'];
        $numbermobilee=$row['mobile_number'];
        $eemail=$row['email'];
        $typeuser=$row['user_type'];
        $userpassword=$row['password'];

        $_SESSION['userrtype']=$typeuser;
    }
}
else
{
    header('Location: login.php');
}

if($typeuser == 1)
{
    
    header('Location: superadmindashboard.php');
}
if($typeuser == 2)
{
    
    header('Location: admindashboard.php');
}
if($typeuser == 3)
{
    header('Location: facultydashboard.php');
}
if($typeuser == 4)
{
    header('Location: studentdashboard.php');
}
?>

