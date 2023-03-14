<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Origin: http://127.0.0.1:3000");
header("Access-Control-Allow-Methods: GET,POST,OPTIONS,DELETE,PUT");
$data = json_decode(file_get_contents("php://input"));
echo "Registration of $data->lastName completed successfully";
