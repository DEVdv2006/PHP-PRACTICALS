<?php
$basic_sal = $_POST['basic'];
$da = $basic_sal*0.5;
$hra = $basic_sal*0.1;
$med = $basic_sal*0.04;
$gross_sal = $basic_sal + $da + $hra + $med;
$insurance = $gross_sal*0.07;
$pf = $gross_sal*0.05;
$dedcution = $insurance + $pf;

echo " Basic salary is ".$basic_sal."<br>";
echo " Gross salary is ".$gross_sal."<br>";
echo " DA is ".$da."<br>";
echo " HRA is".$hra."<br>";
echo " Medical is ".$med."<br>";
echo " PF is ".$pf."<br>";
echo " Insurance is ".$insurance."<br>";
echo " Deduction is ".$dedcution."<br>";

?>