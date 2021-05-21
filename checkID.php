<?php
    function checkingID($connection ,$id){
        $sqlID = 
        "SELECT postID 
        FROM post 
        WHERE postID = '$id'";
        $resultID = mysqli_query($connection, $sqlID) or die(mysqli_connect_errno()."Query Doesnt run");

        return $resultID;
    }
?>