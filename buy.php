<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .form{
      border:2px solid #000;
      padding:20px;
      }
      button{
        background-color:#00001a;
        width: 160px;
        height: 35px;
        font-size: 14px;
        color:white;
        margin-left: 20px;
      }
      input[type=text], select {
        width:150px;
        padding:5px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        background-color: #f2f2f2;
      }

      input[type=submit] {
        width: 150px;
        background-color:#00001a;
        color: white;
        padding:5px;
        border: none;
        cursor: pointer;
        font-weight: bolder;
      }

      input[type=submit]:hover {
        background-color:orange;
      }
      .pagination {
  display: inline-block;
}
.pagination a {
  color: grey;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
}
.pagination a.active {
  background-color:blue;
  color: white;
  border: 1px solid blue;
}
.pagination a:hover:not(.active) {
  background-color: #ddd;
}
    </style>
  </head>
  <body>
    <?php include 'nav.php';?>

    <div class="row">
     <div class="col-3 col-s-3 menu">

     </div>
    <div class="col-6 col-s-10 menu">
<p style="text-align:center;font-size:25px;color:#00001a;font-weight:bolder;padding-top:80px;">Explore our Exciting Portfolio<br>
of Homes and Investment Properties</p>
<p style="text-align:center;color:black;padding-top:20px;font-size:14px;padding-bottom:50px">Your new investment is just a search away. Search our real-time listings for properties ranging from
  individual homes and offices to large scale mixed use developments. <br>
  Based on what you would like most, we have something in every price range and from all over the country!</p>

  <form class="form" action="" method="post">
    <select id="or" name="or">
    <option value="Buy or Rent">Buy or Rent</option>
    <option value="Buy">Buy</option>
    <option value="Rent">Rent</option>
  </select>
  <input type="location" id="location" name="location" placeholder="Location">
  <input type="submit" value="SEARCH"><br><br>
  <select id="prppertytype" name="propertytype">
  <option value="propertytype">Property Type</option>
  <option value="apartment">Apartment</option>
  <option value="house">House</option>
  <option value="land">Land</option>
  <option value="office">Office</option>
</select>

<select id="minbeds" name="minbeds">
<option value="minbeds">Min Beds</option>
<option value="1beds">1 Beds</option>
<option value="2beds">2 Beds</option>
<option value="3beds">3 Beds</option>
<option value="4beds">4 Beds</option>
<option value="5beds">5 Beds</option>
<option value="6beds">6 Beds</option>
</select>

<select id="maxbeds" name="maxbeds">
<option value="maxbeds">Max Beds</option>
<option value="1beds">1 Beds</option>
<option value="2beds">2 Beds</option>
<option value="3beds">3 Beds</option>
<option value="4beds">4 Beds</option>
<option value="5beds">5 Beds</option>
<option value="6beds">6 Beds</option>
</select>

<select id="minprice" name="minprice">
<option value="minprice">Min Price</option>
<option value="50,000">50,000</option>
<option value="100,000">100,000</option>
<option value="250,000">250,000</option>
<option value="500,000">500,000</option>
<option value="1m">1M</option>
<option value="2.5m">2.5M</option>
<option value="5m">5M</option>
<option value="7.5m">7.5M</option>
<option value="10m">10M</option>
<option value="12.5m">12.5M</option>
<option value="15m">15M</option>
<option value="17.5m">17.5M</option>
<option value="20m">20M</option>
<option value="22.5m">22.5M</option>
<option value="25m">25M</option>
<option value="27.5m">27.5M</option>
<option value="30m">30M</option>
<option value="32.5m">32.5M</option>
<option value="35m">35M</option>
<option value="37.5m">37.5M</option>
<option value="40m">40M</option>
<option value="42.5m">42.5M</option>
<option value="45m">45M</option>
<option value="47.5m">47.5M</option>
<option value="50m">50M</option>
<option value="52.5m">52.5M</option>
<option value="55m">55M</option>
<option value="57.5m">57.5M</option>
<option value="60m">60M</option>
<option value="62.5m">62.5M</option>
<option value="65m">65M</option>
<option value="67.5m">67.5M</option>
<option value="70m">70M</option>
<option value="72.5m">72.5M</option>
<option value="75m">75M</option>
<option value="77.5m">77.5M</option>
<option value="80m">80M</option>
<option value="82.5m">82.5M</option>
<option value="85m">85M</option>
<option value="87.5m">87.5M</option>
<option value="90m">90M</option>
<option value="92.5m">92.5M</option>
<option value="95m">95M</option>
<option value="97.5m">97.5M</option>
<option value="100m">100M</option>
<option value="100m+">100M+</option>
</select>

