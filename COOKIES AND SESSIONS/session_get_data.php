<?php
session_start();
if(isset($_SESSION['username']))
{
    echo "WELCOME ".$_SESSION['username']."<br>";
    echo "YOUR FAVOURITE CATEGORY IS ".$_SESSION['favCAT'];
}
else{
    echo "please try to login";
}
?>