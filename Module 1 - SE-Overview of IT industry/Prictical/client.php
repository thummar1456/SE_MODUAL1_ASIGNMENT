<?php 
// client.php 
$url = "http://localhost:8080"; 
$response = file_get_contents($url); 
if ($response !== false) { 
echo "Server says: " . $response . PHP_EOL; 
} else { 
echo "Failed to connect to server." . PHP_EOL; 
} 
?>