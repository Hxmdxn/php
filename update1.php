<!-- 20.Create a table bank with the following fields accno, cust_name, balance. Insert
some Records. Design HTML page to accept Account Number and amount using
TextBoxes and type of transaction (Deposit or Withdrawal) using Radio Button.
Write PHP program to update balance according to the transaction -->


<?php if($_POST)
{
$bln=$_POST['bal'];
$no=$_POST['acc'];
$con = pg_connect("host=localhost port=5432 dbname=test user=postgres password=iisj123");

if ($con)
{
$qry1="select * from bank";
$qry2="update bank SET balance=$bln where accno = $no";
$result1=pg_query($con, $qry1);
while ($row = pg_fetch_row($result1))
{
echo "<br>\n";
echo "accno: $row[0] <br>name: $row[1]<br> balance: $row[2]";
}
}
echo "<font color=red><br><br>Database Changed<br></font>";
$result2=pg_query($con, $qry2);
$result1=pg_query($con, $qry1);
while ($row = pg_fetch_row($result1))
{
echo "<br>\n";
echo "accno: $row[0] <br>name: $row[1]<br> balance: $row[2]";
}
}
?>
