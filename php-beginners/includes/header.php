<!-- 1. Include a config.php -->
<?php
include 'config/config.php'
?>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <p class="nav-para">
              <a href="index.php" class="nav-btn btn btn-secondary my-2 <?php if( $activePage == 'index.php') {?> active <?php  } ?> ">Home</a>
              <a href="about.php" class="nav-btn btn btn-secondary my-2 <?php if( $activePage == 'about.php') {?> active <?php  } ?> ">About</a>
              <a href="contact.php" class="nav-btn btn btn-secondary my-2 <?php if( $activePage == 'contact.php') {?> active <?php  } ?> ">Contact</a>
            </p>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
