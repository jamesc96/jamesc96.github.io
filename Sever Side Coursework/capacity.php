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
$MinCapacity = $_GET["minCapacity"];
$MaxCapacity = $_GET["maxCapacity"];
$result = mysql_query("SELECT name, weekend_price, weekday_price FROM venue WHERE licensed=1 AND capacity BETWEEN $MinCapacity AND $MaxCapacity");
echo '<table border = 1><tbody>';
echo '<thead><tr><th>'.'Name'.'</th><th>'.'Weekend Price'.'</th><th>'.'Weekday Price'.'</th></tr></thead>';
while($row = mysql_fetch_array($result)){
echo "<tr><td>" . $row['name'] . "</td><td>" . $row['weekend_price'] . "</td><td>" . $row['weekday_price'] . "</td></tr>"; 
}
?>
</html>