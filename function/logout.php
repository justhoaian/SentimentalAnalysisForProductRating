<?php

session_start();
unset($_SESSION["username"]);
unset($_SESSION["name"]);
header ("location:http://localhost:8080/SentimentalAnalysisForProductRating/index.php");

?>

