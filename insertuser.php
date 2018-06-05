<!DOCTYPE html>
<html>
<head>
	<title>insert data</title>
</head>
<body>


<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "newdb";


// $conn = new mysqli("localhost","root","root","newdb");
$conn = new mysqli("$servername","$dbusername","$dbpassword","$dbname");
if ($conn->connect_error) {
	die("connection failed:". $conn->connect_error);
}

// echo "string";die;

$fullname = $_POST['fullname'];
$password = $_POST['password'];
$email = $_POST['email'];


$sql = "INSERT INTO testtable(fullname,email,password)
 VALUES ('$fullname','$email','$password')";


	if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "
" . $conn->error;
}

$conn->close();
?> 
<br><br>
<div>
	 Please find your id  <form action="updateuser.php">
    <input type="submit" value="here" />
    to update
</form>
</div>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</body>
</html>