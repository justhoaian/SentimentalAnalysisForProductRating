<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MÚCBANG</title>

    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="JS/jquery.min.js"></script>
    <script src="JS/jquery.zoom.min.js"></script>

    <style>
        .well
        {
            background: rgba(255, 255, 255 , 0.7);
            border: none;
    
        }
		body
		{
			background-image: url('img/background1.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
            background-size: 100% 100%;
		}
		p
		{
			font-size: 13px;
            color: #FF1493;
		}
    </style>
</head>

<body>  
    <div class="container">

        <!-- Header -->
        <div class="container">
        <!--Header box-->
            <div class="container">
                <table>
                    <tr style = "width: 100%">
                        <th>
                        <a href="index.php">
                            <img src="img/MucBanglogo.png" alt="image not found" class="logo">
                        </a>
                            <img src="img/MucBangslogan.png" alt="image not found" class="logo">
                        </th>

                        <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>

                        <th class ="w3-right-align">
                        
                            <?php
                            if(isset($_SESSION["username"]))
                            {
                                include ("modules/mAccountInfor.php");
                            }
                            else
                            {
                                include ("modules/mAccountLogin.php");
                                include ("modules/mAccountSignUp.php");
                            }
                            ?>
                        </th>
                    </tr>
                </table>
            </div>


            <!--Nav bar-->
            <?php
                include_once "lib/config.php";
                include_once 'lib/DataProvider.php';
                include_once "checkID.php";
                $totalWeightComment = (int) NULL;

                global $db_host, $db_username, $db_password, $db_name;
                $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
                /* check connection */
                if ($connection->connect_error) {      
                    die("Failed to connect: " . $connection->connect_error);
                }

                echo"
                <div class='w3-container'>
                    <div class='w3-bar w3-pale-red w3-border w3-padding w3-round-large'>
                        <a href='index.php'>
                            <button href='#' class='w3-bar-item w3-button w3-mobile w3-round-large'>Home</button></a>
                        <a href='./Food.php?user=anhngoc'>
                            <button href='#' class='w3-bar-item w3-button w3-mobile w3-round-large'>Food</button></a>
                        <a href='./Drink.php?user=anhngoc'>
                            <button href='#' class='w3-bar-item w3-button w3-mobile w3-round-large'>Drinks</button></a>
                        <a href='Query.php'>
                            <button href='#' class='w3-bar-item w3-button w3-pink w3-mobile w3-right w3-round-large'>Query</button></a>
                    </div>
                </div>
                ";
            ?>
        </div>

        <!-- Photo box -->
        <div class="w3-content w3-section" style="width:100%;">
            <img class="photoSlides" src="img/food1.jpg" style="width:100%; height:100%;">
            <img class="photoSlides" src="img/drink1.jpg" style="width:100%; height:100%;">
            <img class="photoSlides" src="img/food2.jpg" style="width:100%; height:100%;">
            <img class="photoSlides" src="img/drink2.jpg" style="width:100%; height:100%;">
            <img class="photoSlides" src="img/food3.jpg" style="width:100%; height:100%;">
        </div>

        <!-- About us box -->
        <hr>
        <div class="row" style="color: #FF1493">
            <div class="col-md-12 well" >
                <h4><strong>About</strong></h4><br>
                <p>MÚCBANG is a food and drinks destination rating website, developed by MÚCGANG.</p>
                <p>The amusing destinations on this website are rated based on your comments.</p>
                <p>This site serves as a communication system between those who seek for places to meet up and those who give feedbacks based on their experience.</p>
                <br>
                <h4><strong>For more information, please kindly contact MÚCGANG via:</strong></h4>
                <p>Email: mucbang.bymucgang@gmail.com</p>
                <p>Phone: +84 070 228 400</p>
                <p>QR Code:</p>
                <img src="img/qrcode.png" style="width:20%; height:20%;">
            </div>  
        </div>
    </div>

    <!-- Photo box algorithm -->
    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("photoSlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3000); // Change image every 3 seconds
        }
    </script>
</body>
</html>