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

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$sid = $_POST['sid'];
$emailid = $_POST['emailid'];
$slot_select = $_POST['slot_select'];
if ($slot_select == "monday") {
	# code...
	$s1 = $slot_select;
	$s2 = "";
	$s3 = "";
	$s4 = "";
}
else if ($slot_select == "tuesday") {
	# code...
	$s1 = "";
	$s2 = $slot_select;
	$s3 = "";
	$s4 = "";

}
else if ($slot_select == "wednesday") {
	# code...
	$s1 = "";
	$s2 = "";
	$s3 = $slot_select;
	$s4 = "";
}
else {
	# code...
	$s1 = "";
	$s2 = "";
	$s3 = "";
	$s4 = $slot_select;
}



$abc="SELECT count(*) as p FROM users WHERE slot1='monday'";
$result=mysqli_query($conn,$abc);
$row=mysqli_fetch_assoc($result);
//echo $row['p'];

$abc1="SELECT count(*) as q FROM users WHERE slot2='tuesday'";
$result1=mysqli_query($conn,$abc1);
$row1=mysqli_fetch_assoc($result1);
//echo $row1['q'];

$abc2="SELECT count(*) as r FROM users WHERE slot2='wednesday'";
$result2=mysqli_query($conn,$abc2);
$row2=mysqli_fetch_assoc($result2);
//echo $row2['r'];

$abc3="SELECT count(*) as s FROM users WHERE slot3='friday'";
$result3=mysqli_query($conn,$abc3);
$row3=mysqli_fetch_assoc($result3);

 

if (empty($firstname) || empty($lastname) || empty($sid) || empty($emailid) || empty($slot_select)) {
	echo "Please Complete all fields"; 
}


else {


$sql = "UPDATE users SET fname='$firstname', lname='$lastname', student_id='$sid', email='$emailid', slot1='$s1', slot2='$s2', slot3='$s3', slot4='$s4' WHERE email='$emailid'";

if ($conn->query($sql) === TRUE) {
    echo "You have changed your slot successfully! Enjoy.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}



$conn->close();
?>