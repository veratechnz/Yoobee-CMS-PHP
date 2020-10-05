<?php
  // Set and turn on the error logs
  ini_set('display_errors', 1);

  // Variable that uses the basename method to get the current file name in a string
  $activePage = basename($_SERVER['SCRIPT_NAME']);

  //Various Data Structures in PHP

  // Variables used for config and reference data
  $theArray = array('a', 'b', 'c', 'd', 'e');
  $cardTitle = 'Card A';
  $pageTitle = 'A New Page Title From Config';

  // Associative Array Data With List
  $associativeArray = [
    'October 5' => 'Monday',
    'October 6' => 'Tuesday',
    'October 7' => 'Wednesday',
    'October 8' => 'Thursday',
    'October 9' => 'Friday'
  ];

  // Associative Array Data With Hair Color
  $hairColor = [
    'Bob' => 'Blonde',
    'Harry' => 'Brown',
    'Joe' => 'Black',
    'Sarah' => 'Grey',
    'Anne' => 'Red'
  ];

  // Creating objects with PHP
  $hairObject = (object) [
    'Bob' => 'Blonde',
    'Harry' => 'Brown',
    'Joe' => 'Black',
    'Sarah' => 'Grey',
    'Anne' => 'Red'
  ];

  // Creating an object with a class constructor
   $anotherHairObject = new stdClass();
   $anotherHairObject->Bob = 'Blonde';
   $anotherHairObject->Harry = 'Brown';
   $anotherHairObject->Joe = 'Black';
   $anotherHairObject->Sarah = 'Grey';
   $anotherHairObject->Anne = 'Red';

?>
