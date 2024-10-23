
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Λήψη των δεδομένων από τη φόρμα
    
    $name = $_POST['name'];
	
	$sql = "INSERT INTO eployees (name)
VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>

<html>
<body>

<h2>Text input fields</h2>

<form action ="" method = "POST">
  <label for="name">First name:</label><br>
  <input type="text" id="name" name="name"><br>
    
  <input type = "submit" value = "Υποβολή">
 
</form>





</body>

</html>