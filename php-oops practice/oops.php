<?php
class Student{
    public $name;
    public $age;
    public $enrollment_num;
    public $branch;

    function get_attributes($name,$age,$enrollment_num,$branch){
        $this->name=$name;
        $this->age=$age;
        $this->enrollment_num=$enrollment_num;
        $this->branch=$branch;

    }

    function display()
    {
        echo $this->name."<br>".$this->age."<br>";
        echo $this->enrollment_num."<br>".$this->branch;
    }
}

$student1 = new Student();
$student1->get_attributes("dev",18,226020307052,"CE");
$student1->display();
?>