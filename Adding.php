<div id = Adding>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Chau Huong -->
    <script src="JS/jquery.min.js"></script>
    <script src="JS/jquery.zoom.min.js"></script>
<style>

/*Form style*/
*{
    box-sizing: border-box
}
input[type=text], select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 10px;
  resize: vertical;
}
label {
  padding: 5px 12px 7px 0;
  display: inline-block;
  font-size: 20px;
  color: #FF1493;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 20px;
  cursor: pointer;
  float: right;
}
input[type=submit]:hover {
  background-color: #45a049;
}
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}
.row:after {
  
  display: table;
  clear: both;
}
.heading{
  font-size: 100px;
  text-align: center;
  color: #FF1493;
}
.formcontainer{
  max-width: 600px;
  min-width: 320px;
  width: 100%;
  margin: 10px auto;
  top: 0;
  padding: 15px;
} 

/*From index*/
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
.pro_pic
{
  border-radius: 50%;
  height: 50px;
  width: 50px;
  margin-bottom: 15px;
  margin-right: 15px;

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>  
    <?php include ('modules/mAdminHeader.php'); ?>

<!--Adding form-->
<br>
<div class = "heading">
<h1><b>ADDING BEVERAGE</b></h1>
</div>
<div class="formcontainer">
  <form action="/action_page.php">
  <div class="row">
    <div class="col-25">
      <label for="rname">Name of beverage</label>
    </div>
    <div class="col-75">
      <input type="text" id="rname" name="Nameofrestaurant">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="Types">Types of beverage</label>
    </div>
    <div class="col-75">
      <select id="types" name="types">
        <option value="restaurant">Restaurant</option>
        <option value="coffee">Coffee Shop</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="district">District</label>
    </div>
    <div class="col-75">
      <input type="text" id="district" name="district" placeholder="Full district...">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="PNumber">Phone Number</label>
    </div>
    <div class="col-75">
      <br>
      <input type="text" id="PNumber" name="Phonenumber">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="BDescript">Brief Description</label>
    </div>
    <div class="col-75">
      <textarea id="BDescript" name="BriefDescription" placeholder="Write something.." style="height:100px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  
  </form>
</div>
</body>


