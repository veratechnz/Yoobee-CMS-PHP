<?php
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

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">

            <div class="col-md-12">
              <h1>Nasa API</h1>

              <?php
                    // The date references for the api call
                    $month = '08';
                    $day = 25;
                    $year = '2018';

                    // API query String
                    $metadata = "https://epic.gsfc.nasa.gov/api/natural/date/{$year}-{$month}-{$day}";
                    // Get the metadata for that date and collection
                    $meta = file_get_contents($metadata);
                    // Decodes a json string into a php variable
                    $arr = json_decode($meta);

                    // Reference an item in the array data
                    $name = $arr[0]->image . '.png';
                    // Reference the image url
                    $archive = "https://epic.gsfc.nasa.gov/archive/natural/{$year}/{$month}/{$day}/png/";
                    // Concatenate the url and name
                    $source = $archive . $name;
                    // Create a destination and file name path
                    $destination = 'downloads/' . $name;

                    // An empty array that will be used to store items
                    $storeArr = [];

                    // A function to loop through the data and create 3 images
                    function makeSeveralImages () {
                      // Global variables now referenced
                      global $storeArr;
                      global $arr;
                      global $archive;

                      // A standard for loop to fill the array above
                      for ($i=0; $i < 3; $i++) {
                        $name = $arr[$i]->image . '.png';
                        $source = $archive . $name;
                        $destination = 'downloads/' . $name;
                        array_push($storeArr, $destination);
                        copy($source, $destination);    // download and copy the image
                      }

                    } // function ENDS

                    // Calling the function
                    makeSeveralImages();

               ?>

               <img src=" <?php echo $storeArr[0]  ?>" width="250" alt="">
               <img src=" <?php echo $storeArr[1]  ?>" width="250" alt="">
               <img src=" <?php echo $storeArr[2]  ?>" width="250" alt="">

            </div>

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
