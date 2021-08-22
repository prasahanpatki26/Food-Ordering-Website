<?php
    session_start();
    if(isset($_SESSION['name']))
    {
        echo 'set';
        echo $_SESSION['name'];    
    }else{
        echo 'not set';
    }
?>