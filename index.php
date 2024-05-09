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

// Insert data into employee table
$sql_users = "INSERT INTO users (name, email , mobileNo) VALUES ('$name', '$email', '$mobileNo')";

if ($conn->query($sql_users) === TRUE) {
  echo "Data inserted into users table successfully!<br>";
} else {
  echo "Error: " . $sql_users . "<br>" . $conn->error;
}

// Insert data into students table
$sql_admin = "INSERT INTO admin (name, email,mobileNo) VALUES ('$name', '$email','$mobileNo')";

if ($conn->query($sql_admin) === TRUE) {
  echo "Data inserted into admin table successfully!";
} else {
  echo "Error: " . $sql_admin . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>

