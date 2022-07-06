<?php
session_start();
if(!isset($_SESSION['email']))
{
  header("Location:index.html");
}
$email=$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
div {
  border-radius: 50px;
}

table {
border-collapse: collapse;
width: 50%;
color: #588c7e;
font-family: monospace;
font-size: 15px;
text-align: left;
margin-left:25%;

}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
   </head>
<body>
<!--<img src="Flag-Kenya.jpg" style="width:1500px;height:200px;">-->

    <table>
<tr>
<th>ID Number</th>
<th>Status</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "idcards");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// $conn = mysqli_connect("localhost", "root", "", "idcards");
$email = $_SESSION['email'];
$result = mysqli_query($conn,"SELECT * FROM rep WHERE email='$email'");
$row = mysqli_fetch_array($result);
//echo $email;
$idno = $row['idno'];

$sql = "SELECT * FROM collection WHERE idno='$idno' limit 1";
//echo $idno;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["idno"]. "</td><td>" . $row["status"] . "</td><tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
<marquee behavior="scroll" direction="up">
    <img src="Flag-Kenya.jpg" width="380" height="230" alt="Natural" />
  </marquee>
  <marquee behavior="scroll" direction="up">
    <img src="Flag-Kenya.jpg" width="380" height="230" alt="Natural" />
  </marquee>
  <marquee behavior="scroll" direction="down">
    <img src="Flag-Kenya.jpg" width="380" height="230" alt="Natural" />
  </marquee>
     



</body>
</html>

