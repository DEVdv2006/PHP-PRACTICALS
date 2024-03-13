<?php 
class Fruits   
{
    public $fruit_name;
    public $fruit_colour;

    public function __construct($fruit_name,$fruit_colour)
    {
        $this->fruit_name=$fruit_name;
        $this->fruit_colour=$fruit_colour;
    }

    public function __destruct()
    {
        echo "Destructor is called "."<br>";
        echo $this->fruit_name." with ".$this->fruit_colour." colour is destroyed";
    }
}

$apple = new Fruits("Apple","red");
echo "public property1(fruit name) ".$apple->fruit_name."<br>";
echo "public property2(fruit colour) ".$apple->fruit_colour."<br>";
?>