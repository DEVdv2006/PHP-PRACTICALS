<?php 
$my_array = array(23,12,56,9,7);
$i =0;$j=0;
$size=count($my_array);
for($i=0;$i<$size;$i++)
{
    for($j=0;$j<$size-$i-1;$j++)
    {  if($my_array[$j]>$my_array[$j+1])
        {
            $temp= $my_array[$j+1];
            $my_array[$j+1]=$my_array[$j];
            $my_array[$j] = $temp;
        }

    }
}

for($i=0;$i<$size;$i++)
{
    echo $my_array[$i]."<br>";
}
?>