<select id="maxprice" name="maxprice">
<option value="maxprice">Max Price</option>
<option value="50,000">50,000</option>
<option value="100,000">100,000</option>
<option value="250,000">250,000</option>
<option value="500,000">500,000</option>
<option value="1m">1M</option>
<option value="2.5m">2.5M</option>
<option value="5m">5M</option>
<option value="7.5m">7.5M</option>
<option value="10m">10M</option>
<option value="12.5m">12.5M</option>
<option value="15m">15M</option>
<option value="17.5m">17.5M</option>
<option value="20m">20M</option>
<option value="22.5m">22.5M</option>
<option value="25m">25M</option>
<option value="27.5m">27.5M</option>
<option value="30m">30M</option>
<option value="32.5m">32.5M</option>
<option value="35m">35M</option>
<option value="37.5m">37.5M</option>
<option value="40m">40M</option>
<option value="42.5m">42.5M</option>
<option value="45m">45M</option>
<option value="47.5m">47.5M</option>
<option value="50m">50M</option>
<option value="52.5m">52.5M</option>
<option value="55m">55M</option>
<option value="57.5m">57.5M</option>
<option value="60m">60M</option>
<option value="62.5m">62.5M</option>
<option value="65m">65M</option>
<option value="67.5m">67.5M</option>
<option value="70m">70M</option>
<option value="72.5m">72.5M</option>
<option value="75m">75M</option>
<option value="77.5m">77.5M</option>
<option value="80m">80M</option>
<option value="82.5m">82.5M</option>
<option value="85m">85M</option>
<option value="87.5m">87.5M</option>
<option value="90m">90M</option>
<option value="92.5m">92.5M</option>
<option value="95m">95M</option>
<option value="97.5m">97.5M</option>
<option value="100m">100M</option>
<option value="100m+">100M+</option>
</select>
<input type="checkbox" id="house" name="house" value="house">
  <label for="house">surrounding suburbs</label><br>
  </form>
</div>
<div class="col-3 col-s-12 menu">
</div>
</div>

<div style="padding-top:100px" class="row">
 <div class="col-5 col-s-5 menu">
<img src="images/one.jpg" alt="contact" style="max-width:100%;height:auto;">
 </div>
 <div class="col-5 col-s-10 menu">
   <div class="one" style="background-color:white;border-bottom:5px solid #000;padding:42px;">
  <p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">Eins</p>
  <p style="font-size:16px;color:black;font-weight:bolder;padding-top:20px;padding-left:20px;">xxxxx-xxxx-xxxx</p>
  <p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxx</p>
   <p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxxxxxx</p>
  <p style="padding-top:20px;padding-left:20px;"> A rare opportunity to own a level plot with subdivision scheme in a
    developed suburb.</p><br><br>
  <button type="button" name="button">Read More</button>
</div><br><br>
</div>
</div>

<div class="row">
<div class="col-5 col-s-5 menu">
<img src="images/two.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
 <div class="one" style="background-color:white;border-bottom:5px solid #000;padding:15px;">
<p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">Zwei</p>
<p style="font-size:16px;color:black;font-weight:bolder;padding-top:20px;padding-left:20px;">xxxxx-xxxx-xxxx</p>
<p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxx</p>
 <p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxxxxxx</p>
<p style="padding-top:20px;padding-left:20px;"> A rare opportunity to own a level plot with subdivision scheme in a
  developed suburb.</p><br><br>
<button type="button" name="button">Read More</button>
</div><br><br>
</div>
</div>

<div class="row">
<div class="col-5 col-s-5 menu">
<img src="images/three.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding: 15px;">
<p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">Drei</p>
<p style="font-size:16px;color:black;font-weight:bolder;padding-top:20px;padding-left:20px;">xxxxx-xxxx-xxxx</p>
<p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxx</p>
 <p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxxxxxx</p>
<p style="padding-top:20px;padding-left:20px;"> A rare opportunity to own a level plot with subdivision scheme in a
  developed suburb.</p><br><br>
<button type="button" name="button">Read More</button>
</div><br><br>
</div>
</div>

<div class="row">
<div class="col-5 col-s-5 menu">
<img src="images/four.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding-bottom:28px;">
<p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">Vier</p>
<p style="font-size:16px;color:black;font-weight:bolder;padding-top:20px;padding-left:20px;">xxxxx-xxxx-xxxx</p>
<p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxx</p>
 <p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxxxxxx</p>
<p style="padding-top:20px;padding-left:20px;"> A rare opportunity to own a level plot with subdivision scheme in a
  developed suburb.</p><br><br>
<button type="button" name="button">Read More</button>
</div><br><br>
</div>
</div>

<div class="row">
<div class="col-5 col-s-5 menu">
<img src="images/five.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding:36px;">
<p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">Funf</p>
<p style="font-size:16px;color:black;font-weight:bolder;padding-top:20px;padding-left:20px;">xxxxx-xxxx-xxxx</p>
<p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxx</p>
 <p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxxxxxx</p>
<p style="padding-top:20px;padding-left:20px;"> A rare opportunity to own a level plot with subdivision scheme in a
  developed suburb.</p><br><br>
<button type="button" name="button">Read More</button>
</div><br><br>
</div>
</div>

<div class="row">
<div class="col-5 col-s-5 menu">
<img src="images/six.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding:15px;">
<p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">Sechs</p>
<p style="font-size:16px;color:black;font-weight:bolder;padding-top:20px;padding-left:20px;">xxxxx-xxxx-xxxx</p>
<p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxx</p>
 <p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxxxxxx</p>
<p style="padding-top:20px;padding-left:20px;"> A rare opportunity to own a level plot with subdivision scheme in a
  developed suburb.</p><br><br>
<button type="button" name="button">Read More</button>
</div><br><br>
</div>
</div>

<div class="row">
<div class="col-3 col-s-3 menu">
</div>
<div class="col-3 col-s-6 menu">
</div>
<div class="col-3 col-s-9 menu">
  <div class="pagination">
  <a href="#">Previous</a>
  <a href="#" class="active">1</a>
  <a href="#">Next</a>
</div>
</div>
<div class="col-3 col-s-12 menu">
</div>
</div>

    <?php include 'footer.php';?>
  </body>
</html>
