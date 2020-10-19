<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Movie Upload Form</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>

</head>

<body>
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <form role="form" method="post" action="post-data.php" id="contactform">
          <fieldset>
            <legend>Enter Your Data To Post A New Movie</legend>
						<!-- name, release_date, box_office, synopsis, starring -->
            <div class="form-group">
              <label for="name">Movie Title<span class="help-required">*</span></label>
              <input type="text" name="title" value="" class="form-control required" role="input" aria-required="true" />
            </div>

            <div class="form-group">
              <label for="phone">Release Date<span class="help-required">*</span></label>
              <input type="text" name="release-date" value="" class="form-control required" role="input" aria-required="true" />
            </div>

						<div class="form-group">
              <label for="phone">Box Office<span class="help-required">*</span></label>
              <input type="text" name="box-office" value="" class="form-control required" role="input" aria-required="true" />
            </div>

						<div class="form-group">
              <label for="phone">Synopsis<span class="help-required">*</span></label>
              <input type="text" name="synopsis" value="" class="form-control required" role="input" aria-required="true" />
            </div>

						<div class="form-group">
              <label for="phone">Starring<span class="help-required">*</span></label>
              <input type="text" name="starring" value="" class="form-control required" role="input" aria-required="true" />
            </div>

            <div class="actions">
              <input type="submit" value="Send Data" name="submit" id="submitButton" class="btn btn-primary" title="Click here to submit your message!" />
              <input type="submit" value="Delete Data" name="delete" id="submitButtonDelete" class="btn btn-danger" title="Click here to submit your message!" />
              <input type="submit" value="Delete All Data" name="deleteAll" id="submitButtonDeleteAll" class="btn btn-danger" title="Click here to submit your message!" />
              <input type="submit" value="Update Item" name="updateItem" id="submitButtonDeleteAll" class="btn btn btn-info" title="Click here to submit your message!" />
            </div>

          </fieldset>
        </form>
      </div><!-- col -->
    </div><!-- row -->

      <hr>

      <div class="footer">
        <p>&copy; Company 2020</p>
      </div>

    </div> <!-- /container -->
</body>
</html>
