<!DOCTYPE html>

<html>
    <head>
       
    </head>
    <body>
        <form action=""method="post">
            <input type="text" name="string" id="string">
            <label for="string">Enter a String</label>
            <button type="submit">Submit</button>
        </form>
        <?php 
            $my_string=$_POST['string'];
            $alphabets = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
            $word_count=0;
            $count = 0;
            for($i = 0;isset($my_string[$i]);$i++)
            {   foreach($alphabets as $word)
                {
                    if($my_string[$i]==$word)
                    {
                            $word_count++;
                    }
                }
                $count++;
            }
            echo "Length of string " .$count."<br>";
            echo "Total alphabets are ".$word_count;

        ?>
    </body>
</html>

























