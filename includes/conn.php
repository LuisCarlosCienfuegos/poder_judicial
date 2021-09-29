<?php
	$conn = new mysqli('localhost', 'root', '', 'agenda');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>