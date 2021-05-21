<?php
    function checkingID($connection ,$id){
        $sqlID = 
        "SELECT postID 
        FROM post 
        WHERE postID = '$id'";
        $resultID = mysqli_query($connection, $sqlID) or die(mysqli_connect_errno()."Query ID Doesnt run");

        return $resultID;
    }

    function checkingUser($connection ,$username){
        $sqlUser = 
        "SELECT username 
        FROM account 
        WHERE username = '$username'";
        $resultUser = mysqli_query($connection, $sqlUser) or die(mysqli_connect_errno()."Query User Doesnt run");

        return $resultUser;
    }
?>