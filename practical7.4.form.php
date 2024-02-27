<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hidden Variables and post method</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>
        <form action="practical7.4.handle-form.php" method="post">
            <label for ="my_name">Enter your name</label>
            <input type="text" name="my_name" id="my_name">
            <br>
            <label for ="message">This will not show</label>
            <input type="hidden" name="message" value="Hello from practical7.4.form">
            <button type="submit">SUBMIT</button>

        </form>
    </body>
</html>