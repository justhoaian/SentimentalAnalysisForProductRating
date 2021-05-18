<?php

include_once "lib/config.php";
global $db_host, $db_username, $db_password, $db_name;

$connection = new mysqli($db_host, $db_username, $db_password, $db_name);
if ($connection->connect_error) {      
    die("Failed to connect: " . $connection->connect_error);
}

// sql to delete a record
if(isset($_REQUEST['btn'])){
  $sql = "DELETE FROM food (postID, rate, address, image, workingTime,priceRange, phoneNumber, foodName);
  if ($connection -> query($sql) === TRUE) 
  {
    echo "Record deleted successfully";
  } 
  else 
  {
    echo "Error deleting record: " . $connection -> error;
  }
}
$connection ->close();
?>