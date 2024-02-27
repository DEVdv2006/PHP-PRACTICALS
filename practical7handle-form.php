<?php 
$emp_name = $_POST["emp_name"];
$emp_num = $_POST["emp_number"];
$join_date = $_POST["join_date"];
$description = $_POST["description"];


//validating form data
if(empty($emp_name) || empty($emp_num) || empty($join_date))
{
    echo "CANNOT PUT name,number and joining date empty";
}
else
{
    echo "NAME ".$emp_name."<br>";
    echo "Number".$emp_num."<br>";
    echo "JOIN DATE".$join_date."<br>";
    echo "Description".$description."<br>";
}
?>