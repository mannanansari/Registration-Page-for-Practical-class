<html>
<head>

</head>
<body>
	<h1>COMP207- Register here for a Practical Slot</h1>
	<h2>Register only if you know what you are doing</h2>
	<h3>Please enter all information and select your desired day. Please enter a correct 'SID' number. <br>
	Please check the number of available seats before submitting.<br>
	Register to only one slot.<br>
	Any Problems? Write a message to mansari7@horizon.csueastbay.edu<br>
	</h3>

	<br>

<a href="update.php">Click here to change slot if already registered!</a>
<br> <br>
<a href="instructor.html">Slot Information for Instructors</a>
	

<br><br>

	<form action="login.php" method="post">
First name: <br> 
<input type="text" name="firstname" placeholder="Enter First Name"><br><br>
Last name: <br>
<input type="text" name="lastname" placeholder="Enter Last Name"><br><br>
SID: <br>
<input type="text" name="sid" placeholder="Enter Student ID"><br><br>
Email Address: <br>
<input type="text" name="emailid" placeholder="Enter Email"> <br><br>

Select the Practical Slot: <br>
<select name="slot_select">
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

$var = "SELECT count(*) as c FROM users WHERE slot1 = 'monday'";
$result = mysqli_query($conn,$var);
$row = mysqli_fetch_assoc($result);

$var1 = "SELECT count(*) as d FROM users WHERE slot2 = 'tuesday'";
$result1 = mysqli_query($conn, $var1);
$row1 = mysqli_fetch_assoc($result1);

$var2 = "SELECT count(*) as e FROM users WHERE slot3 = 'wednesday'";
$result2 = mysqli_query($conn, $var2);
$row2 = mysqli_fetch_assoc($result2);

$var3 = "SELECT count(*) as f FROM users WHERE slot4 = 'friday'";
$result3 = mysqli_query($conn, $var3);
$row3 = mysqli_fetch_assoc($result3);


?>
    <option value="monday">Monday 15:00-17:00 <?php echo 8 - $row['c']; ?> seats remaining</option>
    <option value="tuesday">Tuesday 14:00-16:00 <?php echo 8 - $row1['d']; ?> seats remaining</option>
    <option value="wednesday">Wednesday 11:00-13:00 <?php echo 8 - $row2['e']; ?> seats remaining</option>
    <option value="friday">Friday 10:00-12:00 <?php echo 8 - $row3['f']; ?> seats remaining</option>
  </select> <br><br>




<button type="submit" value="Submit">Submit </button> 
<button type="reset" value="Clear">Clear</button> 
 




</form>




</body>