<!doctype html>
<html>
 <head>
   <!-- CSS -->
   <link href='photobox/photobox.css' rel='stylesheet' type='text/css'>
   <link href='css/style.css' rel='stylesheet' type='text/css'>

   <!-- Script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script type="text/javascript" src="photobox/jquery.photobox.js"></script>
 </head>
 <body>

   <div class='container'>
    <div class="gallery">

    <?php
    // Image extensions
    $image_extensions = array("png","jpg","jpeg","gif");

    // Target directory
    $dir = 'images/';
    // Returns TRUE if the filename exists and is a directory, FALSE otherwise.
    if (is_dir($dir)){
      // Opens up a directory handle to be used
      if ($dh = opendir($dir)){
        $count = 1;

        // Read files - Opens up a directory handle to be used
        while (($file = readdir($dh)) !== false){

          if($file != '' && $file != '.' && $file != '..'){

            // Thumbnail image path
            $thumbnail_path = "images/thumbnail/".$file;

            // Image path
            $image_path = "images/".$file;

            // Returns info about a path, either an array or a string
            $thumbnail_ext = pathinfo($thumbnail_path, PATHINFO_EXTENSION);
            $image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

            // If it is not a folder and matches the file paths
            // as specified above
            if(!is_dir($image_path) &&
                in_array($thumbnail_ext,$image_extensions) &&
                in_array($image_ext,$image_extensions)){
       ?>
                <!-- Place All The Images Image -->
                <a href="<?= $image_path; ?>">
                  <img src="<?= $thumbnail_path; ?>">
                </a>
       <?php
                // Place a Break in the html
                if( $count%4 == 0){
       ?>
                   <div class="clear"></div>
       <?php
                }
                $count++;
             }
          }

         }
         // Close the directory
           closedir($dh);
        }
      }
      ?>
      </div>
    </div>

      <p><a href="upload.php">Upload More Files</a></p>
    <script type="text/javascript">
        $(document).ready(function(){
             $('.gallery').photobox('a',{ time:0 });
        });
    </script>
  </body>
</html>
