<!DOCTYPE html>
<html>
<?php
$C1 = ($_GET['c1']);
$C2 = ($_GET['c2']);
$C3 = ($_GET['c3']);
$C4 = ($_GET['c4']);
$C5 = ($_GET['c5']);
$Carray[0] = array('', $C1, $C2, $C3, $C4, $C5);
$Minimum = $_GET['min'];
$Maximum = $_GET['max'];
$counter=0;
for($i=$Minimum;$i<=$Maximum;$i=$i+5){
$counter++;
$Carray[$counter] = array($i, $Carray[0][1]*$i, $Carray[0][2]*$i, $Carray[0][3]*$i, $Carray[0][4]*$i, $Carray[0][5]*$i);
}
echo '<table border = 1><tbody>';
echo '<thead><tr><th>'.'Party Size'.'</th><th>'.'Cost at grade 1 PP'.'</th><th>'.'Cost at grade 2 PP'.'</th><th>'.'Cost at grade 3 PP'.'</th><th>'.'Cost at grade 4 PP'.'</th><th>'.'Cost at grade 5 PP'.'</th></tr></thead>';
for($j = 0; $j < count($Carray); $j++) {
    echo '<tr>';
        for($k = 0; $k < count($Carray[0]); $k++) {
            echo '<td>'.$Carray[$j][$k].'</td>';
        }
    echo '</tr>';
}
echo '</tbody></table>';
?>
<head>
<title>Catering Table
</title>
</head>
<body>



</body>


</html>