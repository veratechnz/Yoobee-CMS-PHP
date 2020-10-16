<?php
include 'functions.php';
include 'config.php';
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Movie Upload Form ||</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>

</head>

<body>
  <div class="container">

    <div class="row">
      <?php
      $aVariable = 'something';
      echo $ariable;

       if ($_POST['submit']) {
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
          // Delete was clicked
          $conn->close();
        } // if post submit ENDS

      // Delete process for form submission
      if ($_POST['delete']) {
        echo 'delete was clicked';
        $titleB = $_POST['title'];
        $sqlD = "DELETE FROM movies WHERE name = '$titleB'";
          // If connection was successful
        if ($conn->query($sqlD) === TRUE) {
          echo "Record Deleted";
          renderDataToHtml();
        } else {
          echo "Error: " . $sqlD . "<br>" . $conn->error;
        }
        // Delete was clicked
        $conn->close();
      }

      // Delete process for form submission
      if ($_POST['deleteAll']) {
        echo 'Delete All Was Clicked';
        $sqlDA = "DELETE FROM movies";
          // If connection was successful
        if ($conn->query($sqlDA) === TRUE) {
          echo "All Record Deleted";
        } else {
          echo "Error: " . $sqlDA . "<br>" . $conn->error;
        }
        // Delete was clicked
        $conn->close();
      }

      // Delete process for form submission
      if ($_POST['updateItem']) {
        echo 'Update was clicked';
        $sqlU = "UPDATE movies SET starring = '$starring', release_date = '$releaseDate' WHERE name = '$title'";
        // If connection was successful
        if ($conn->query($sqlU) === TRUE) {
          echo "All Records Updated";
        } else {
          echo "Error: " . $sqlU . "<br>" . $conn->error;
        }
        // Delete was clicked
        $conn->close();
      }
      ?>
    </div>

  </div>
</body>
</html>
