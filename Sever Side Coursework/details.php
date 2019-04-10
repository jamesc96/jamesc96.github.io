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

$result1 = mysql_query("SELECT * FROM venue WHERE venue_id=1");
$result2 = mysql_query("SELECT * FROM venue WHERE venue_id=2");
$result3 = mysql_query("SELECT * FROM venue WHERE venue_id=3");
$result4 = mysql_query("SELECT * FROM venue WHERE venue_id=4");
$result5 = mysql_query("SELECT * FROM venue WHERE venue_id=5");
$result6 = mysql_query("SELECT * FROM venue WHERE venue_id=6");
$result7 = mysql_query("SELECT * FROM venue WHERE venue_id=7");
$result8 = mysql_query("SELECT * FROM venue WHERE venue_id=8");
$result9 = mysql_query("SELECT * FROM venue WHERE venue_id=9");
$result10 = mysql_query("SELECT * FROM venue WHERE venue_id=10");
echo '<table border = 1><tbody>';
echo '<thead><tr><th>'.'Venue ID'.'</th><th>'.'Name'.'</th><th>'.'Capacity'.'</th><th>'.'Weekend Price'.'</th><th>'.'Weekday Price'.'</th><th>'.'Licensed'.'</th></tr></thead>';
if($_GET["venueId"] == 1){
while($row = mysql_fetch_array($result1)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['venue_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['capacity'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td><td>" . $row['licensed'] . "</td></tr>";  //$row['index'] the index here is a field name
}
}
elseif($_GET["venueId"] == 2){
while($row = mysql_fetch_array($result2)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['venue_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['capacity'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td><td>" . $row['licensed'] . "</td></tr>";  //$row['index'] the index here is a field name
}
}
elseif($_GET["venueId"] == 3){
while($row = mysql_fetch_array($result3)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['venue_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['capacity'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td><td>" . $row['licensed'] . "</td></tr>";  //$row['index'] the index here is a field name
}
}
elseif($_GET["venueId"] == 4){
while($row = mysql_fetch_array($result4)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['venue_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['capacity'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td><td>" . $row['licensed'] . "</td></tr>";  //$row['index'] the index here is a field name
}
}
elseif($_GET["venueId"] == 5){
while($row = mysql_fetch_array($result5)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['venue_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['capacity'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td><td>" . $row['licensed'] . "</td></tr>";  //$row['index'] the index here is a field name
}
}
elseif($_GET["venueId"] == 6){
while($row = mysql_fetch_array($result6)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['venue_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['capacity'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td><td>" . $row['licensed'] . "</td></tr>";  //$row['index'] the index here is a field name
}
}
elseif($_GET["venueId"] == 7){
while($row = mysql_fetch_array($result7)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['venue_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['capacity'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td><td>" . $row['licensed'] . "</td></tr>";  //$row['index'] the index here is a field name
}
}
elseif($_GET["venueId"] == 8){
while($row = mysql_fetch_array($result8)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['venue_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['capacity'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td><td>" . $row['licensed'] . "</td></tr>";  //$row['index'] the index here is a field name
}
}
elseif($_GET["venueId"] == 9){
while($row = mysql_fetch_array($result9)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['venue_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['capacity'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td><td>" . $row['licensed'] . "</td></tr>";  //$row['index'] the index here is a field name
}
}
elseif($_GET["venueId"] == 10){
while($row = mysql_fetch_array($result10)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['venue_id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['capacity'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td><td>" . $row['licensed'] . "</td></tr>";  //$row['index'] the index here is a field name
}
}
echo '</tbody></table>';


mysql_close();
?>
</html>