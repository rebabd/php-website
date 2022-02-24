<?php 
// local server development part
	// $dbHost = 'localhost';
	// $dbUser = 'root';
	// $dbPass = '';
	// $dbName = 'user_info';

//Remote database
	$dbHost = 'remotemysql.com';
	$dbUser = '4r38G6pQVW';
	$dbPass = 'XpiRY4OhK4';
	$dbName = ' 4r38G6pQVW';

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
	die("Database connection failed!");
}

// $dsn = "mysql:host=$host;dbname=$db;";

// try {
// 	$pdo = new PDO($dsn, $user, $pass);
// 	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
// 	throw new PDOException($e->getMessage());
	
// }

?>