<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MÚCBANG</title>

    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="JS/jquery.min.js"></script>
    <script src="JS/jquery.zoom.min.js"></script>

    <style>
		body
		{
			background-image: url('img/background1.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
            background-size: 100% 100%;
		}
        p{
            text-align: left;
            margin-bottom: 4px;
            font-size: 19px;
            color: #f584b5;
            display: block;
        }
		.p1
		{
            text-align: center;
			font-size: 19px;
            color: #ffd1dc;
		}
        .p2{
            text-align: center;
            font-size: 19px;
            color: white;
        }
        .title{
            text-align: center;
            margin-bottom: 4px;
            font-size: 19px;
            color: #ffd1dc;
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
        .name{
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 35px;
            color: #f5699f;
            text-align: left;
            display: block;
        }

        .time-right {
            float: right;
            color: #aaa;
        }

        .container_chat {
            border: 2px solid #dedede;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }
        .container_chat::after {
            content: "";
            clear: both;
            display: table;
        }

        .container_chat img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

    </style>
</head>

<body>  
    <div class="container">

        <!-- Header -->
        <?php 
            include 'modules/mHeader.php';
            include_once "lib/config.php";
            include_once 'lib/DataProvider.php';
            include_once "checkID.php";
            global $db_host, $db_username, $db_password, $db_name;
            $connection = new mysqli($db_host, $db_username, $db_password, $db_name);
            /* check connection */
            if ($connection->connect_error) {      
                die("Failed to connect: " . $connection->connect_error);
              }
            
            //Get the ID of the Stall
            $id = intval($_GET['id']);
            $validID = checkingID($connection, $id);
            $getID = mysqli_fetch_array($validID);
            $ID = $getID["postID"];
            //Take data from database and show on the web
            if ($ID){
                //If food, show detail of Food
                $sqlFood = "SELECT * FROM food, foodstalltype 
                WHERE food.postID = '$ID'
                AND food.postID = foodstalltype.postID";
                $resultFood = mysqli_query($connection, $sqlFood) or die(mysqli_connect_errno()."weeeeeee");;
                if ($resultFood){
                    if(mysqli_num_rows($resultFood) > 0){
                        while ($showFood = mysqli_fetch_array($resultFood)){
                            echo"
                                <div class='container' >
                                    <div class = 'w3-container'>
                                        <div class='w3-container' style='position:relative; background-color: #ffd1dc'>
                                            <h1 class='food-and-drink-title' style='text-shadow:1px 1px 0 #444'>".$showFood['foodStallType']."</h1>
                                        </div>
                        
                                        <!-- picture and name, rating -->
                        
                                        <div class='w3-animate-zoom' style='padding:20px 30px; background-size:cover; background-color: #ffdbe1'>
                                            <div class='w3-section w3-row-padding'>
                                                <div class='w3-twothird'>
                                                    <div class='w3-card-4'>
                                                        <div class='w3-display-container'>
                                                            <img src=".$showFood['image']." alt='Car' style='width:100%'>
                                                        </div>
                        
                                                        <div class='w3-container w3-light-grey'>
                                                            <p class = 'name'>".$showFood['foodName']."</p>
                                                            <p>Rating point: ".$showFood['rating']."</p>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <!-- information -->
                        
                                                <div class='w3-third w3-container w3-center'>
                                                    <div class='w3-card-4'>
                                                        <div class='w3-container' style='background-color: #ffd1dc'>
                                                            <i class='fas fa-map-marker-alt w3-margin-top w3-margin-bottom' style='font-size:38px; color:#e0607b'></i>
                                                            <p class='title' style='color: white'>Address</p>
                                                        </div>
                        
                                                        <div class='w3-container w3-white'>
                                                            <p class='p1'>".$showFood['address']."</p>
                                                        </div>
                                                    </div>
                        
                                                    <div class='w3-card-4 w3-section'>
                                                        <div class='w3-container w3-white'>
                                                            <i class='fas fa-map-marker-alt w3-margin-top w3-margin-bottom' style='font-size:38px; color:#e0607b'></i>
                                                            <p class='title'>Phone Number</p>
                                                        </div>
                        
                                                        <div class='w3-container' style='background-color: #ffd1dc'>
                                                            <p class='p2'>".$showFood['phoneNumber']."</p>
                                                        </div>
                                                    </div>
                        
                                                    <div class='w3-card-4'>
                                                        <div class='w3-container' style='background-color: #ffd1dc'>
                                                            <i class='fas fa-map-marker-alt w3-margin-top w3-margin-bottom' style='font-size:38px; color:#e0607b'></i>
                                                            <p class='title' style='color: white'>Price</p>
                                                        </div>
                        
                                                        <div class='w3-container w3-white'>
                                                            <p class='p1'>".$showFood['priceRange']."</p>
                                                        </div>
                                                    </div>
                        
                                                    <div class='w3-card-4 w3-section'>
                                                        <div class='w3-container w3-white'>
                                                            <i class='fas fa-map-marker-alt w3-margin-top w3-margin-bottom' style='font-size:38px; color:#e0607b'></i>
                                                            <p class='title'>Working Time</p>
                                                        </div>
                        
                                                        <div class='w3-container' style='background-color: #ffd1dc'>
                                                            <p class='p2'>".$showFood['workingTime']."</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    }
                }
                //If drink, show detail of Drink
                $sqlDrink = "SELECT * FROM drink, drinkstalltype 
                WHERE drink.postID = '$ID'
                AND drink.postID = drinkstalltype.postID";
                $resultDrink = mysqli_query($connection, $sqlDrink) or die(mysqli_connect_errno()."weeeeeee");;
                if ($resultDrink){
                    if(mysqli_num_rows($resultDrink) > 0){
                        while ($showDrink = mysqli_fetch_array($resultDrink)){
                            echo"
                                <div class='container' >
                                    <div class = 'w3-container'>
                                        <div class='w3-container' style='position:relative; background-color: #ffd1dc'>
                                            <h1 class='food-and-drink-title' style='text-shadow:1px 1px 0 #444'>".$showDrink['drinkStallType']."</h1>
                                        </div>
                        
                                        <!-- picture and name, rating -->
                        
                                        <div class='w3-animate-zoom' style='padding:20px 30px; background-size:cover; background-color: #ffdbe1'>
                                            <div class='w3-section w3-row-padding'>
                                                <div class='w3-twothird'>
                                                    <div class='w3-card-4'>
                                                        <div class='w3-display-container'>
                                                            <img src=".$showDrink['image']." alt='Car' style='width:100%'>
                                                        </div>
                        
                                                        <div class='w3-container w3-light-grey'>
                                                            <p class = 'name'>".$showDrink['drinkName']."</p>
                                                            <p>Rating Point: ".$showDrink['rating']."</p>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <!-- information -->
                        
                                                <div class='w3-third w3-container w3-center'>
                                                    <div class='w3-card-4'>
                                                        <div class='w3-container' style='background-color: #ffd1dc'>
                                                            <i class='fas fa-map-marker-alt w3-margin-top w3-margin-bottom' style='font-size:38px; color:#e0607b'></i>
                                                            <p class='title' style='color: white'>Address</p>
                                                        </div>
                        
                                                        <div class='w3-container w3-white'>
                                                            <p class='p1'>".$showDrink['address']."</p>
                                                        </div>
                                                    </div>
                        
                                                    <div class='w3-card-4 w3-section'>
                                                        <div class='w3-container w3-white'>
                                                            <i class='fas fa-map-marker-alt w3-margin-top w3-margin-bottom' style='font-size:38px; color:#e0607b'></i>
                                                            <p class='title'>Phone Number</p>
                                                        </div>
                        
                                                        <div class='w3-container' style='background-color: #ffd1dc'>
                                                            <p class='p2'>".$showDrink['phoneNumber']."</p>
                                                        </div>
                                                    </div>
                        
                                                    <div class='w3-card-4'>
                                                        <div class='w3-container' style='background-color: #ffd1dc'>
                                                            <i class='fas fa-map-marker-alt w3-margin-top w3-margin-bottom' style='font-size:38px; color:#e0607b'></i>
                                                            <p class='title' style='color: white'>Price</p>
                                                        </div>
                        
                                                        <div class='w3-container w3-white'>
                                                            <p class='p1'>".$showDrink['priceRange']."</p>
                                                        </div>
                                                    </div>
                        
                                                    <div class='w3-card-4 w3-section'>
                                                        <div class='w3-container w3-white'>
                                                            <i class='fas fa-map-marker-alt w3-margin-top w3-margin-bottom' style='font-size:38px; color:#e0607b'></i>
                                                            <p class='title'>Working Time</p>
                                                        </div>
                        
                                                        <div class='w3-container' style='background-color: #ffd1dc'>
                                                            <p class='p2'>".$showDrink['workingTime']."</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
                        }
                    }
                }
            
            else {
                echo"Urhh ... WUT?";
            }
            }

            $sqlComment = "SELECT comment.content, comment.time, account.name
            FROM post, preferences, comment, account
            WHERE preferences.postID = post.postID
            AND	preferences.username = account.username
            AND preferences.commentID = comment.commentID";

            $resultComment = mysqli_query($connection, $sqlComment) or die(mysqli_connect_errno()."wooooooo");;
            if ($resultComment){
                if(mysqli_num_rows($resultComment) > 0){
                    while ($showComment = mysqli_fetch_array($resultComment)){
                        echo"
                            <div class='container_chat'>
                                <img src='img/user1.jpg' alt='Avatar' style='width:100%;'>
                                    <p class = 'name'></p>
                                    <p>".$showComment['content']."</p>
                                <span class='time-right'>".$showComment['content']."</span>
                            </div>
                        ";
                    }
                }
            }
         
        include ('pages/exCommentBox.php'); ?>
        
    </div>
</body>
</html>