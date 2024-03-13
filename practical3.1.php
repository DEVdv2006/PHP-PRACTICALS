<?php
$carname = $_GET['car'];
$tata=array("Safari","Nexon","Tigor","Tiago");
$mahindra=array('XUV700','XUV300','Bolero');
$hyundai=array('i20','Verna','Venue','Creta');
$suzuki=array('Swift','Alto','Baleno','Brezza');
foreach($tata as $t)
{
   if($carname==$t)
   {
    echo $carname." belongs to Tata company ";
   }
}
foreach($mahindra as $m)
{
   if($carname==$m)
   {
    echo $carname." belongs to Mahindra company ";
   }
}
foreach($hyundai as $h)
{
   if($carname==$h)
   {
    echo $carname." belongs to Hyundai company ";
   }
}
foreach($suzuki as $s)
{
   if($carname==$s)
   {
    echo $carname." belongs to Suzuki company ";
   }
}
?>