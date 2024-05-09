<?php
// MySQL database connection details
$host = 'localhost';
$username = 'root';
$password = '7987';
$database = 'student';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from form
$name = $_POST['name'];
$email = $_POST['email'];
$mobileNo = $_POST['mobileNo'];

// Insert data into database
$sql = "INSERT INTO users (name, email, mobileNo) VALUES ('$name', '$email', '$mobileNo')";

if ($conn->query($sql) === TRUE) {
  echo "Data inserted successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
