<!-- 23. Display Multiplication table using PHP and AJAX -->

<!DOCTYPE html>
<html>
<body>
<h3>Multiplication table (upto 15)</h3>
<form action="" method="POST">
Enter a number: <input type="text" name="num">
<input type="submit">
</form>
</body>
</html>

<?php
if($_POST)
{
$number=$_POST['num'];
for($i=1;$i<=15;$i++)
echo $i."*".$number."=".$i*$number."<br>";
}
?>

