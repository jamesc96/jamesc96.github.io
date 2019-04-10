<!DOCTYPE html>
<html>
<?php
require_once 'MDB2.php';
include "/diska/www/include/coa123-mysql-connect.php"; //to provide $username,$password 
$username = 'coa123wuser';
$password = 'grt64dkh';
//define $host and $dbName 
$host='co-project.lboro.ac.uk';
$dbName='coa123wdb';
// make connection to the server 
$dsn = "mysql://$username:$password@$host/$dbName"; 
$db = MDB2::connect($dsn); 
if(PEAR::isError($db)){ 
    die($db->getMessage());
}
?>
<?php
$date = $_GET["date"];
$partySize = $_GET["partySize"];
function dateFormat($dateFormat){
	$dateFormat = explode("/",$dateFormat);
	$dateFormat= $dateFormat[2]."-".$dateFormat[1]."-".$dateFormat[0];
	return $dateFormat;
}
$date=dateFormat($date);
$result = mysql_query("SELECT venue.name, venue.weekend_price, venue.weekday_price FROM venue WHERE capacity>=$partySize AND venue_id NOT IN (SELECT venue_id FROM venue_booking WHERE venue_booking.date_booked = '$date')");
echo '<table border = 1><tbody>';
echo '<thead><tr><th>'.'Name'.'</th><th>'.'Weekend Price'.'</th><th>'.'Weekday Price'.'</th></tr></thead>';
while($row = mysql_fetch_array($result)){ 
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price']."</td></tr>"; 
}
?>
</html>


