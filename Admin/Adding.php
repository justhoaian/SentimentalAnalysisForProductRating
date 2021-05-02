<!DOCTYPE html>
<html>
<head>
<style>
*{
    box-sizing: border-box
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

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

<h2>Adding beverage</h2>

<div class="container">
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
      <input type="text" id="PNumber" name="Phonenumber">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="BDescript">Brief Description</label>
    </div>
    <div class="col-75">
      <textarea id="BDescript" name="BriefDescription" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>
