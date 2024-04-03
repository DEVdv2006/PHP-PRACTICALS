<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>INSERTING DATA USING FORM</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="inserting_data_using_form.php" method="get">
            <label for="num">Enter sno</label>
            <input type="number" name="num" id="num">
            <br>
            <label for="name">Enter your name</label>
            <input type="text" name="name" id="name">
            <br>
            <button type="submit">submit</button>
        </form>

        <?php
        $num=$_GET['num'];
        $name=$_GET['name'];
        //creating connection
        $server_name="localhost";
        $user_name="root";
        $password="";
        $database="DEV";
        $connection = mysqli_connect($server_name,$user_name,$password,$database);
        if(!$connection)
        {
            echo "connection not established because of ".mysqli_connect_error();
        }
        else
        {
            echo "connection is established";
        }
        $sql="INSERT INTO `php_trip2` (`sno`,`name`) VALUES ( '$num','$name')";
        $result=mysqli_query($connection,$sql);
        if($result)
        {    echo "the values ".$num." and ".$name." are inserted in php_trip2 ";

        }
        else{
            echo "not inserted successfully because ".mysqli_error($connection);
        }
        
        
        ?>




    </body>
</html>