<?php

//setting a constant for tax, unit price of toppings and unit price of drinks
define("HST", 0.13);
define("UNIT_PRICE_TOPPINGS", 0.50);
define("UNIT_PRICE_DRINKS", 3.00);

//initializing variables
$baseDoughnutCost = 0;
$costToppings = 0;
$numToppings = 0;
$costDrinks = 0;

//declaring variables for base doughnut and drink
$size = $_POST["doughnutSize"];
$numDrinks = intval($_POST["drinks-number"]);
$drink = $_POST["drink"];

//if the doughnut size is small
if ($size == "small") {
  $baseDoughnutCost = 2.00;
}
  
//if the doughnut size is medium
else if ($size == "medium") {
  $baseDoughnutCost = 3.00;
}
  
//if the doughnut size is not selected
else if ($size == 0) {
  $baseDoughnutCost = 0.00;
}

//if the doughnut size is large
else {
  $baseDoughnutCost = 4.00;
}

//Makes sure everything is zero if doughnut is not selected
if ($size == "0") {
  $numToppings = 0;
  $costToppings = 0;
}

//determining the number of checkboxes checked
if(!empty($_POST["checkboxes"])) {
  $numToppings = count($_POST["checkboxes"]);
}

//Calculate cost of toppings
$costToppings = $numToppings * UNIT_PRICE_TOPPINGS;

//Set number of drinks to zero if user does not select a flavour
if ($drink == "" || $drink == "0") {
  $numDrinks = 0;
}

//Calculate cost of drinks
$costDrinks = $numDrinks * UNIT_PRICE_DRINKS;

//calculating the subtotal, tax and total
$subtotal = $baseDoughnutCost + $costToppings + $costDrinks;
$tax = $subtotal * HST;
$total = $subtotal + $tax;

//displaying the totals to the screen
echo "Your order is a " . $size . " doughnut. " . "<br>For your doughnut, you chose " . $numToppings . " topping(s)." . "<br>You also decided to add " . $numDrinks . " drink(s) to your order." . "<br>Your subtotal is $" . number_format($subtotal, 2) . ".<br>The amount of HST added is $" . number_format($tax, 2) . ".<br> Your total is $" . number_format($total, 2) . ".";
?>