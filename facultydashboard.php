<?php

session_start();

if(session_status() == PHP_SESSION_ACTIVE)
{
    echo "session is active <br>";

    if($_SESSION['userrtype'] == 3)
    {
        echo "iam into admin dashboard ";
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