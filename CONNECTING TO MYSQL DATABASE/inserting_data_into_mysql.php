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
$sql="INSERT INTO `php_trip2` (`sno`,`name`) VALUES ( '1' , 'dev' )";
$result=mysqli_query($connection,$sql);
if($result)
{
    echo "record inserted successfully";
}
else{
    echo "record not inserted because of following error  ".mysqli_error($connection);

}
?>