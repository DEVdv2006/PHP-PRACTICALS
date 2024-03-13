<!DOCTYPE html>
<html>
    <body>
        <form action="" method="get">
            <input type="number" name="rangenum1" id="rangenum1">
            <input type="number" name="rangenum2" id="rangenum2">
            <input type="number" name="num" id="num">
            <input type="number" name="angle" id="angle">
            <button type="submit">SUBMIT</button>
        </form>        
        <?php
        $r1=$_GET["rangenum1"];
        $r2=$_GET["rangenum2"];
        $angle=$_GET["angle"];
        $random=rand($r1,$r2);
        $num = $_GET["num"];
        echo "Random number ".$random."<br>";
        echo "Binary of given number is ".decbin($num)."<br>";
        echo "Octal of given number is ".decoct($num)."<br>";
        echo "Hexadecimal of given number is ".dechex($num)."<br>";


        echo "Sine of given angle is ".sin($angle)."<br>";
        echo "Cosine of given angle is ".cos($angle)."<br>";
        echo "Tan of given angle is ".tan($angle)."<br>";

        ?>
</body>
</html>