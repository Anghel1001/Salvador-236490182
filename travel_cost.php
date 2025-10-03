<?php
$distance = 300; 
$fuel_consumption = 30; 
$fuel_price = 70; 
$cost = ($distance / $fuel_consumption) * $fuel_price;
echo "Estimated Travel Cost: $cost PHP";

?>