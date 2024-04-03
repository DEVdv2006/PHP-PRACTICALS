<?php 
echo "we are connecting to database";
//two ways to connect to database
/* 
1)using mysqli() function
    i)two ways  first using procedure
    ii)object oriented
2)using pdo-> stands for  portable distributed objects when you have more than
one database like mysql,oracle,etc use this

*/
//three variables required for establishing connection using mysql
$servername="localhost"; 
$username="root";
$password="vv";
$connection = mysqli_connect($servername,$username,$password);
if($connection->connect_error)
{
    die("sorry connection not established ".$connection->connect_error);
}
else{
    echo "connection established";
}




?>