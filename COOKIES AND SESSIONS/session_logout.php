<?php 
session_start();
session_unset();
session_destroy();
echo "YOU HAVE BEEN LOGGED OUT";
?>