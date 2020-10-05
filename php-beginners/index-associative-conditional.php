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
                    <th scope="col">Grey</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <!-- Name ref with php -->
                    <td><?php echo keyRef($hairColor, 0) ?></td>
                    <td><?php if ($hairColor['Bob'] === 'Blonde') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Bob'] === 'Brown') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Bob'] === 'Black') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Bob'] === 'Red') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Bob'] === 'Grey') { echo $trueMark;} else {echo $falseMark;} ?></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <!-- Name ref with php -->
                    <td><?php echo keyRef($hairColor, 1) ?></td>
                    <td><?php if ($hairColor['Harry'] === 'Blonde') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Harry'] === 'Brown') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Harry'] === 'Black') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Harry'] === 'Red') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Harry'] === 'Grey') { echo $trueMark;} else {echo $falseMark;} ?></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <!-- Name ref with php -->
                    <td><?php echo keyRef($hairColor, 2) ?></td>
                    <td><?php if ($hairColor['Joe'] === 'Blonde') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Joe'] === 'Brown') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Joe'] === 'Black') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Joe'] === 'Red') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Joe'] === 'Grey') { echo $trueMark;} else {echo $falseMark;} ?></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <!-- Name ref with php -->
                    <td><?php echo keyRef($hairColor, 3) ?></td>
                    <td><?php if ($hairColor['Sarah'] === 'Blonde') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Sarah'] === 'Brown') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Sarah'] === 'Black') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Sarah'] === 'Red') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Sarah'] === 'Grey') { echo $trueMark;} else {echo $falseMark;} ?></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <!-- Name ref with php -->
                    <td><?php echo keyRef($hairColor, 4) ?></td>
                    <td><?php if ($hairColor['Anne'] === 'Blonde') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Anne'] === 'Brown') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Anne'] === 'Black') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Anne'] === 'Red') { echo $trueMark;} else {echo $falseMark;} ?></td>
                    <td><?php if ($hairColor['Anne'] === 'Grey') { echo $trueMark;} else {echo $falseMark;} ?></td>
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
