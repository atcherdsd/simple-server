<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
$data = json_decode(file_get_contents("php://input"));
echo "Registration completed successfully";
