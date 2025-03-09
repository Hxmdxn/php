<!-- 20.Create a table bank with the following fields accno, cust_name, balance. Insert
some Records. Design HTML page to accept Account Number and amount using
TextBoxes and type of transaction (Deposit or Withdrawal) using Radio Button.
Write PHP program to update balance according to the transaction -->


<html>
<head>
<title>selecting of data from PHP</title></head>
<body>
<form method="POST" action= "select.php">
Acc number:<input type="text" name="acc"/><br><br><br>
Name:<input type="text" name="iname"/><br><br><br>
Withdrawal<input type=radio id="b" name="bank" value="Deposit"><br><br><br>
Deposit<input type=radio id="b" name="bank" value="Withdrawal"><br><br><br>
<input type="submit" value="ok">
</form> </body> </html>
<?php if($_POST)
{
$no=$_POST['acc'];
$con = pg_connect("host=localhost port=5432 dbname=test user=postgres password=iisj123");

if($con)
{
$qry="select *from bank where accno=$no";
$result=pg_query($con,$qry);
while ($row = pg_fetch_row($result))
{
echo "<br>\n";
echo "Acc_no: $row[0] <br>Name: $row[1]<br> Balance: $row[2]";
}
}
}
?>