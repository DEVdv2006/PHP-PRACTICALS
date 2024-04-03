<?php
//INSERT INTO `notes` (`sno`, `title`, `description`, `timestamp`) 
//VALUES (NULL, 'FINISH MPT ASSIGMENT', 'COMPLETE MPT ASSIGMENT BY 3 RD APRIL', current_timestamp());
$insert=false;
$servername = "localhost";
$username = "root";
$password = "";
$database = "CRUD_APP";
$connection = mysqli_connect($servername, $username, $password, $database);
if (!$connection) {
    echo "error connecting";
}

if($_SERVER['REQUEST_METHOD']=='POST'){

    $title=$_POST["title"];
    $description=$_POST["desc"];
    
    
    $sql="INSERT INTO `notes` (`title`,`description`) VALUES ('$title','$description')";
    $result=mysqli_query($connection,$sql);
            if($result)
            {   //echo "note inserted";
                $insert=true;
                
    
            }
            else{
                echo "not inserted successfully because ".mysqli_error($connection);
            }



}







?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD APP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
    <script src="//cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script>
           $(document).ready(function(){
            $('#myTable').DataTable();
           }); 
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP CRUD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <?php
    if($insert)
    {
        echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Note Saved</strong> refer it whenever you need.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    
    
    
    
    
    ?>

    <div class="container my-4">
        <form action=" " method="post">
            <h2>Add a Note</h2>
            <div class="form-group">
                <label for="title">Note Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="notetitle">
            </div>
            <div class="mb-4">
                <label for="desc">Note Description</label>
                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <div class="container">
        

        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                 $sql = "SELECT * FROM `notes`";
                $result = mysqli_query($connection, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                    <th scope='row'>".$row['sno']."</th>
                    <td>".$row['title']."</td>
                    <td>".$row['description']."</td>
                    <td>Actions</td>
                </tr>";
                
                   
                }

        ?>
                
            </tbody>
        </table>



    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>