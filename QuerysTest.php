<?php
include 'db/connect.php';
$conn = OpenCon();

$sql = "SELECT * FROM horarios_tbl";
$result = $conn->query($sql);
if ($result !== false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row["Hora"]." ";
  }
}
?>
