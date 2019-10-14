<?php
$conn = mysqli_connect("localhost", "root", "admin", "db_pembayaran3", "3307");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>