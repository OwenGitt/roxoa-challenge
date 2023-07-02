<?php
header('Content-type: text/plain');
require_once('./coffeeClass.php'); //Get access to webpage class to dynamically create webpage
$milk = "Oat Milk";
$art = "Pirate Ship";
$coffee = new coffee($milk, $art); //Create new webpage object
echo $coffee->giveCoffee();

?>
