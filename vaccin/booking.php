<?php
// Database Configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $center = $_POST['center'];

  // Perform form validation and data sanitization

  // Insert appointment details into the database
  $sql = "INSERT INTO appointments (name, email, center) VALUES ('$name', '$email', '$center')";

  if ($conn->query($sql) === TRUE) {
    // Redirect to a success page
    header('Location: success.html');
    // echo("booked");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
