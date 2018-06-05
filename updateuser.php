<!DOCTYPE html>
<html>
<head>
	<title>Find your id here</title>
</head>
<body>
<h3>Find your id please</h3>


    <?php
$con=mysqli_connect("localhost","root","root","newdb");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

   $sql="SELECT id,fullname FROM testtable";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["fullname"].  "<br>";
    }
} else {
    echo "0 results";
}


mysqli_close($con);
?>
<br><br><br>
Got your id and name??.<br>
<div>
	To Update <form action="updateform.php">
    <input type="submit" value="Click here" />
</form>
</div>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</body>
</html>
