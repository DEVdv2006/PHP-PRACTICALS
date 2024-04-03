<?php 
$server_name="localhost";
$user_name="root";
$password="";
$database="DEV";//you can specifically connect to a specific database
$connection=mysqli_connect($server_name,$user_name,$password,$database);
if(!$connection)
{
    die("connection to database failed because of ".mysqli_connect_error());
}
else{
    echo "connection success";
}
$sql="CREATE TABLE `php_trip2` ( `sno` INT(11) PRIMARY KEY,`name` VARCHAR(20) )";
$result=mysqli_query($connection,$sql);
if($result)
{
    echo "table created successfully";
}
else{
    echo "table not created because ".mysqli_error($connection);

}
?>