<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
$food = ["Maggie", "Brownie", "Noodles","Cupcake"];
/*
Print every array element in a new line.
*/

echo "<pre>";
print_r($food);
echo "</pre>";


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/
$food = ["Maggie", "Pasta", "Pizza","Rice"];
echo "<ul>
    <li>$food[0]</li>
    <li>$food[1]</li>
    <li>$food[2]</li>
    <li>$food[3]</li>
    </ul>";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/
$food_assoc = [
    "Maggie" => "main course",
    "Brownie" => "dessert",
    "Noodles" => "main course",
    "Cupcake" => "dessert"
    ];
/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo "Maggie | {$food_assoc["Maggie"]}<br>";
echo "Brownie | {$food_assoc["Brownie"]}<br>";
echo "Noodles | {$food_assoc["Noodles"]}<br>";
echo "Cupcake | {$food_assoc["Cupcake"]}";




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc = [
    "Maggie" => [
        "type" => "main course",
        "origin" => "China"
    ],
    "Brownie" => [
        "type" => "dessert",
        "origin" => "India"
    ],
    "Noodles" => [
        "type" => "main course",
        "origin" => "China"    
    ],
    "Cupcake" => [
        "type" => "Dessert",
        "origin" => "America"
    ],
    
];
/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/
 
echo "Maggie | {$food_assoc["Maggie"]["type"]} | {$food_assoc["Maggie"]["origin"]}<br>";
echo "Brownie | {$food_assoc["Brownie"]["type"]} | {$food_assoc["Brownie"]["origin"]}<br>";
echo "Noodles | {$food_assoc["Noodles"]["type"]} | {$food_assoc["Noodles"]["origin"]}<br>";
echo "Cupcake | {$food_assoc["Cupcake"]["type"]} | {$food_assoc["Cupcake"]["origin"]}";



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>Maggie</td>
    <td>".$food_assoc['Maggie']['type']."</td>
    <td>".$food_assoc['Maggie']['origin']."</td>
  </tr>
  <tr>
    <td>Brownie</td>
    <td>".$food_assoc['Brownie']['type']."</td>
    <td>".$food_assoc['Brownie']['origin']."</td>
  </tr>
  <tr>
    <td>Noodles</td>
    <td>".$food_assoc['Noodles']['type']."</td>
    <td>".$food_assoc['Noodles']['origin']."</td>
  </tr>
  <tr>
    <td>Cupcake</td>
    <td>".$food_assoc['Cupcake']['type']."</td>
    <td>".$food_assoc['Cupcake']['origin']."</td>
  </tr>
</table>";



?>