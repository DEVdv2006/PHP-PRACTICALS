<?php
$servername="localhost";
$username="root";
$password="";
$database="DEV";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    echo "failed to connect because ".mysqli_connect_error();
}
else
{
    echo "connection success"."<br>";
}
$sql="SELECT * FROM php_trip2 WHERE `name`='ss'";
$result=mysqli_query($conn,$sql);

//find the numbers of rows returned
$num= mysqli_num_rows($result);
echo "total no of records fetched are ".$num."<br>";

$record_array=mysqli_fetch_assoc($result);
$name=$record_array['name'];
echo "hello ".$name."<br>";


//updating table with the help of WHERE clause
$sql2="UPDATE `php_trip2` SET `name`='rohan' WHERE `name`='rr'";


$result2=mysqli_query($conn,$sql2);
if($result2)
{
    echo "table updated successfully"."<br>";
}
else
{
    echo "error in updating table";
}




?>