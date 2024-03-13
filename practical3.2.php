<?php 
$m1=10;$m2=50;$m3=80;$m4=30;
$avg=($m1+$m2+$m3+$m4)/4;
if($avg>=85 && $avg<=100){ echo"Your grade is AA";}
elseif($avg>= 75&& $avg<= 84){ echo "Your grade is AB";}
elseif($avg>=65 && $avg<= 74){ echo "Your grade is BB";}
elseif($avg>= 55&& $avg<= 64){ echo "Your grade is BC";}
elseif($avg>= 45&& $avg<= 54){ echo "Your grade is CC";}
elseif($avg>= 40&& $avg<= 44){echo "Your grade is CD";}
elseif($avg>= 35&& $avg<= 39){ echo "Your grade is DD";}
else{ echo "You are fail"; }



?>