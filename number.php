<!-- 14.Write a PHP program to check whether a given number is perfect, abundant or
deficient. -->

<html>
<body>
<h2>Perfect, Abundant or Deficient</h2>
<form action="" method="POST">
Enter the number:
<input type="text" name="number"/>
<input type="submit" name="submit"/>
</form>
</body>
</html>

<?php
function checknumber()
{
if($_POST)
{
$no = $_POST['number'];
$sum=0;
for ($i=1;$i<$no;$i++)  //refer number.html (same logic)
{
if ($no % $i==0)
$sum=$sum + $i;
}
if($sum == $no)
echo"Perfect Number";

else if($sum>$no)
echo "Abundant Number";

else
echo"Deficient Number";
}
}

if(isset($_POST['submit']))
{
checknumber();
}
?>
