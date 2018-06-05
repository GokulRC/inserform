
 <?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "newdb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$s=$_POST("s");
$sql = "DELETE FROM testtable WHERE id=$s";


if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 