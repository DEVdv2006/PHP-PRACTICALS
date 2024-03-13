<?php
// Get the current date and time
$currentDatetime = new DateTime();

// Display in different formats
echo "1. Default Format: " . $currentDatetime->format('Y-m-d H:i:s') ."<br>";
echo "2. Date Only: " . $currentDatetime->format('Y-m-d') ."<br>";
echo "3. Time Only: " . $currentDatetime->format('H:i:s') ."<br>";
echo "4. Custom Format (YYYY-MM-DD HH:MM:SS): " . $currentDatetime->format('Y-m-d H:i:s') ."<br>";
echo "5. Custom Format (DD/MM/YYYY HH:MM AM/PM): " . $currentDatetime->format('d/m/Y h:i A') ."<br>";
?>
