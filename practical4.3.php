<?php
$matrix1 = array(   array(1,2,3),
                    array(4,5,6),
                    array(7,8,9),
                );
$matrix2 = array(   array(1,2,3),
                    array(4,5,6),
                    array(7,8,9),
                );
for($i=0;$i<count($matrix1);$i++)
{
    for($j=0;$j<count($matrix2);$j++)
    {
        $matrix3[$i][$j]=$matrix1[$i][$j]*$matrix2[$i][$j];
    }
}

for($i=0;$i<count($matrix1);$i++)
{
    for($j=0;$j<count($matrix2);$j++)
    {
       echo $matrix3[$i][$j]."\t"."\t";
    }
    echo "<br>";
}            

?>