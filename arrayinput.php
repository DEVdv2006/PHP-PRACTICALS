<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Array Input</title>
</head>
<body>
    <form method="post" action="">
        <label for="num_items">Number of items:</label>
        <input type="number" name="num_items" id="num_items" min="1" max="10" required><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num_items = $_POST["num_items"];
            for ($i = 0; $i < $num_items; $i++) {
                echo '<label for="item' . $i . '">Item ' . ($i + 1) . ':</label>';
                echo '<input type="text" name="items[]" id="item' . $i . '" required><br>';
            }
        }
        ?>
        <input type="submit" value="Submit">
    </form>
    <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $items = $_POST["items"];
                    foreach ($items as $item) {
                        echo $item . "<br>";
                    }
                }
    ?>

</body>
</html>

