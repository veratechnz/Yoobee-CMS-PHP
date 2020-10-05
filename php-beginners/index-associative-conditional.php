<?php
    include 'config/config.php';

    // A function that can output a key from an array
    function keyRef ($arr, $index) {
      // Reference associative array in question
      $newArray = array_keys($arr);
      // Return the key's data
      return $newArray[$index];
    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'includes/head.php' ?>
	<body>

	<!-- 2. Include an include/header  -->
	<?php
	include 'includes/header.php'
	?>

    <main role="main">

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <h1>
              <?php
                echo $hairObject->Bob;
              ?>
            </h1>
              <!-- Table Begins -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Blonde</th>
                    <th scope="col">Brown</th>
                    <th scope="col">Black</th>
                    <th scope="col">Red</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><?php echo keyRef($hairColor, 0) ?></td>
                    <td><span>&#10060;</span></td>
                    <td><span>&#10003;</span></td>
                    <td><span>&#10003;</span></td>
                    <td><span>&#10060;</span></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><?php echo keyRef($hairColor, 1) ?></td>
                    <td><span>&#10003;</span></td>
                    <td><span>&#10003;</span></td>
                    <td><span>&#10003;</span></td>
                    <td><span>&#10060;</span></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><?php echo keyRef($hairColor, 2) ?></td>
                    <td><span>&#10060;</span></td>
                    <td><span>&#10060;</span></td>
                    <td><span>&#10003;</span></td>
                    <td><span>&#10060;</span></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><?php echo keyRef($hairColor, 3) ?></td>
                    <td><span>&#10003;</span></td>
                    <td><span>&#10003;</span></td>
                    <td><span>&#10060;</span></td>
                    <td><span>&#10003;</span></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><?php echo keyRef($hairColor, 4) ?></td>
                    <td><span>&#10060;</span></td>
                    <td><span>&#10003;</span></td>
                    <td><span>&#10060;</span></td>
                    <td><span>&#10003;</span></td>
                  </tr>
                </tbody>
              </table>
              <!-- Table ENDS -->

          </div>
					<!-- row ENDS -->
        </div>
				<!-- container ENDS -->
      </div>
			<!-- album ENDS -->
    </main>

		<!-- footer -->
		<?php include 'includes/footer.php' ?>
		<!-- all js files -->
		<?php include 'includes/scripts.php' ?>
	</body>
</html>
