/*
?php
//$servername = "localhost";
$user = "root";
$password = "12345";
$database = "docker_database";
$host = "192.168.0.103";

// Create connection
$link = new mysqli($host, $user, $password, $database);

// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}
echo "Connected successfully";
?
*/