 <!DOCTYPE html>
 <html>
 <head>
 	<title>updating status  </title>
 </head>
 <body>
 
 
 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "newdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$fullname = $_POST['fullname'];
$password = $_POST['password'];
$email = $_POST['email'];
$id = $_POST['id'];
error_reporting(E_ALL ^ E_NOTICE);

$sql = "UPDATE testtable SET fullname='$fullname',password='$password',email='$email' WHERE id=$id;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully kindly verify it by your email";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
<div>
	To Delete  <form action="del1.php">
    <input type="submit" value="Click here" />
</form>
</div>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
</body>
</html>