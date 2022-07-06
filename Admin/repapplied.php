<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 15px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>ID Number</th>
<th>BirthCert</th>
<th>DOB</th>

<th>Police Abstract</th>
<th>Phone</th>
<th>Location</th>
<th>Explanation</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "idcards");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT idno, birthcert, dob,email,obno,phone,location,message FROM rep";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["idno"]. "</td><td>" . $row["birthcert"] . "</td><td>". $row["dob"] . "</td><td>". $row["obno"] . "</td><td>". $row["phone"] . "</td><td>". $row["location"] . "</td><td>". $row["message"] . "</td><td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>