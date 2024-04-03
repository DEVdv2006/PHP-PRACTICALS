<?php
$servername="localhost";
$username="root";
$password="";
$database="DEV";
$connection=mysqli_connect($servername,$username,$password,$database);
if(!$connection)
{
    echo "Error connecting "."<br>";
}
else{
    echo "Connection success"."<br>";
}
$sql1="DELETE FROM `php_trip2` WHERE `name`='ss'";
$result=mysqli_query($connection,$sql1);
if($result)
{
    echo "Record deleted successfully"."<br>";
}
else{
    echo "can't delete";
}


?>