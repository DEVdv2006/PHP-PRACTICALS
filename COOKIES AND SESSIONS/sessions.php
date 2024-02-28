<?php 
session_start();
$_SESSION['username']="dev";
$_SESSION['favCAT'] = "books";
echo "WE HAVE SAVED YOUR SESSION";

?>