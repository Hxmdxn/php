<!-- 18.PHP program to store current date-time in a cookie and display the Last visited
date-time on the web page upon revisiting the same web page. -->

<!DOCTYPE html>
<html> 
<body bgcolor="beige">
<center><h2> Last visited time on the web page</h2></center>
<br>

<?php
date_default_timezone_set("Asia/kolkata")

$expiry= 60*60*24*60 + time()
setcookie('lastVisit',date("G:i m/d/y"),$expiry)
if (isset($_COOKIE['lastVisit']))
{ 
$visit = $_COOKIE['lastVisit']
echo "Last visited time on the web page is $visit";

}
?>
</body>
</html>