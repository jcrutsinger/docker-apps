<?php
$servername = "192.168.99.101";
$username = "root";
$password = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<html><body><center><img src=mapr.jpg></img><h1>Connected successfully</h1></center></body></html>";
?>
