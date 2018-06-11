<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
include('include/config.php');
$q = intval($_GET['q']);
//$q='5056';
$sql="SELECT * FROM patientregistration WHERE PatientID = '".$q."'";
$result = mysql_query($sql);
echo "<table>
<tr>
<th>PatientID</th>
<th>Patient</th>
<th>Age</th>
<th>Address</th>
<th>Gender</th>
</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['PatientID'] . "</td>";
    echo "<td>" . $row['PatientName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Address'] . "</td>";
    echo "<td>" . $row['Gen'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysql_close($bd);
?>
</body>
</html>