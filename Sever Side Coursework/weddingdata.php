<?php
$host='co-project.lboro.ac.uk';
$dbName='coa123wdb';
$username = 'coa123wuser';
$password = 'grt64dkh';
$dsn = "mysql://$username:$password@$host/$dbName";
require_once('MDB2.php'); 
$db = & MDB2::connect($dsn); 
if (PEAR::isError($db)) { 
 die($db->getMessage());
}
?>
<?php
$partySize = $_POST["partySize"];
$date = $_POST["date"];
$grade = $_POST["grade"];
$result = mysql_query("SELECT venue.name FROM venue INNER JOIN venue_booking ON venue.venue_id=venue_booking.venue_id INNER JOIN catering ON catering.venue_id = venue_booking.venue_id WHERE $partySize <= venue.capacity AND venue_booking.date_booked != $date AND catering.venue_id = $grade");
echo '<table border = 1><tbody>';
echo '<thead><tr><th>'.'Name'.'</th></tr></thead>';
while($row = mysql_fetch_array($result)){
echo "<tr><td>" . $row['name'] . "</td>"; 
}
?>