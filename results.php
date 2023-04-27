<?php

 //setting a constant for tax
 define("HST", 0.13);
  
 //initializing variables
 $baseDoughnutCost = 0;
 $doughnutSize = 0;
 $costToppings = 0;

//declaring variables for base doughnut and drink
 $size = $_POST["doughnutSize"];
 $numDrinks = intval($_POST["drinks-number"]);

 //if the doughnut size is small
 if ($size == "small") {
   $baseDoughnutCost = 2.00;
 }

 //if the doughnut size is medium
 else if ($size == "medium") {
   $baseDoughnutCost = 3.00;
 }

 //if the doughnut size is large
 else {
   $baseDoughnutCost = 4.00;
 }

 //determining the number of checkboxes checked
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $numToppings = $_POST["checkboxes"];
}

 //determining the cost of the toppings using a variable and a constant for the price
 define("UNIT_PRICE_TOPPINGS", 0.50);

//Turn costToppings into $topping to make it compatible to multiply with float
foreach ($numToppings as $topping) {
    $costToppings += $topping * UNIT_PRICE_TOPPINGS;
}

 //constant and variables for drink
 define("UNIT_PRICE_DRINKS", 3.00);
//Turn costToppings into $topping to make it compatible to multiply with float
foreach ($numToppings as $topping) {
 $costDrinks = $topping * UNIT_PRICE_DRINKS;
}

 //calculating the subtotal, tax and total
 $subtotal = $baseDoughnutCost + $costToppings + $costDrinks;
 $tax = $subtotal * HST;
 $total = $subtotal + $tax;

 //displaying the totals to the screen
foreach ($numToppings as $topping) {

echo "Your order is a " . $size . " doughnut. " . "For your doughnut, you chose " . $topping . " topping(s). You also decided to add " . $numDrinks . " drink(s) to your order " .
"Your subtotal is $" . number_format($subtotal, 2) . ".<br>The amount of HST added is $" . number_format($tax, 2) . ".<br>Your total is $" . number_format($total, 2) . ".";
}
?>