<?php

//setting a constant for tax
define("HST", 0.13);

//initializing variables
$baseDoughnutCost = 0;

//declaring variables for base doughnut and drink
$small = $_POST["small"];
$medium = $_POST["medium"];
$large = $_POST["large"];
$numDrinks = intval($_POST["drinks"]);

//determining the number of checkboxes checked
$numToppings = count($_POST["toppings"]);

//determining the cost of the toppings using a variable and a constant for the price
define("UNIT_PRICE_TOPPINGS", 0.50);
$costToppings = $numToppings * UNIT_PRICE_TOPPINGS;

//determining the cost of the base doughnut using compound if/then statements
$doughnutSize = "";
if ($small != "") {
    $doughnutSize = "small";
    $baseDoughnutCost = 2.00;
} elseif ($medium != "") {
    $doughnutSize = "medium";
    $baseDoughnutCost = 3.00;
} elseif ($large != "") {
    $doughnutSize = "large";
    $baseDoughnutCost = 4.00;
}

//determining the cost of the sides using constants
define("UNIT_PRICE_DRINKS", 3.00);
$costDrinks = $numDrinks * UNIT_PRICE_DRINKS;

//calculating the subtotal, tax and total
$subtotal = $baseDoughnutCost + $costToppings + $costDrinks;
$tax = $subtotal * HST;
$total = $subtotal + $tax;

//displaying the totals to the screen
    echo "Your subtotal is $" . number_format($subtotal, 2) . ".<br>The amount of HST added is $" . number_format($tax, 2) . ".<br>Your total is $" . number_format($total, 2) . ".";
}
?>