<?php

include 'functions.php';

// Database Variables
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test_php";

// Movie Variables
$mName = 'GhostBusters 01';
$mDate = '29-02-1985';
$mBoxOffice = '$40,000,000';
$mSynopsis = 'A tale about ghosts and busters.';
$mStarring = 'Tom Cruise';

// Create connection mysqli object orientated method:+''
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Run an sql query
// 1. Insert values into table
// $sql = "INSERT INTO movies (name, release_date, box_office, synopsis, starring)
// VALUES ('$mName', '$mDate', '$mBoxOffice', '$mSynopsis', '$mStarring')";

// 2. Deleting a row from a table
// $id = 4;
// $sql = "DELETE FROM movies WHERE id = '$id'";

// 3. Updating fields in a table
// $id = 6;
// $sql = "UPDATE movies SET starring = '$mStarring', release_date = '$mDate' WHERE id = $id";

$sql = "SELECT id, name, release_date, box_office FROM movies";
$result = $conn->query($sql);

echo '<h1> Movies Data </h1>';
echo '<ul>';
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<li>id: " . $row["id"]. " - Name: " . $row["release_date"]. " " . $row["box_office"]. "</li>";
    }
  } else {
    echo "0 results";
  }
echo '</ul>';

$conn->close();
