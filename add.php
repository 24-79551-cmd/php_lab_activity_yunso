<?php include 'dbcon.php';

$name = $_POST['name'];
$email = $_POST['email'];

$conn->query("INSERT INTO users (id,name, email, created_at) VALUES ('id','$name', '$email', 'created_at')");
header("Location: index.php");


?>