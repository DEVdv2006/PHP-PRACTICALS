<?php 
echo "we are creating to database";
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
$password="";
$connection = mysqli_connect($servername,$username,$password);

//CREATE A DATABASE
//$i=0;
$sql="CREATE DATABASE MYDB";  //your sql query
mysqli_query($connection,$sql);//this mysqli_query() takes two args i)connection object ii)your query






if(!$connection)
{
    die("sorry connection not established ".mysqli_connect_error());
}
else{
    echo "connection established";
}




?>