<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

// Fetch the server-status data
$server_status = file_get_contents("http://localhost/server-status");

// Return the server-status data
echo $server_status;
?>
