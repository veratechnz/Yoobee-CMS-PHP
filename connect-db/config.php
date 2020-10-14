<?php
// Using the post super global to assign input values to variables
$title = $_POST['title'];
$releaseDate = $_POST['release-date'];
$boxOffice = $_POST['box-office'];
$synopsis = $_POST['synopsis'];
$starring = $_POST['starring'];

// Database Variables
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test_php";

// Create connection mysqli object orientated method:
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
