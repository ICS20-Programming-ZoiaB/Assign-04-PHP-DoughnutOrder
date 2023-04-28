<?php

 //setting a constant for tax
 define("HST", 0.13);
  
 //initializing variables
 $baseDoughnutCost = 0;
 $costToppings = 0;
 $numToppings = 0;
 $costDrinks = 0;

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

 //if the doughnut size is not selected
 else if ($size == 0) {
   $baseDoughnutCost = 0.00;
 }

 //if the doughnut size is large
 else {
   $baseDoughnutCost = 4.00;
 }

 //determining the number of checkboxes checked
 if(!empty($_POST["checkboxes"])) {
   $numToppings = count($_POST["checkboxes"]);
 }

 //determining the cost of the toppings using a variable and a constant for the price
 define("UNIT_PRICE_TOPPINGS", 0.50);

//Turn costToppings into $topping to make it compatible to multiply with float
 $costToppings = $numToppings * UNIT_PRICE_TOPPINGS;

 //constant and variables for drink
 define("UNIT_PRICE_DRINKS", 3.00);
//Turn numDrinks into $topping to make it compatible to multiply with float
 $costDrinks = $numDrinks * UNIT_PRICE_DRINKS;

 //calculating the subtotal, tax and total
 $subtotal = $baseDoughnutCost + $costToppings + $costDrinks;
 $tax = $subtotal * HST;
 $total = $subtotal + $tax;

 //displaying the totals to the screen
echo "Your order is a " . $size . " doughnut. " . "<br>For your doughnut, you chose " . $numToppings . " topping(s)." . "<br>You also decided to add " . $numDrinks . " drink(s) to your order." . "<br>Your subtotal is $" . number_format($subtotal, 2) . ".<br>The amount of HST added is $" . number_format($tax, 2) . ".<br> Your total is $" . number_format($total, 2) . ".";
?>