<!-- 21.Write an HTML page to display a list of fruits in a list box. Write php program to
display the selected fruits in a webpage. -->


<!DOCTYPE html>
<html>
<body>
<form action="" method="POST"> Choose Your Favorite Fruit<br><br>

<select name="fruit">
<option value="">(Please Select)
<option value="Grape">Grape
<option value="Banana">Banana
<option value= "Chicku">Chicku
<option value="Apple">Apple
<option value="Orenge">Orange
<option value="Pine Apple">Pine Apple
</select><br><br>
<input type="submit" value="Ok">

</form>
</body>
</html>

<?php 
if($_POST){
echo "<h2> Your selected fruit is </h2>";
echo $_POST["fruit"];
}
?>
