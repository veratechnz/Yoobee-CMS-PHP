<?php
    // Set and turn on the error logs
    ini_set('display_errors', 1);
    include 'config/config.php';
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
			<!-- Jumbotron -->
			<?php include 'includes/jumbotron.php' ?>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
						<!-- 3. Run a loop referencing an array to influence, create or update some html -->
						<?php foreach($theArray as $key=>$value): ?>
							<!-- col card Starts -->
	            <div class="col-md-4">
	              <div class="card mb-4 box-shadow">
	                <img class="card-img-top" src="https://via.placeholder.com/100C/O https://placeholder.com/" alt="Card image cap">
	                <div class="card-body">
										<h3><?=$cardTitle.' '.$key?></h3>
	                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	                  <div class="d-flex justify-content-between align-items-center">
	                    <div class="btn-group">
	                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
	                      <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
	                    </div>
	                    <small class="text-muted">10 mins</small>
	                  </div>
	                </div>
	              </div>
	            </div>
							<!-- col card ENDS -->
				    <?php endforeach; ?>

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
