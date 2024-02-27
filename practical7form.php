<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>EMPLOYEE INFO FORM</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <form action="practical7handle-form.php" method="post">
            <label for="name">Your Name</label>
            <input type="text" name="emp_name" id="emp_name">
            <br>

            <label for="emp_number">Employee Number</label>
            <input type="number" name="emp_number" id="emp_num">
            <br>

            <label for="join_date">Joining date</label>
            <input type="date" name="join_date" id="join_date">
            <br>
            
            <label for="description">Describe your job</label>
            <textarea name="description" id="description"></textarea>
            <br>

            <button type="submit">SUBMIT FORM</button>
        </form>
    </body>
</html>