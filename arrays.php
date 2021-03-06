<?php

/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

$food = ['shawarma', 'poutine', 'cheese cake', 'sushi'];

/*
Print every array element in a new line.
*/

echo "{$food[0]}<br>";
echo "{$food[1]}<br>";
echo "{$food[2]}<br>";
echo "{$food[3]}<br>";
;


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
*/

$i = 0;

echo "<ul>";
    echo "<li>{$food[$i]}";
    $i++;
    echo "<li>{$food[$i]}";
    $i++;
    echo "<li>{$food[$i]}";
    $i++;
    echo "<li>{$food[$i]}";
    $i++;
echo "</ul>";

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
   "shawarma" => "main course", 
   "poutine" => "main course",
   "cheese cake" => "dessert",
   "sushi" => "main course"
];

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

echo "{$food[0]} | {$food_assoc[$food[0]]}<br>";
echo "{$food[1]} | {$food_assoc[$food[1]]}<br>";
echo "{$food[2]} | {$food_assoc[$food[2]]}<br>";
echo "{$food[3]} | {$food_assoc[$food[3]]}<br>";


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

$food_origin = [
   "shawarma" => "Lebanon", 
   "poutine" => "Canada",
   "cheese cake" => "United States",
   "sushi" => "Japan"
];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

echo "{$food[0]} | {$food_assoc[$food[0]]} | {$food_origin[$food[0]]}<br>";
echo "{$food[1]} | {$food_assoc[$food[1]]} | {$food_origin[$food[1]]}<br>";
echo "{$food[2]} | {$food_assoc[$food[2]]} | {$food_origin[$food[2]]}<br>";
echo "{$food[3]} | {$food_assoc[$food[3]]} | {$food_origin[$food[3]]}<br>";


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

echo "<table>";
  echo "<tr>";
    echo "<th>{$food[0]}</th>";
    echo "<th>{$food_assoc[$food[0]]}</th>";
    echo "<th>{$food_origin[$food[0]]}</th>";
  echo "</tr>";
  echo "<tr>";
    echo "<th>{$food[1]}</th>";
    echo "<th>{$food_assoc[$food[1]]}</th>";
    echo "<th>{$food_origin[$food[1]]}</th>";
  echo "</tr>";
  echo "<tr>";
    echo "<th>{$food[2]}</th>";
    echo "<th>{$food_assoc[$food[2]]}</th>";
    echo "<th>{$food_origin[$food[2]]}</th>";
  echo "</tr>";
  echo "<tr>";
    echo "<th>{$food[3]}</th>";
    echo "<th>{$food_assoc[$food[3]]}</th>";
    echo "<th>{$food_origin[$food[3]]}</th>";
  echo "</tr>";
echo "</table>";

?>