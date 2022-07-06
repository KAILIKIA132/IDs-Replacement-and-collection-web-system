<!DOCTYPE html>
<html>
<head>
<style>
    body {
        
 background-image: url("paper.gif");
 background-color: #cccccc;
}
</style>
</head>
<body>
<div style="background-image: url('ken.jpg');">
<?php
$conn = mysqli_connect("localhost", "root", "", "idcards");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  announcement_date, announcement FROM announce";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    echo "<br> DATE ANNOUNCED: ". $row["announcement_date"]. " <br></br>ANNOUNCEMENT: <br>". $row["announcement"]. "<br>";
}
} else { echo "0 results"; }
$conn->close();
?>
</div>
<marquee behavior="scroll" direction="right">
   <pre><img src="Flag-Kenya.jpg" width="380" height="230"  alt="Natural" />  <img src="ids.jpg" width="480" height="230" alt="Natural" /></pre>
  </marquee>

</body>
</html>