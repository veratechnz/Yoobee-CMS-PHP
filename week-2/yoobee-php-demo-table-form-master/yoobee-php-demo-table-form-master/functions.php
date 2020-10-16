<?php

// Function for rendering data
function renderDataToHtml () {
  // Assign global variable reference .
  global $conn;
  // Connect to database
  $sql = "SELECT id, name, release_date, box_office FROM movies";
  $result = $conn->query($sql);
  // Render into html
  echo '<h1> Movies Data </h1>';
  echo '<ul>';
    if ($result->num_rows > 0) {
      // Output data of each row with fetch_assoc
      while($row = $result->fetch_assoc()) {
        echo "<li>id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["box_office"]. "</li>";
      }
    } else {
      echo "0 results";
    }
  echo '</ul>';
  echo '<a href="post-data-form.php"><input type="submit" value="Return To Form" name="delete" id="submitButtonDelete" class="btn btn-danger" title="Click here to submit your message!" /></a>';
} // function ENDS
