<?php
$servername = "localhost";
$username = "cloudwick";
$password = "lydiakar";
$dbname = "cloudwick";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT PersonID, FirstName, LastName FROM People";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "PersonID: " . $row["PersonID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
