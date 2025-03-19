<!-- 22.Write a PHP program to create an array and store 10 names in the array. Do the
following operations.
a. Display the contents using for each statement.
b. Display the array in a sorted order.
c. Display the array without the duplicate elements
d. Remove the last element and display
e. Display the array in reverse order
f. Search an element in the given array. -->

<html> 
<body>
<h2>Array Operations</h2><br>

<form action="" method="post">
<?php
echo <<<HTML
<br>
<input type="radio" name="arr" value="display">Display Array<br>
<input type="radio" name="arr" value="sort">Sorted Array<br>
<input type="radio" name="arr" value="dupes">Without Duplicate<br>
<input type="radio" name="arr" value="pop">Delete Last<br>
<input type="radio" name="arr" value="rev">Array Reverse<br>
<input type="radio" name="arr" value="search">Array Search<br>
<input type="text"  name="searchName" placeholder="Enter name to search"><br>
<input type="submit">
HTML;
$names = array("Hamdan","Hamdan" ,"Ali", "Peter", "Shaima", "Raniya", "Thabsheer", "Amjith", "Shibin", "Shamil", "Anshad");
?>
</body>
</html>

<?php 
if($_POST)
{
$val=$_POST['arr'];
switch($val)
{
case "display":
    foreach($names as $value) 
    echo "<br>".$value;
break;

case "sort":
    sort($names); 
    foreach($names as $value)
    echo "<br>".$value;
break;

case "dupes":
    $dupes=array_unique($names); 
    foreach($dupes as $value)
    echo "<br>".$value;
break; 

case "pop":
    array_pop($names); 
    foreach($names as $value)
    echo "<br>".$value;
break;

case "rev":
    $revarr=array_reverse($names); 
    foreach($revarr as $value)
    echo "<br>".$value;
break; 

case "search":
    $searchName = $_POST['searchName'];
    $index = array_search($searchName, $names, true);
    if ($index !== false) {
        echo "<br>Found '$searchName' at index: $index";
    } else {
        echo "<br>'$searchName' not found in the array.";
    }  
break;
}
}
?>
