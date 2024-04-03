<?php
$servername="localhost";
$username="root";
$password="";
$database="DEV";

$connection = mysqli_connect($servername,$username,$password,$database);
if(!$connection)
{
    echo "failed connection -> ".mysqli_connect_error();
}
else{
    echo "connection established "."<br>";
}
$sql="SELECT * FROM php_trip2";
$result=mysqli_query($connection,$sql);

//find the numbers of rows returned
$num= mysqli_num_rows($result);
echo $num."<br>";

//display the rows returned by sql query
// if($num>0)
// {
//     $row=mysqli_fetch_assoc($result);
//     echo var_dump($row);
// }

//this mysqli_fetch_assoc() returns the next record in form of associative array,
//and when there are no records present in table it returns null
//following code illustrates that

while( $row=mysqli_fetch_assoc($result))
{    
    
    echo var_dump($row)."<br>";

}







?>