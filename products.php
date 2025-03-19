<!-- 19.Create a table product with fields itemcode, itemname, unitprice. 
 Write PHP program to insert 5 records into the table and display it in a table format. -->

<html>
    <head>
        <title>Product</title> 
    </head> 
<body>
<h1>
    <center>List of Products</center>
</h1>
<form method="POST" action= " ">
Item Code:<input type="text" name="icode"/><br><br><br>
Item Name:<input type="text" name="iname"/><br><br><br>
Unit Price:<input type="text" name="iprice"/><br><br><br>

<input type="submit" value="Display">
</form> 
</body> 
</html>

<?php 
if($_POST)
{
$no=$_POST['icode'];
$name=$_POST['iname'];
$price=$_POST['iprice'];
$con = pg_connect("host=localhost port=5432 dbname=test user=postgres password=iisj123");
if($con){
$qry="insert into products (itemcode,itemname,unitprice) values ($no, '$name', $price)";
$result=pg_query($con,$qry);
$qry1="select * from products";
$result1=pg_query($con,$qry1);

while ($row = pg_fetch_row($result1))
{
echo "<br>\n";
echo "itemno: $row[0] <br>itemname: $row[1]<br> unitprice: $row[2]";
}
}
}
?> 