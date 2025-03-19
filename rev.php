<!-- 13.Write a PHP function to reverse a string -->

<html>
<body>
<form action="" method="POST">
<h1>Reverse of a string</h1>
Enter the String: <input type="text" name="str" />
<input type="submit" name="submit" />
</form>
</html>

<?php
function reverse()
{
if($_POST)
{
$string=$_POST["str"];
$len=strlen($string);   
for($i=($len-1);$i>=0;$i--) // (len -1) gives the last letter 
{
echo $string[$i];
}
}
}

if(isset($_POST['submit']))
{
reverse();
}
?>
