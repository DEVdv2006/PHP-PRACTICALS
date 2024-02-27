<?php

function calculate_notes($money_amount)
{
    $notes = 0;
    $denominations = [100, 50, 20, 10, 5, 2, 1];
    
        foreach ($denominations as $i) {
            while ($money_amount >= $i ) {
                $money_amount -= $i;
                $notes++;
            }
        }
    
    return $notes;
}

$amount = 227;
$total_notes = calculate_notes($amount);
echo "" . $total_notes . "";

?>
