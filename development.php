<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      .form{
      border:2px solid #000;
      padding: 20px;
      }
      button{
        background-color:#00001a;
        width: 160px;
        height: 35px;
        font-size: 14px;
        color:white;
        margin-left: 20px;
      }
      .mapWrapper{
        position: relative;
        padding-bottom:40%;
      }
      .mapWrapper iframe{
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height:100%;
        padding-top: 90px;
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
<p style="text-align:center;font-size:25px;color:#00001a;font-weight:bolder;padding-top:80px;">Discover the City’s<br>
Best Property Developments</p>
<p style="text-align:center;color:black;padding-top:20px;font-size:14px;padding-bottom:50px">Ash Real Estate offers
investment-grade developments all over the city. The developments we offer have been conceptualized by
our development team to be high quality<br> assets using a data-driven approach in planning and design,
that gears property for high rental returns and an escalated rate of capital growth.</p>

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

<div class="mapWrapper">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.256232723013!2d36.81483586904314!3d-1.285564082601941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d714b90b4d%3A0xf58d8f9b297c294c!2sCentral%20Business%20District%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1597665029235!5m2!1sen!2ske" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


<div style="padding-top:40px" class="row">
 <div class="col-5 col-s-5 menu">
<img src="images/eins.jpg" alt="contact" style="max-width:100%;height:auto;">
 </div>
 <div class="col-5 col-s-10 menu">
   <div class="one" style="background-color:white;border-bottom:5px solid #000;padding: 23px;">
  <p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">House One</p>
  <p style="font-size:16px;color:black;font-weight:bolder;padding-top:20px;padding-left:20px;">xxxxx-xxxx-xxxx</p>
  <p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxx</p>
   <p style="font-size:16px;color:black;font-weight:bolder;padding-left:20px;">xxxxxxxx</p>
  <p style="padding-top:20px;padding-left:20px;"> A rare opportunity to own a level plot with subdivision scheme
    in a developed suburb.</p><br><br>
  <button type="button" name="button">Read More</button>
</div><br><br>
</div>
</div>

<div class="row">
<div class="col-5 col-s-5 menu">
<img src="images/zwei.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
 <div class="one" style="background-color:white;border-bottom:5px solid #000;padding:4px;">
<p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">House Two</p>
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
<img src="images/drei.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding: 12px;">
<p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">House Three</p>
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
<img src="images/vier4.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding:2px;">
<p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">House Four</p>
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
<img src="images/funf.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding:1px;">
<p style="font-size:24px;color:#00001a;padding-top:26px;padding-left:20px;font-weight:bolder">House Five</p>
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
<img src="images/sechs.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding:1px;">
<p style="font-size:24px;color:#00001a;padding-top:26px;padding-left:20px;font-weight:bolder">House Six</p>
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
<img src="images/sieben.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding:4px;">
<p style="font-size:24px;color:#00001a;padding-top:35px;padding-left:20px;font-weight:bolder">House Seven</p>
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
<img src="images/acht.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding:1px;">
<p style="font-size:24px;color:#00001a;padding-top:12px;padding-left:20px;font-weight:bolder">House Eight</p>
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
<img src="images/neun.jpg" alt="contact" style="max-width:100%;height:auto;">
</div>
<div class="col-5 col-s-10 menu">
<div class="one" style="background-color:white;border-bottom:5px solid #000;padding:1px;">
<p style="font-size:24px;color:#00001a;padding-top:4px;padding-left:20px;font-weight:bolder">House Nine</p>
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
