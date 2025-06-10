<?php

// Procedural MySQLi (simple and direct)
$conn = mysqli_connect('localhost', 'db_user', 'db_pass', 'db_name');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select query
$sql = "SELECT * FROM users WHERE status = 'active'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . "<br>";
}

mysqli_close($conn);



//  Object-Oriented MySQLi
$conn = new mysqli('localhost', 'db_user', 'db_pass', 'db_name');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM users WHERE status = ?");
$stmt->bind_param("s", $status);
$status = 'active';
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}

$conn->close();
