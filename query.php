<?php
$servername = "localhost";
$username = "ictatjcu_wedwork";
$password = "123zxc";
$dbname = "ictatjcu_wedworks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Name= filter_input(INPUT_POST,'Name');
$Email= filter_input(INPUT_POST,'email');
$Query= filter_input(INPUT_POST,'Query');

$sql = "INSERT INTO MyGuests (Name,email,Query)
VALUES ('$Name' , '$email' , '$Query')";
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

  
