<?php
$string="DEV";
$encoded_string=""; 
$morse_code= array("A"  => "._",
"B"  => "_...",
"C"  => "_._.",
"D"  => "_..",
"E"  => ".",
"F"  => "..__.",
"G"  => "__.",
"H"  => "....",
"I" => "..",
"J"  => ".___",
"K"  => "_._",
"L"  => "._..",
"M"  => "__",
"N"  => "_.",
"O"  => "___",
"P"  => ".__.",
"Q"  => "__._",
"R"  => "._.",
"S"  => "...",
"T"  => "_",
"U"  => ".._",
"V"  => "..._",
"W"  => ".__",
"X"  => "_.._",
"Y"  => "_.__",
"Z"  => "__..",
);
//var_dump($morse_code);
$i=0;
while(isset($string[$i]))
{
    foreach($morse_code as $key=>$value)
    {   //echo "KEY ".$key." Value ".$value."<br>";
        if($string[$i]==$key)
        {
            $encoded_string = $encoded_string.$value;
        }

    }
    $i++;
}

echo"Encoded string is ->".$encoded_string;

?>