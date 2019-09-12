<meta charset="UTF-8">
<?php
$serverName = "localhost";
$userName = "root";
$userPassword = "";
$dbName = "sncdashboard";
$objCon = mysqli_connect($serverName, $userName, $userPassword, $dbName);
mysqli_query($objCon, "SET NAMES 'utf8' ");

$query = "SELECT * FROM snc ORDER BY Timesnc asc";
$result = mysqli_query($objCon, $query);
echo "<table border='1' align='center' width='500'>";
echo "<table border=1 ALIGN=CENTER>";
echo "<tr><th>Machine1</th><th>Machine2</th><th>Machine3</th><th>StatusMachine1</th><th>StatusMachine2</th><th>StatusMachine3</th><th><center>Date/Time</center></th></tr>";
while ($linha = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><center>".$linha["Machine1"]."</center></td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($objCon);
?>