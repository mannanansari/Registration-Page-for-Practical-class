<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "example";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "SELECT * FROM users WHERE slot1='monday'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    	# code...
    	echo "<strong>First Name: </strong>" . $row["fname"] . " <strong>Last Name: </strong> " . $row["lname"] . " <strong>Student Id: </strong> " . $row["student_id"] . " <strong>E-mail: </strong> " . $row["email"] . " <br>";
    }
    
} else {
    echo "No list available";
}

mysqli_close($conn);

?>
