<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$question = mysqli_real_escape_string($conn, $_POST['question']);

$sql = "INSERT INTO Questions (question) VALUES ('$question')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
