<?php
    include_once('config.php');
    global $db_host, $db_username, $db_password, $db_name;
    $connect = new mysqli ($db_host, $db_username, $db_password, $db_name);
    if ($connection->connect_error) {      
        die("Failed to connect: " . $connection->connect_error);
    }
    if(isset($_REQUEST['Submit'])){
        if(isset($_POST["name"]) && isset($_POST["address"]) && isset($_POST["workingtime"]) 
        && isset($_POST["pricerange"]) && isset($_POST["phonenumber"])){
            $name = $_POST["name"];
            $address = $_POST["address"];
            $workingtime = $_POST["workingtime"];
            $pricerange = $_POST["pricerange"];
            $phonenumber = $_POST["phonenumber"];

            $sql = "insert into food (postID, rate, address, image, workingTime,priceRange, phoneNumber, foodName) 
                    values ('$postID', '$rating', '$address', '$image', '$workingtime', '$pricerange', '$phonenumber', '$name')";
            $result = $connect->query($sql);
        }
    }
?>