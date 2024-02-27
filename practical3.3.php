<?php
$fibsequence = 5;
$a = 0;
$b = 1;
$temp = 0;
$i =1;
while($i<=$fibsequence)
{
  
  echo $b."<br>";
  $temp = $a +$b;
  $a = $b;
  $b = $temp;
  $i++;
  
}



?>