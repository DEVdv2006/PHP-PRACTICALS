<?php
class Fruit  
{
    private $fruit_colour;
    private $fruit_name;

    public function set_attribute($fruit_colour,$fruit_name)
    {
        $this->fruit_colour=$fruit_colour;
        $this->fruit_name=$fruit_name;

    }
    public function get_attribute()
    {
       echo $this->fruit_colour."<br>".$this->fruit_name;

    }

}
$fobj1=new Fruit();
$fobj1->set_attribute("red","apple");
$fobj1->get_attribute();
?>