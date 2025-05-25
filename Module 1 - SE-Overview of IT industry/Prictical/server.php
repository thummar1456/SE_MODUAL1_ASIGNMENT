<?php 
// server.php 
if ($_SERVER['REQUEST_METHOD'] === 'GET') { 
header("Content-Type: text/plain"); 
echo "Hello from the PHP server!"; 
} else { 
http_response_code(405); // Method Not Allowed 
echo "Only GET is supported."; 
} 
?>