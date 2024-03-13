<!DOCTYPE html>

<html>
    <head>
        
    </head>
    <body>
        <form action="" method="get">
            <input type="number" name="amount" id="amount">
            <label for="amount">Enter your Money amount</label>
            <button type="submit">SUBMIT</button>
        </form>
   
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

        $amount = $_GET["amount"];
        $total_notes = calculate_notes($amount);
        echo "minimum notes required " . $total_notes . "";

        ?>
 </body>
</html>