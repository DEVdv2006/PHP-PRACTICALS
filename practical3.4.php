<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
    <form action="" method="get">
      <input type="number" name="num" id="num">
      <label for="num">Enter number for multiplication table</label>
      <button type="submit">SUBMIT</button>
    </form>

    <?php
          $i = 1;
          $num =$_GET["num"];;
          while($i<=10)
          {
            echo $num." X ".$i." = ".$num*$i."<br>";
            $i++;
          }

    ?>
  </body>
</html>



