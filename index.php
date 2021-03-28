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
        <table>
            <tr style = "width: 100%">
                <th>
                    <img src="Image/logoMucBang.png" alt="image not found" class="logo">
                    <img src="Image/youlikeit.png" alt="image not found" class="logo">
                    <img src="Image/mucit.png" alt="image not found" class="logo">
                </th>

                <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>

                <th class ="w3-right-align">
                    <th>Sign in: </th>
                    <th>
                        <th>
                            <input type="text" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Username" size=10>
                        </th>
                    </th>

                    <th>
                        <th>
                            <input type="text" class="w3-bar-item w3-input w3-mobile w3-border w3-round-large" placeholder="Password" size=10>
                        </th>
                    </th>
                </th>
                
                <th>
                    <button href="#" class="w3-bar-item w3-button w3-pink w3-mobile w3-right w3-round-large">Sign up</button>
                </th>
            </tr>
        </table>


        <!--Nav bar-->
        <div class="w3-container">
            <div class="w3-bar w3-pale-red w3-border w3-padding">
                <a href="#" class="w3-bar-item w3-button w3-mobile">Home</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Food</a>
                <a href="#" class="w3-bar-item w3-button w3-mobile">Drinks</a>
                <button href="#" class="w3-bar-item w3-button w3-pink w3-mobile w3-right w3-round-large">Go</button>
                <input type="text" class="w3-bar-item w3-input w3-mobile w3-right w3-round-large" placeholder="Search..">
            </div>
        </div>

        <div class="w3-content w3-section">
            <img class="mySlides " src="Image/food1.jpg" style="width:100%; height:100%;">
            <img class="mySlides " src="Image/drink1.jpg" style="width:100%; height:100%;">
        </div>


        <hr>
        <div class="row" style="color: #FF1493">
            <div class="col-md-12 well" >
              <h4><strong>About</strong></h4><br>
              <p>This site provides a secured method for booking hotel rooms.</p>
              <br>
              <p>As we assure that customers’ personal information is only retained in database for hotel booking affairs only</p>
              <br>
              <p>The site serves as a convenient communication system between the hotel and those who seek for competitive price which goes along with high-quality infrastructure.</p>
              <br>
              <p>We wish you a pleasant time experiencing our service.</p>
              
            </div>  
        </div>
        <div class="row" style="color: #FF1493">
            <div class="col-md-4 wellfix">
              <h4><strong>For further information</strong></h4>
              <h4><strong>please kindly contact us:</strong></h4>
              <hr>
              Tel : +0182555555<br>
              Mail : QLT@gmail.com <br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 wellfix">
                <h4><strong>Developed By</strong></h4><hr>
                <a href="#">Company QLT</a>

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
        setTimeout(carousel, 3000); // Change image every 2 seconds
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>