<?php
    include_once "lib/config.php";
    include_once ('lib/DataProvider.php');
    global $db_host, $db_username, $db_password, $db_name;

    $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
    if ($connection->connect_error) {      
        die("Failed to connect: " . $connection->connect_error);
    }
    if(isset($_POST["name"]) && isset($_POST["image"]) && isset($_POST["address"]) && isset($_POST["workingtime"]) 
        && isset($_POST["pricerange"]) && isset($_POST["phonenumber"])){
            $name = $_POST["name"];
            $image = $_POST["image"];
            $address = $_POST["address"];
            $workingtime = $_POST["workingtime"];
            $pricerange = $_POST["pricerange"];
            $phonenumber = $_POST["phonenumber"];

            $sql = "insert into food (postID, rate, address, image, workingTime,priceRange, phoneNumber, foodName) 
                    values (NULL, NULL, '$address', '$image', '$workingtime', '$pricerange', '$phonenumber', '$name')";
            if ($connection->query($sql) == TRUE) 
            {
                echo "Record updated successfully";
            } 
            else 
            {
                echo "Error updating record: " . $connection -> error;
            }
            DataProvider::ChangeURL("addingrestaurant.php");
    }
?>