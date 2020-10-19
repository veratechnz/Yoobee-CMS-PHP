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
      <table class="table">
        <?php
            // Connect to database
              $sql = "SELECT id, name, release_date, box_office, synopsis FROM movies";
              $result = $conn->query($sql);
              var_dump($result);
              // Render into html
              echo '<h1> Movies Data </h1>';
              // Looping out data into table
                if ($result->num_rows > 0) {
                  // Output data of each row
                  while($row = $result->fetch_assoc()) {
         ?>
          	<tr>
            	<td><?php echo $row["id"]; ?></td>
            	<td><?php echo $row["name"]; ?></td>
            	<td><?php echo $row["box_office"]; ?></td>
              <td><?php echo $row["synopsis"]; ?></td>
          	</tr>
        <?php
                  }
                }
        ?>
    </table>
    <?php
      echo '<p><a href="post-data-form.php"><input type="submit" value="Return To Form" name="delete" id="submitButtonDelete" class="btn btn-danger" title="Click here to submit your message!" /></a></p>';
    ?>
      <!-- PHP ENDS -->
    </div>

  </div>
</body>
</html>
