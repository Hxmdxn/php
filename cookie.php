<!-- 18.PHP program to store current date-time in a cookie and display the Last visited
date-time on the web page upon revisiting the same web page. -->

<!DOCTYPE html>
<html> 
<body bgcolor="beige">
<center><h2> Last visited time on the web page</h2></center>
<br>

<?php
date_default_timezone_set("Asia/Kolkata"); // your timezone

$expiry = 60 * 60 * 24 * 60 + time();  // expiration time of the cookie - 60 days in seconds
//represents 60 days in seconds - sec , min , hour , days and time() returns timestamp
//setcookie('name','date',expiry)
setcookie('lastVisit',date("G:i m/d/y"),$expiry); // lastvisit is the name of the cookie, g:i is hour:minute
if(isset($_COOKIE['lastVisit']))
{
$visit = $_COOKIE['lastVisit'];
echo "Your last visit was on ".$visit;
}
else
echo "You have got some cookies!";
?>
</body>
</html>