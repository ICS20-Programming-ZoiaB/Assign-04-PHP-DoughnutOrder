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

//determining the cost of the base doughnut using if/then statements
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












 //initializing variables
 let baseDoughnutCost = 0;
 let doughnutSize = 0;

//declaring variables for base doughnut and drink
 let size = document.getElementById("doughnutSize").value;
  let numDrinks = parseInt(document.getElementById("drinks-number").value);

 //if the doughnut size is small
 if (size == "small") {
   baseDoughnutCost = 2.00;
 }

 //if the doughnut size is medium
 else if (size == "medium") {
   baseDoughnutCost = 3.00;
 }


 //if the doughnut size is large
 else {
   baseDoughnutCost = 4.00;
 }

 //determining the number of checkboxes checked
  let checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
let numToppings = checkboxes.length;

 //determining the cost of the toppings using a variable and a constant for the price
 const UNIT_PRICE_TOPPINGS = 0.50;
 let costToppings = numToppings * UNIT_PRICE_TOPPINGS;

 //constant and variables for drink
 const UNIT_PRICE_DRINKS = 3.00;
 let costDrinks = numDrinks * UNIT_PRICE_DRINKS;

 //calculating the subtotal, tax and total
 let subtotal = baseDoughnutCost + costToppings + costDrinks;
 let tax = subtotal * HST;
 let total = subtotal + tax;

 //displaying the totals to the screen
 document.getElementById("results").innerHTML = "Your subtotal is $" + subtotal.toFixed(2) + ".<br>The amount of HST added is $" + tax.toFixed(2) + ".<br>Your total is $" + total.toFixed(2) + ".";
}