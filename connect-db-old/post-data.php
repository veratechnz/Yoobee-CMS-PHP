<?php

include 'functions.php';

// Using the post super global to assign input values to variables
$title = $_POST['title'];
$releaseDate = $_POST['release-date'];
$boxOffice = $_POST['box-office'];
$synopsis = $_POST['synopsis'];
$starring = $_POST['starring'];

// Echo out all of the input values
echo $title . $releaseDate . $boxOffice . $synopsis . $starring;

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

// SQL query inserting data into a table
$sql = "INSERT INTO movies (name, release_date, box_office, synopsis, starring)
VALUES ('$title', '$releaseDate', '$boxOffice', '$synopsis', '$starring')";

// If connection was successful
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  renderDataToHtml();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
