<?php
$carname = 'Swift';
if($carname == 'Safari' || $carname == 'Nexon' || $carname == 'Tigor' || $carname == 'Tiago')
{
  echo $carname." belongs to Tata company ";
}
elseif($carname == 'XUV700' || $carname == 'XUV300' || $carname == 'Bolero')
{
  echo $carname." belongs to Mahindra company ";
}
elseif($carname == 'i20' || $carname == 'Verna' || $carname == 'Venue' || $carname == 'Creta')
{
  echo $carname." belongs to Hyundai company ";
}

elseif($carname == 'Swift' || $carname == 'Alto' || $carname == 'Baleno' || $carname == 'Brezza')
{
  echo $carname." belongs to Suzuki company ";
}

else
{
  echo $carname." not belongs to any given company ";
}

?>