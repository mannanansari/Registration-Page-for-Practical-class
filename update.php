<html>
<head>

</head>
<body>
	<h1>COMP207- Change your Practical Slot here!</h1>
	

	<br>

<a href="project.php">Click here if you want to register as new user</a>
<br> <br>
<a href="instructor.php">Slot Information for Instructors</a>
	

<br><br>

	<form action="update1.php" method="post">
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