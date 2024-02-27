<?php
$firstname="";
$email="";
$region="";
$season="";
$intrests="";
$participants=0;
$message="";
$token="";

$errors=[];


//data validation


//0 tokens
//1 firstname
if(!empty($_POST['first_name']))
{
    $firstname=$_POST['first_name'];
    if(ctype_alpha(str_replace(" ","",$firstname))===false)
    {
        $errors[]="Name should only contain alphabets and white spaces";
    }
}
else{
    $errors[]="Name field cannot be empty";
}
//2 email
//3 region
//4 season
//5 intrests
//6 participants
//7 message
//8 token


if($errors)
{
    var_dump($errors);
}
?>