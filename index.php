<!DOCTYPE html>
<html lang="en-ca">
 <head>

   <!-- Metadata -->
   <meta charset="utf-8">
   <meta name="description" content="Doughnut Order, with PHP">
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
   <title>Doughnut Order, with PHP</title>
 </head>
 <body>

   <!-- Header -->
   <h1>Doughnut Order, with PHP</h1>

   <!-- Image -->
   <img src="./images/doughnuts.jpg" alt="Doughnuts" width="400" length="400">
     
   <!-- Text for welcome message -->
   <br><br>
   <p>Welcome to our doughnut ordering webpage! Below are different sizes and toppings so that you can customize your doughnut.</p>

   <!-- Table for placing the menu/prices and user order side-by-side -->
   <h4>Our Menu and Prices:</h4>

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

             <!-- Multiple choice - picking a doughnut size -->
             <h4>Choose size and toppings:</h4>
             <label for="size">Choose a size for the doughnut</label>
             <select id="size" name="size">
               <option value="0">-- Size --</option>
               <option value="small">Small</option>
               <option value="medium">Medium</option>
               <option value="large">Large</option>
             </select><br><br>

             <!-- Multiple choice - picking toppings -->
             <label for="flavour">Choose toppings</label>
             <select id="flavour" name="flavour">
               <option value="0">-- Toppings --</option>
               <option value="skittles">Skittles</option>
               <option value="chocolate shavings">Chocolate shavings</option>
               <option value="skor bits">Skor bits</option>
               <option value="caramel syrup">Caramel syrup</option>
             </select>
          
             <!-- MDL checkboxes for Drink -->
             <h4>Choose Your Frozen drink:</h4>
          
             <!-- First checkbox - Oreo drink -->
             <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
               <span class="mdl-checkbox__label">Oreo</span>
               <input type="checkbox" id="oreo" name="oreo" class="mdl-checkbox__input"><br><br>
             </label>

             <!--Second checkbox - Mango Drink -->
             <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
               <span class="mdl-checkbox__label">Mango</span>
               <input type="checkbox" id="mango" name="mango" class="mdl-checkbox__input"><br><br>
             </label>

             <!-- Third checkbox - Fudge -->
             <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
               <span class="mdl-checkbox__label">Fudge</span>
               <input type="checkbox" id="fudge" name="fudge" class="mdl-checkbox__input"><br><br>
             </label>

             <!-- Fourth checkbox - Raspberry -->
             <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect">
               <span class="mdl-checkbox__label">Raspberry</span>
               <input type="checkbox" id="raspberry" name="raspberry" class="mdl-checkbox__input"><br><br>
             </label>

             <!-- MDL number input with floating label for garlic potato side -->
             <h4>Choose number of drinks</h4>
             <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
               <input class="mdl-textfield__input" type="number" id="drinks" step="1" value="0" min="0" max="6" name="drinks">
               <label class="mdl-textfield__label" for="drinks">Pick a number of drinks:</label>
             </div><br>

             <!-- Adding id to submit button for styling -->
             <input type="submit" id="red" value="Submit Your Order" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">

          <!-- Iframe -->
          <iframe id="results" name="results"></iframe>
 </body>
</html>