<?php
include 'functions.php';
include 'config.php';
?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Movie Upload Form...</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>

</head>

<body>
  <div class="container">

    <div class="row">

    	<?php
        // Connect to database
        $sqlT = "SELECT * FROM movies";
        $result = $conn->query($sqlT);
      	$i=0;
      ?>
      <h1>A Table Of Data</h1>
      <table class="table">
        <?php
          if ($result->num_rows > 0) {
          // Output data of each row
          while($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["release_date"]; ?></td>
          <td><?php echo $row["box_office"]; ?></td>
          <td><?php echo $row["synopsis"]; ?></td>
          <td><?php echo $row["starring"]; ?></td>
        </tr>
        <?php
        }
        } else {
          echo "0 results";
        }
    	  ?>
      </table>
    </div>

  </div>
</body>
</html>
