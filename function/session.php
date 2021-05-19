<?php
session_start();

//if the user is already logged in then redirect user to home page
if (isset($_SESSION["username"]) && $_SESSION["username"] === true){
    header("location: index.php");
    exit;
}
?> 