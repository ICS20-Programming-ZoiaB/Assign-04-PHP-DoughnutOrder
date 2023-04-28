<!DOCTYPE html>
<html lang="en-ca">
 <head>

   <!-- Metadata -->
   <meta charset="utf-8">
   <meta name="description" content="Doughnut Order">
   <meta name="keywords" content="immaculata, ics2o">
   <meta name="author" content="ZoiaB">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- Code for the favicon -->
   <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
   <link rel="manifest" href="./fav_index/android-chrome-512x512.png">
   
   <!-- Code for the MDL -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

   <!-- Stylesheet -->
   <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-light_blue.min.css" />

   <!-- Title -->
   <title>Doughnut Order</title>
 </head>
 <body>
   
   <!-- Link to js file -->
   <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
   <script src="./js/script.js"></script>

   <!-- Header -->
   <?php echo "<h1>Doughnut Order</h1>"; ?>

   <!-- Image -->
   <img src="./images/sprinkle_doughnut.webp" alt="Doughnuts" width="400" length="400">
     
   <!-- Text for welcome message -->
   <br><br>
   <?php echo "<p>Welcome to our doughnut ordering webpage! Below are different sizes and toppings so that you can customize your doughnut.</p>"; ?>

   <!-- Table for placing the menu/prices and user order side-by-side -->
   <?php echo "<h4>Our Menu and Prices:</h4>"; ?>

     <!-- Table listing sizes -->
     <table>
       <tr>
         <th class="border">Size</th>
         <th class="border">Price</th>
       </tr>
       <tr>
         <td class="border">Small</td>
         <td class="border">$2.00</td>
       </tr>
       <tr>
         <td class="border">Medium</td>
         <td class="border">$3.00</td>
       </tr>
       <tr>
         <td class="border">Large</td>
         <td class="border">$4.00</td>
       </tr>
       <tr>
         <td class="border">Frozen drink</td>
         <td class="border">$3.00 each</td>
       </tr>
     </table>

   <!-- Table listing toppings -->
   <br><br>
   <table>
     <tr>
       <th class="border">Topping</th>
       <th class="border">Price</th>
     </tr>
     <tr>
       <td class="border">Sprinkles</td>
       <td class="border">$0.50</td>
     </tr>
     <tr>
       <td class="border">Chocolate shavings</td>
       <td class="border">$0.50</td>
     </tr>
     <tr>
       <td class="border">Skor bits</td>
       <td class="border">$0.50</td>
     </tr>
     <tr>
       <td class="border">Caramel syrup</td>
       <td class="border">$0.50</td>
     </tr>
   </table>
   
   <!-- Form for user input -->
   <form action="./results.php" method="post" target="results">
     
     <!-- Multiple choice - picking a doughnut size and drink type -->
     <?php echo "<h4>Choose size of doughnut:</h4>"; ?>
     <label for="doughnut-size">Choose a size for the doughnut</label>
     <select id="doughnut-size" name="doughnut-size">
       <option value="0">-- Size --</option>
       <option value="small">Small</option>
       <option value="medium">Medium</option>
       <option value="large">Large</option>
     </select><br><br>
     
     <!-- MDL checkboxes for Drink -->
     <?php echo "<h4>Choose Your Doughnut Toppings:</h4>"; ?>
     
       <!-- First checkbox - Sprinkles -->
       <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
         <span class="mdl-checkbox__label">Sprinkles</span>
         <input type="checkbox" id="sprinkles" name="checkboxes[]" value="1" class="mdl-checkbox__input"><br><br>
       </label>
  
       <!--Second checkbox - Chocolate Shavings -->
       <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
         <span class="mdl-checkbox__label">Chocolate shavings</span>
         <input type="checkbox" id="chocolate-shavings" name="checkboxes[]" value="1" class="mdl-checkbox__input"><br><br>
       </label>
       
       <!-- Third checkbox - Skor bits -->
       <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
         <span class="mdl-checkbox__label">Skor bits</span>
         <input type="checkbox" id="skor-bits" name="checkboxes[]" value="1" class="mdl-checkbox__input"><br><br>
       </label>
       
       <!-- Fourth checkbox - Caramel syrup -->
       <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
         <span class="mdl-checkbox__label">Caramel syrup</span>
         <input type="checkbox" id="caramel-syrup" name="checkboxes[]" value="1" class="mdl-checkbox__input"><br><br>
       </label>
     
     <!-- Multiple choice - drink type -->
     <?php echo "<h4>Choose type of drink:</h4>"; ?>
     <label for="drink">Choose drink type</label>
     <select id="drink" name="drink">
       <option value="0">-- Flavour --</option>
       <option value="mango">Mango</option>
       <option value="oreo">Oreo</option>
       <option value="fudge">Fudge</option>
       <option value="raspberry">Raspberry</option>
     </select>
     
     <!-- MDL number input with floating label for drink -->
     <?php echo "<h4>Choose number of drinks</h4>"; ?>
     <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
       <input class="mdl-textfield__input" type="number" id="drinks-number" step="1" value="0" min="0" max="6" name="drinks-number">
       <label class="mdl-textfield__label" for="drinks-number">Pick a number of drinks:</label>
     </div>
     <br>
     
     <!-- Submit button styling -->
     <input type="submit" id="submit" value="Submit Your Order" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
   
     <!--Iframe for results-->
     <iframe id="results" name="results"></iframe>
     <br>
   </form>
 </body>
</html>