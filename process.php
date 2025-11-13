<?php
//process.php
$servername = "localhost";
$username_db = "your_db_username";
$password_db = "your_db_password";
$dbname = "your_database_name";

//Create connection
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

//Check connection
if ($conn ->connect_error) {
  die("Connection failed: ". $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"] {
    $username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);

$sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " .$sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
