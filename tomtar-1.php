<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tomtar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (barn)
VALUES ('Nice', 'Mean')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();
?>