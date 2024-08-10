<?php 

include ('library/pdo/database.php');

// Define configuration
$credentials = [
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'warung_app'
];

$database = new Database($credentials);