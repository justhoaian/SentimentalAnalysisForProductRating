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
    <?php include ('modules/mAdminHeader.php'); ?>

    <div class="container" >
        <div class = "w3-container">
            <!--Side Bar-->
            <nav class="w3-col m3 w3-row-padding w3-round-large w3-animate-left" style="z-index:3" id="mySidebar">
                <div class="w3-row m3 w3-row-padding w3-margin-top w3-round-large" style="background-color: #ffd1dc"> 
                    <div class="w3-container w3-margin-top w3-margin-bottom">
                        <a href="#" onclick="close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
                            <i class="fa fa-remove"></i>
                        </a>
                        <h1 class="food-and-drink-title">DRINKS</h1>
                        <br>        
                        <p style="text-align: center">We would like to provide you various options of places that satisfy even Gordon Ramsay in taste.</p>
                        <p style="text-align: center">We hope that we could offer you the best place for your intent from hanging out to celebrating anniversary in the industry.</p>
                    </div>
                </div>
                
                <br>

                <div class="w3-row m3 w3-row-padding w3-margin-top w3-round-large w3-collapse" style="z-index:3; background-color: #ffd1dc"> 
                    <div class="w3-container w3-margin-top">
                        <a href="#CoffeeTea" onclick="w3_close()" class="main w3-bar-item w3-button w3-padding">
                            <i class='w3-margin-right fas fa-coffee'></i>Coffee & Tea
                        </a>

                        <a href="#TakeAway" onclick="w3_close()" class="main w3-bar-item w3-button w3-padding">
                            <i class="fas fa-glass-whiskey w3-margin-right"></i>Take Away
                        </a>

                        <a href="#Lounge" onclick="w3_close()" class="main w3-bar-item w3-button w3-padding">
                            <i class="fas fa-glass-cheers w3-margin-right"></i>Lounge
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

            <!--Coffee & Tea-->
            <div class="w3-col m9 w3-container w3-row-padding w3-margin-top w3-round-large" style ="background-color: #ffdbe1">
                <?php
                    include_once "lib/config.php";
                    include_once ('lib/DataProvider.php');
                    global $db_host, $db_username, $db_password, $db_name;
                
                    $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
                    /* check connection */
                    if ($connection->connect_error) {      
                        die("Failed to connect: " . $connection->connect_error);
                      }
                    //Take data from database and show on the web

                    //Restaurant
                    $sqlCoffeeTea = "SELECT * FROM drink, drinkstalltype 
                    WHERE drinkStallType = 'Coffee & Tea'
                    AND drink.postID = drinkstalltype.postID";
                    $resultCoffeeTea = mysqli_query($connection, $sqlCoffeeTea);
                    if ($resultCoffeeTea){
                        if(mysqli_num_rows($resultCoffeeTea) > 0){
                            while($row = mysqli_fetch_array($resultCoffeeTea)){
                                echo"
                                <!--Title-->
                                <div class='row w3-round-large w3-margin-top w3-margin-bottom' id='CoffeeTea' style ='background-color: #ffd1dc'>
                                            <h3 class ='title'>".$row['drinkStallType']."</h3>
                                    </div>
                            
                                    <!--Image-->
                                    <div class='row w3-margin-bottom w3-margin-top'>
                                        <div class='w3-half'>
                                            <div class='w3-half w3-display-container w3-hover-opacity' style='transition:0.5s;width:100%'>
                                                <img src=".$row['image']." alt='drink' style='width:100%'>
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
                                                    <div class='w3-padding w3-text-pink w3-animate-opacity'>".$row['rating']." Rating</div>
                                                </div>
                            
                                                <div class='w3-display-middle w3-display-hover w3-large'>
                                                    <a href='Rating.php'><button type='button' class='w3-animate-opacity w3-btn w3-round w3-text-pink' style='background-color: #ffdbe1'>Show Rating</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                            
                                    <!--Information Description-->
                                        <div class='w3-half w3-margin-bottom' style ='background-color: #ffdbe1'>
                                            <div class='w3-container'>
                                                <h3>".$row['drinkName']."</h3>
                                                <br>
                                                <h6 class='w3-opacity'>$".$row['priceRange']."</h6>
                                                <p>".$row['drinkStallType']."</p>
                                                <p class='w3-large'></i>
                                                    <i class='fa fa-phone'></i> 
                                                    <i class='fa fa-wifi'></i> 
                                                    <i class='fa fa-glass'></i> 
                                                    <i class='fa fa-cutlery'></i>
                                                </p>
                                                <hr>
                                                <a href='Rating.php'><button class='w3-button w3-block w3-pink'>Rating</button></a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                        }
                    }

                    //Take Away
                    $sqlTakeAway = "SELECT * FROM drink, drinkstalltype 
                    WHERE drinkStallType = 'Take Away' 
                    AND drink.postID = drinkstalltype.postID";
                    $resultTakeAway = mysqli_query($connection, $sqlTakeAway);
                    if ($resultTakeAway){
                        if(mysqli_num_rows($resultTakeAway) > 0){
                            while($row = mysqli_fetch_array($resultTakeAway)){
                                echo"
                                <!--Title-->
                                <div class='row w3-round-large w3-margin-top w3-margin-bottom' id='TakeAway' style ='background-color: #ffd1dc'>
                                            <h3 class ='title'>".$row['drinkStallType']."</h3>
                                    </div>
                            
                                    <!--Image-->
                                    <div class='row w3-margin-bottom w3-margin-top'>
                                        <div class='w3-half'>
                                            <div class='w3-half w3-display-container w3-hover-opacity' style='transition:0.5s;width:100%'>
                                                <img src=".$row['image']." alt='drink' style='width:100%'>
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
                                                    <div class='w3-padding w3-text-pink w3-animate-opacity'>".$row['rating']." Rating</div>
                                                </div>
                            
                                                <div class='w3-display-middle w3-display-hover w3-large'>
                                                    <a href='Rating.php'><button type='button' class='w3-animate-opacity w3-btn w3-round w3-text-pink' style='background-color: #ffdbe1'>Show Rating</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                            
                                    <!--Information Description-->
                                        <div class='w3-half w3-margin-bottom' style ='background-color: #ffdbe1'>
                                            <div class='w3-container'>
                                                <h3>".$row['drinkName']."</h3>
                                                <br>
                                                <h6 class='w3-opacity'>$".$row['priceRange']."</h6>
                                                <p>".$row['drinkStallType']."</p>
                                                <p class='w3-large'></i>
                                                    <i class='fa fa-phone'></i> 
                                                    <i class='fa fa-wifi'></i> 
                                                    <i class='fa fa-glass'></i> 
                                                    <i class='fa fa-cutlery'></i>
                                                </p>
                                                <hr>
                                                <a href='Rating.php'><button class='w3-button w3-block w3-pink'>Rating</button></a>
                                            </div>
                                        </div>
                                    </div>
                                ";
                            }
                        }
                    }

                    //Lounge
                    $sqlLounge = "SELECT * FROM drink, drinkstalltype 
                    WHERE drinkStallType = 'Lounge' 
                    AND drink.postID = drinkstalltype.postID";
                    $resultLounge = mysqli_query($connection, $sqlLounge);
                    if ($resultLounge){
                        if(mysqli_num_rows($resultLounge) > 0){
                            while($row = mysqli_fetch_array($resultLounge)){
                                echo"
                                <!--Title-->
                                <div class='row w3-round-large w3-margin-top w3-margin-bottom' id='Lounge' style ='background-color: #ffd1dc'>
                                            <h3 class ='title'>".$row['drinkStallType']."</h3>
                                    </div>
                            
                                    <!--Image-->
                                    <div class='row w3-margin-bottom w3-margin-top'>
                                        <div class='w3-half'>
                                            <div class='w3-half w3-display-container w3-hover-opacity' style='transition:0.5s;width:100%'>
                                                <img src=".$row['image']." alt='drink' style='width:100%'>
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
                                                    <div class='w3-padding w3-text-pink w3-animate-opacity'>".$row['rating']." Rating</div>
                                                </div>
                            
                                                <div class='w3-display-middle w3-display-hover w3-large'>
                                                    <a href='Rating.php'><button type='button' class='w3-animate-opacity w3-btn w3-round w3-text-pink' style='background-color: #ffdbe1'>Show Rating</button></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                            
                                    <!--Information Description-->
                                        <div class='w3-half w3-margin-bottom' style ='background-color: #ffdbe1'>
                                            <div class='w3-container'>
                                                <h3>".$row['drinkName']."</h3>
                                                <br>
                                                <h6 class='w3-opacity'>$".$row['priceRange']."</h6>
                                                <p>".$row['drinkStallType']."</p>
                                                <p class='w3-large'></i>
                                                    <i class='fa fa-phone'></i> 
                                                    <i class='fa fa-wifi'></i> 
                                                    <i class='fa fa-glass'></i> 
                                                    <i class='fa fa-cutlery'></i>
                                                </p>
                                                <hr>
                                                <a href='Rating.php'><button class='w3-button w3-block w3-pink'>Rating</button></a>
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