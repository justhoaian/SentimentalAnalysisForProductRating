<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MÚCBANG</title>

    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Chau Huong -->
    <script src="JS/jquery.min.js"></script>
    <script src="JS/jquery.zoom.min.js"></script>

    <style>
        .well
        {
            background: rgba(0,0,0,0.7);
            border: none;
    
        }
        .wellfix
        {
            background: rgba(0,0,0,0.7);
            border: none;
            height: 150px;
        }
		body
		{
			background-image: url('Image/background1.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
            background-size: 100% 100%;
		}
		p
		{
			font-size: 13px;
            color: #FF1493;
		}
        .pro_pic
        {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            margin-bottom: 15px;
            margin-right: 15px;
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
                        <img src="Image/MucBanglogo.png" alt="image not found" class="logo">
                        <img src="Image/MucBangslogan.png" alt="image not found" class="logo">
                    </th>

                    <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>

                    <th class ="w3-right-align">
                        <th>Sign in:  </th>
                        <th>
                            <th>
                                <input type="text" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Username" size=10>
                            </th>
                        </th>

                        <th>
                            <th>
                                <input type="password" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Password" size=10>
                            </th>
                        </th>
                    </th>

                    <th class="w3-right-align">&nbsp&nbsp&nbsp</th>
                    
                    <th>
                        <button href="#" class="w3-bar-item w3-button w3-pink w3-mobile w3-right w3-round-large">Sign up</button>
                    </th>
                </tr>
            </table>
        </div>


        <!--Nav bar-->
        <div class="w3-container">
            <div class="w3-bar w3-pale-red w3-border w3-padding w3-round-large">
                <a href="#" class="w3-bar-item w3-button w3-mobile w3-round-large">Home</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile w3-round-large">Food</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile w3-round-large">Drinks</a>
                    <div class = "w3-dropdown-hover">
                    <button class = "w3-bar-item w3-button w3-mobile w3-round-large">Admin</button>
                        <div class = "w3-dropdown-content w3-bar-block w3-card-4">
                        <a href="#" class="w3-bar-item w3-button">Adding</a>
                        <a href="#" class="w3-bar-item w3-button">Deleting</a>
                        <a href="#" class="w3-bar-item w3-button">Modify</a>
                        </div>
                    </div>
                <button href="#" class="w3-bar-item w3-button w3-pink w3-mobile w3-right w3-round-large">Go</button>
                <input type="text" class="w3-bar-item w3-input w3-mobile w3-right w3-round-large" placeholder="Search..">
            </div>
        </div>

        <!-- Slider box -->
        <div class="w3-content w3-section" style="width:100%;">
            <img class="mySlides " src="Image/food1.jpg" style="width:100%; height:100%;">
            <img class="mySlides " src="Image/drink1.jpg" style="width:100%; height:100%;">
            <img class="mySlides " src="Image/food2.jpg" style="width:100%; height:100%;">
        </div>

        <!-- <div class="sliderboxHead">
            <div id="sliderbox" >
                <img src="Image/food1.jpg" alt="image not found">
                <img src="Image/drink1.jpg" alt="image not found">
                <img src="Image/food2.jpg" alt="image not found">
                <img src="Image/drink2.jpg" alt="image not found">
                <img src="Image/food3.jpg" alt="image not found">
            </div>
        </div> -->


        
        <div class="row" style="color: #FF1493">
            <div class="col-md-12 well" >
                <h4><strong></t>About</strong></h4><br>
                <p>MÚCBANG is a food and drinks destination rating website, developed by MÚCGANG.</p>
                <p>The amusing destinations on this website are rated based on your comments.</p>
                <p>This site serves as a communication system between those who seek for places to meet up and those who give feedbacks based on their experience.</p>
                <br>
                <h4><strong><p>For more information, please kindly contact MÚCGANG via:</p><strong><h4>
                <p>Email: mucbang.bymucgang@gmail.com</p>
                <p>Phone: +84 070 228 400</p>
                <p>QR Code:
                <img src="Image/qrcode.png" style="width:20%; height:20%;"></p>
            </div>  
        </div>
    </div>


    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 3000); // Change image every 3 seconds
        }
    </script>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
</body>

</html>