<?php

session_start();

if (session_status() == PHP_SESSION_ACTIVE) 
{

    echo "session is active <br>";

if ($_SESSION['userrtype']==1)
{
    echo "im into super admin ";
    echo "and usertype is ",$_SESSION['userrtype'];
}
else
{
    
    header('Location: login.php');
    
}
}
else
{
    header('Location: login.php');
    
}

session_unset();

session_destroy();

?>