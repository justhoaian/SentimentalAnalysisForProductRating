<?php
    include_once "lib/config.php";
    include_once ('lib/DataProvider.php');
    include_once "checkID.php";

    global $db_host, $db_username, $db_password, $db_name;
    $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
    /* check connection */
    if ($connection->connect_error) {      
        die("Failed to connect: " . $connection->connect_error);
    }

    $username = strval($_GET['user']);
    $validUsername = checkingUser($connection, $username);
    $getUsername = mysqli_fetch_array($validUsername);
    $USER = $getUsername["username"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MÚCBANG</title>

    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Chau Huong -->
    <script src="JS/jquery.min.js"></script>
    <script src="JS/jquery.zoom.min.js"></script>

    <style>
        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
        }

        .sticky + .content {
            padding-top: 60px;
        }

		body
		{
			background-image: url('img/background1.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
            background-size: 100% 100%;
		}

		p{
			font-size: 13px;
            color: #FF1493;
		}

        .pro_pic{
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
        }
        
        .title{
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 35px;
            color: #DC143C;
            text-align: center;
            display: block;
        }

        .food-and-drink-title{
            margin-top: 0px;
            margin-bottom: 10px;
            text-align: center;
            text-transform: uppercase;
            font-size: 35px;
            letter-spacing: 2.5px;
            font-weight: 800;
            color: #e0607b;
            display: block;
        }
    </style>
</head>

<body>  
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

            echo"
            <div class='w3-container'>
                <div class='w3-bar w3-pale-red w3-border w3-padding w3-round-large'>
                    <a href='index.php'>
                        <button href='#' class='w3-bar-item w3-button w3-mobile w3-round-large'>Home</button></a>
                    <a href='./Food.php?user=".$USER."'>
                        <button href='#' class='w3-bar-item w3-button w3-mobile w3-round-large'>Food</button></a>
                    <a href='./Drink.php?user=".$USER."'>
                        <button href='#' class='w3-bar-item w3-button w3-mobile w3-round-large'>Drinks</button></a>
                    <a href='Query.php'>
                        <button href='#' class='w3-bar-item w3-button w3-pink w3-mobile w3-right w3-round-large'>Query</button></a>
                </div>
            </div>
            ";
        ?>
    </div>

    <div class="container" >
        <div class = "w3-container">
            <!--Side Bar-->
            <nav class="w3-col m3 w3-row-padding w3-round-large w3-animate-left" style="z-index:3" id="mySidebar">
                <div class="w3-row m3 w3-row-padding w3-margin-top w3-round-large" style="background-color: #ffd1dc"> 
                    <div class="w3-container w3-margin-top w3-margin-bottom">
                        <a href="#" onclick="close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
                            <i class="fa fa-remove"></i>
                        </a>
                        <h1 class="food-and-drink-title">FOODS</h1>
                        <br>        
                        <p style="text-align: center">We would like to provide you various options of places that satisfy even Gordon Ramsay in taste.</p>
                        <p style="text-align: center">We hope that we could offer you the best place for your intent from hanging out to celebrating anniversary in the industry.</p>
                    </div>
                </div>
                
                <br>

                <div class="w3-row m3 w3-row-padding w3-margin-top w3-round-large w3-collapse" style="z-index:3; background-color: #ffd1dc"> 
                    <div class="w3-container w3-margin-top">
                        <a href="#restaurant" onclick="w3_close()" class="main w3-bar-item w3-button w3-padding">
                            <i class='w3-margin-right fas fa-pizza-slice'></i>Restaurants
                        </a>

                        <a href="#buffet" onclick="w3_close()" class="main w3-bar-item w3-button w3-padding">
                            <i class="fas fa-hamburger w3-margin-right"></i>Buffet
                        </a>

                        <a href="#streetFood" onclick="w3_close()" class="main w3-bar-item w3-button w3-padding">
                            <i class="fas fa-hotdog w3-margin-right"></i>Street Food
                        </a>
                        
                        <div class="w3-panel w3-large" style="text-align: center">
                            <i href ="www.facebook.com" class="fab fa-facebook w3-hover-opacity"></i>
                            <i href ="github.com/justhoaian/SentimentalAnalysisForProductRating" class="fab fa-instagram w3-hover-opacity"></i>
                            <i href ="github.com/justhoaian/SentimentalAnalysisForProductRating" class="fab fa-twitter w3-hover-opacity"></i>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

            <!--Page Content-->

            <!--Restaurant-->
            <div class="w3-col m9 w3-container w3-row-padding w3-margin-top w3-round-large" style ="background-color: #ffdbe1">
                <?php
                    //Take data from database and show on the web
                    //Restaurant
                    $sqlRestaurant = "SELECT foodstalltype.foodStallType, 	
                    food.postID,
                    food.rating,
                    food.address,
                    food.image,
                    food.workingTime,
                    food.priceRange,
                    food.phoneNumber,
                    food.foodName,
                    account.username
                    FROM food, foodstalltype, account 
                    WHERE foodStallType = 'Restaurant'
                    AND account.username = '$USER'
                    AND food.postID = foodstalltype.postID";
                    $resultRestaurant = mysqli_query($connection, $sqlRestaurant);
                    if ($resultRestaurant){
                        if(mysqli_num_rows($resultRestaurant) > 0){
                            while($row = mysqli_fetch_array($resultRestaurant)){
                                echo"
                                <!--Title-->
                                <div class='row w3-round-large w3-margin-top w3-margin-bottom' id='restaurant' style ='background-color: #ffd1dc'>
                                            <h3 class ='title'>".$row['foodStallType']."</h3>
                                    </div>
                            
                                    <!--Image-->
                                    <div class='row w3-margin-bottom w3-margin-top'>
                                        <div class='w3-half'>
                                            <div class='w3-half w3-display-container w3-hover-opacity' style='transition:0.5s;width:100%'>
                                                <img src=".$row['image']." alt='food' style='width:100%'>
                                                <div class='w3-display-topleft w3-display-hover w3-large'>
                                                    <button type='button' class='w3-animate-opacity w3-btn w3-margin w3-round' style='left:65px; background-color: #ffdbe1' title='Like'>
                                                        <i class='fa fa-heart w3-text-pink'></i>
                                                    </button>
                                                </div>
                            
                                                <div class='w3-display-topleft w3-display-hover w3-large' style='left:65px'>
                                                    <button type='button' class='w3-animate-opacity w3-btn w3-margin w3-round' style='left:65px; background-color: #ffdbe1' title='Share'>
                                                        <i class='fa fa-paper-plane w3-text-pink'></i>
                                                    </button>
                                                </div>
                            
                                                <div class='w3-display-bottomleft w3-display-hover w3-large w3-text-white'>
                                                    <div class='w3-padding w3-text-pink w3-animate-opacity'>Rating point: ".$row['rating']."</div>
                                                </div>
                            
                                                <div class='w3-display-middle w3-display-hover w3-large'>
                                                    <a href='./Rating.php?id=".$row['postID']."&user=".$row['username']."'><button type='submit' name = 'submit' class='w3-animate-opacity w3-btn w3-round w3-text-pink' style='background-color: #ffdbe1'>Show Rating</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                            
                                    <!--Information Description-->
                                        <div class='w3-half w3-margin-bottom' style ='background-color: #ffdbe1'>
                                            <div class='w3-container'>
                                                <h3>".$row['foodName']."</h3>
                                                <br>
                                                <h6 class='w3-opacity'>$".$row['priceRange']."</h6>
                                                <p>".$row['foodStallType']."</p>
                                                <p class='w3-large'></i>
                                                    <i class='fa fa-phone'></i> 
                                                    <i class='fa fa-wifi'></i> 
                                                    <i class='fa fa-glass'></i> 
                                                    <i class='fa fa-cutlery'></i>
                                                </p>
                                                <hr>
                                                <a href='./Rating.php?id=".$row['postID']."&user=".$row['username']."'><button type='submit' name = 'submit' class='w3-button w3-block w3-pink'>Rating</button></a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                        }
                    }

                    //Buffet
                    $sqlBuffet = "SELECT foodstalltype.foodStallType, 	
                    food.postID,
                    food.rating,
                    food.address,
                    food.image,
                    food.workingTime,
                    food.priceRange,
                    food.phoneNumber,
                    food.foodName,
                    account.username
                    FROM food, foodstalltype, account 
                    WHERE foodStallType = 'Buffet'
                    AND account.username = '$USER'
                    AND food.postID = foodstalltype.postID";
                    $resultBuffet = mysqli_query($connection, $sqlBuffet);
                    if ($resultBuffet){
                        if(mysqli_num_rows($resultBuffet) > 0){
                            while($row = mysqli_fetch_array($resultBuffet)){
                                echo"
                                <!--Title-->
                                <div class='row w3-round-large w3-margin-top w3-margin-bottom' id='buffet' style ='background-color: #ffd1dc'>
                                            <h3 class ='title'>".$row['foodStallType']."</h3>
                                    </div>
                            
                                    <!--Image-->
                                    <div class='row w3-margin-bottom w3-margin-top'>
                                        <div class='w3-half'>
                                            <div class='w3-half w3-display-container w3-hover-opacity' style='transition:0.5s;width:100%'>
                                                <img src=".$row['image']." alt='food' style='width:100%'>
                                                <div class='w3-display-topleft w3-display-hover w3-large'>
                                                    <button type='button' class='w3-animate-opacity w3-btn w3-margin w3-round' style='left:65px; background-color: #ffdbe1' title='Like'>
                                                        <i class='fa fa-heart w3-text-pink'></i>
                                                    </button>
                                                </div>
                            
                                                <div class='w3-display-topleft w3-display-hover w3-large' style='left:65px'>
                                                    <button type='button' class='w3-animate-opacity w3-btn w3-margin w3-round' style='left:65px; background-color: #ffdbe1' title='Share'>
                                                        <i class='fa fa-paper-plane w3-text-pink'></i>
                                                    </button>
                                                </div>
                            
                                                <div class='w3-display-bottomleft w3-display-hover w3-large w3-text-white'>
                                                    <div class='w3-padding w3-text-pink w3-animate-opacity'>Rating point: ".$row['rating']."</div>
                                                </div>
                            
                                                <div class='w3-display-middle w3-display-hover w3-large'>
                                                    <a href='./Rating.php?id=".$row['postID']."&user=".$row['username']."'><button type='submit' name = 'submit' class='w3-animate-opacity w3-btn w3-round w3-text-pink' style='background-color: #ffdbe1'>Show Rating</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                            
                                    <!--Information Description-->
                                        <div class='w3-half w3-margin-bottom' style ='background-color: #ffdbe1'>
                                            <div class='w3-container'>
                                                <h3>".$row['foodName']."</h3>
                                                <br>
                                                <h6 class='w3-opacity'>$".$row['priceRange']."</h6>
                                                <p>".$row['foodStallType']."</p>
                                                <p class='w3-large'></i>
                                                    <i class='fa fa-phone'></i> 
                                                    <i class='fa fa-wifi'></i> 
                                                    <i class='fa fa-glass'></i> 
                                                    <i class='fa fa-cutlery'></i>
                                                </p>
                                                <hr>
                                                <a href='./Rating.php?id=".$row['postID']."&user=".$row['username']."'><button type='submit' name = 'submit' class='w3-button w3-block w3-pink'>Rating</button></a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                        }
                    }

                    //Street Food
                    $sqlStreetFood = "SELECT foodstalltype.foodStallType, 	
                    food.postID,
                    food.rating,
                    food.address,
                    food.image,
                    food.workingTime,
                    food.priceRange,
                    food.phoneNumber,
                    food.foodName,
                    account.username
                    FROM food, foodstalltype, account 
                    WHERE foodStallType = 'Street Food'
                    AND account.username = '$USER'
                    AND food.postID = foodstalltype.postID";
                    $resultStreetFood = mysqli_query($connection, $sqlStreetFood);
                    if ($resultStreetFood){
                        if(mysqli_num_rows($resultStreetFood) > 0){
                            while($row = mysqli_fetch_array($resultStreetFood)){
                                echo"
                                <!--Title-->
                                <div class='row w3-round-large w3-margin-top w3-margin-bottom' id='streetFood' style ='background-color: #ffd1dc'>
                                            <h3 class ='title'>".$row['foodStallType']."</h3>
                                    </div>
                            
                                    <!--Image-->
                                    <div class='row w3-margin-bottom w3-margin-top'>
                                        <div class='w3-half'>
                                            <div class='w3-half w3-display-container w3-hover-opacity' style='transition:0.5s;width:100%'>
                                                <img src=".$row['image']." alt='food' style='width:100%'>
                                                <div class='w3-display-topleft w3-display-hover w3-large'>
                                                    <button type='button' class='w3-animate-opacity w3-btn w3-margin w3-round' style='left:65px; background-color: #ffdbe1' title='Like'>
                                                        <i class='fa fa-heart w3-text-pink'></i>
                                                    </button>
                                                </div>
                            
                                                <div class='w3-display-topleft w3-display-hover w3-large' style='left:65px'>
                                                    <button type='button' class='w3-animate-opacity w3-btn w3-margin w3-round' style='left:65px; background-color: #ffdbe1' title='Share'>
                                                        <i class='fa fa-paper-plane w3-text-pink'></i>
                                                    </button>
                                                </div>
                            
                                                <div class='w3-display-bottomleft w3-display-hover w3-large w3-text-white'>
                                                    <div class='w3-padding w3-text-pink w3-animate-opacity'>Rating point: ".$row['rating']."</div>
                                                </div>
                            
                                                <div class='w3-display-middle w3-display-hover w3-large'>
                                                    <a href='./Rating.php?id=".$row['postID']."&user=".$row['username']."'><button type='submit' name = 'submit' class='w3-animate-opacity w3-btn w3-round w3-text-pink' style='background-color: #ffdbe1'>Show Rating</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                            
                                    <!--Information Description-->
                                        <div class='w3-half w3-margin-bottom' style ='background-color: #ffdbe1'>
                                            <div class='w3-container'>
                                                <h3>".$row['foodName']."</h3>
                                                <br>
                                                <h6 class='w3-opacity'>$".$row['priceRange']."</h6>
                                                <p>".$row['foodStallType']."</p>
                                                <p class='w3-large'></i>
                                                    <i class='fa fa-phone'></i> 
                                                    <i class='fa fa-wifi'></i> 
                                                    <i class='fa fa-glass'></i> 
                                                    <i class='fa fa-cutlery'></i>
                                                </p>
                                                <hr>
                                                <a href='./Rating.php?id=".$row['postID']."&user=".$row['username']."'><button type='submit' name = 'submit' class='w3-button w3-block w3-pink'>Rating</button></a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <script>
    //scroll when hit the button

    $(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){
    
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
        } // End if
    });
    });
    </script>

</body>
</html>