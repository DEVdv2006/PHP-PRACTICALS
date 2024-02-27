<?php

$basicsal = 50000;
$da = $basicsal*0.5;
$hra = $basicsal*0.1;
$med = $basicsal*0.04;
$grosssal = $basicsal + $da + $hra + $med;
$insurance = $grosssal*0.07;
$pf = $grosssal*0.05;
$dedcution = $insurance + $pf;

echo " Basic salary is ".$basicsal."<br>";
echo " Gross salary is ".$grosssal."<br>";
echo " DA is ".$da."<br>";
echo " HRA is".$hra."<br>";
echo " Medical is ".$med."<br>";
echo " PF is ".$pf."<br>";
echo " Insurance is ".$insurance."<br>";
echo " Deduction is ".$dedcution."<br>";
















?>