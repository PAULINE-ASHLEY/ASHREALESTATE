<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

    /* Slideshow container */
    .slideshow-container {
      max-width:100%;
      position: relative;
      margin: auto;
    }

    /* Hide the images by default */
    .mySlides {
      display: none;
    }

    /* Caption text */
    .text {
      color:black;
      font-size:2.5vw;
      padding: 8px 12px;
      position: absolute;
      bottom: 100px;
      width: 100%;
      text-align: center;
      font-weight: bolder;
      background-color:orange;
      opacity: 0.4;
    }
    .form{
    border:2px solid #000;
    padding: 20px;
    background-color: white;
    }
    button{
      background-color:orange;
      width: 120px;
      height: 35px;
      font-size: 14px;
      color:black;
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
  </style>
    </style>
  </head>
  <body>

    <?php include 'nav.php';?>


    <!-- Slideshow container -->
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <img src="images/eins.jpg" alt="contact" style="max-width:100%;height:auto;">
        <div class="text">HOUSE ONE</div>
      </div>

      <div class="mySlides fade">
        <img src="images/zwei.jpg" alt="contact" style="max-width:100%;height:auto;">
        <div class="text">HOUSE TWO</div>
      </div>

      <div class="mySlides fade">
        <img src="images/drei.jpg" alt="contact" style="max-width:100%;height:auto;">
        <div class="text">HOUSE THREE</div>
      </div>

      <div class="mySlides fade">
        <img src="images/vier4.jpg" alt="contact" style="max-width:100%;height:auto;">
        <div class="text">HOUSE FOUR</div>
      </div>

      <div class="mySlides fade">
        <img src="images/funf.jpg" alt="contact" style="max-width:100%;height:auto;">
        <div class="text">HOUSE FIVE</div>
      </div>

      <div class="mySlides fade">
        <img src="images/sechs.jpg" alt="contact" style="max-width:100%;height:auto;">
        <div class="text">HOUSE SIX</div>
      </div>

      <div class="mySlides fade">
        <img src="images/sieben.jpg" alt="contact" style="max-width:100%;height:auto;">
        <div class="text">HOUSE SEVEN</div>
      </div>

      <div class="mySlides fade">
        <img src="images/acht.jpg" alt="contact" style="max-width:100%;height:auto;">
        <div class="text">HOUSE EIGHT</div>
      </div>

      <div class="mySlides fade">
        <img src="images/neun.jpg" alt="contact" style="max-width:100%;height:auto;">
        <div class="text">HOUSE NINE</div>
      </div>
    </div>
    <br>
<p style="text-align:center;font-size:25px;color:#00001a;font-weight:bolder;">ASH REAL ESTATE</p><br>
<p style="text-align:center">House like no other.Has everything that one requires.</p><br><br>
    <div class="row">
     <div class="col-3 col-s-3 menu">
     </div>
    <div class="col-6 col-s-10 menu">
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
<label for="house" style="font-size:12px">surrounding suburbs</label>
    </form>
  </div>
  <div class="col-3 col-s-12 menu">
  </div>
  </div>

    <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      slides[slideIndex-1].style.display = "block";
      setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
    </script>

    <div class="row">
     <div class="col-3 col-s-3 menu">

     </div>
    <div class="col-6 col-s-9 menu">
      <p style="text-align:center;font-size:25px;color:#00001a;font-weight:bolder;padding-top:80px;">
        NEW DEVELOPMENTS</p>
      <p style="text-align:center;color:black;padding-top:20px;font-size:14px;padding-bottom:50px">
        Ash Real Estate offers investment-grade developments all over the City. The developments we offer
        have been conceptualized by our development team to be high quality<br> assets using a data-driven
        approach in planning and design, that gears property for high rental returns and an escalated rate of capital growth.</p>
    </div>
    <div class="col-3 col-s-12 menu">
    </div>
    </div>

    <div class="row">
     <div class="col-4 col-s-4 menu">
       <img src="images/eins.jpg" alt="contact" style="max-width:100%;height:auto;">
       <p style="font-weight:bolder;font-size:20px;text-align:center;padding:10px">HOUSE ONE</p>
     </div>
    <div class="col-4 col-s-8 menu">
      <img src="images/zwei.jpg" alt="contact" style="max-width:100%;height:auto;">
       <p style="font-weight:bolder;font-size:20px;text-align:center;padding:10px">HOUSE TWO</p>
    </div>
    <div class="col-4 col-s-12 menu">
      <img src="images/drei.jpg" alt="contact" style="max-width:100%;height:auto;">
       <p style="font-weight:bolder;font-size:20px;text-align:center;padding:10px">HOUSE THREE</p>
    </div>
    </div>

    <div class="row">
     <div class="col-4 col-s-4 menu">
       <img src="images/vier4.jpg" alt="contact" style="max-width:100%;height:auto;">
        <p style="font-weight:bolder;font-size:20px;text-align:center;padding:10px">HOUSE FOUR</p>
     </div>
    <div class="col-4 col-s-8 menu">
      <img src="images/funf.jpg" alt="contact" style="max-width:100%;height:auto;">
       <p style="font-weight:bolder;font-size:20px;text-align:center;padding:10px">HOUSE FIVE</p>
    </div>
    <div class="col-4 col-s-12 menu">
      <img src="images/sechs.jpg" alt="contact" style="max-width:100%;height:auto;">
       <p style="font-weight:bolder;font-size:20px;text-align:center;padding:10px">HOUSE SIX</p>
    </div>
    </div>

    <div class="row">
     <div class="col-4 col-s-4 menu">
       <img src="images/sieben.jpg" alt="contact" style="max-width:100%;height:auto;">
        <p style="font-weight:bolder;font-size:20px;text-align:center;padding:10px">HOUSE SEVEN</p>
     </div>
    <div class="col-4 col-s-8 menu">
      <img src="images/acht.jpg" alt="contact" style="max-width:100%;height:auto;">
       <p style="font-weight:bolder;font-size:20px;text-align:center;padding:10px">HOUSE EIGHT</p>
    </div>
    <div class="col-4 col-s-12 menu">
      <img src="images/neun.jpg" alt="contact" style="max-width:100%;height:auto;">
       <p style="font-weight:bolder;font-size:20px;text-align:center;padding:10px">HOUSE NINE</p>
    </div>
    </div>

    <p style="text-align:center;font-size:25px;color:#00001a;font-weight:bolder;padding-top:80px;padding-bottom:80px">
      SERVICES</p>
      <div  style="background-color:#00001a;" class="row">
       <div  style="padding:40px;"class="col-2 col-s-2 menu">
      <i class='far fa-user-circle' style='font-size:60px;color:white;'></i>
      <p style="color:white;padding-top:20px">Property & Facilities Management</p><br><br>
      <p style="color:white">Ongoing management and maintenance of properties is a key factor in value realization ...</p><br><br>
      <button type="button" name="button">Read More</button>
       </div>
      <div style="padding:40px;" class="col-2 col-s-4 menu">
      <i class='fa fa-file-alt' style='font-size:50px;color:white;border-radius:50%;border:2px solid white;'></i>
      <p style="color:white;padding-top:20px">Property Market Research</p><br><br>
      <p style="color:white">It's a long established fact that a reader will be distracted by the readable...</p><br><br>
      <button type="button" name="button">Read More</button>
      </div>
      <div style="padding:40px;" class="col-2 col-s-6 menu">
        <i class='fa fa-file-alt' style='font-size:50px;color:white;border-radius:50%;border:2px solid white;'></i>
        <p style="color:white;padding-top:20px">Development Concept & Design Alignment</p><br><br>
        <p style="color:white">The success of a development is decided at its planning and inception stages ...</p><br><br>
        <button type="button" name="button">Read More</button>
      </div>
      <div style="padding:40px;" class="col-2 col-s-8 menu">
        <i class='fa fa-file-alt' style='font-size:50px;color:white;border-radius:50%;border:2px solid white;'></i>
        <p style="color:white;padding-top:20px">Joint Venture & Finance Structuring</p><br><br>
        <p style="color:white">
As a company that is poised centrally in the market, we have been able to bring the benefits ...</p><br><br>
        <button type="button" name="button">Read More</button>
      </div>
     <div style="padding:40px;" class="col-2 col-s-10 menu">
<i class='fa fa-chart-line' style='font-size:50px;color:white;border-radius:50%;border:2px solid white;'></i>
<p style="color:white;padding-top:20px">Development Marketing & Sales</p><br><br>
<p style="color:white">Our presence in the real estate market over the last two decades together with our focus ...</p><br><br>
<button type="button" name="button">Read More</button>
     </div>
     <div style="padding:40px;" class="col-2 col-s-12 menu">
<i class="fa fa-home" style='font-size:50px;color:white;border-radius:50%;border:2px solid white;'></i>
<p style="color:white;padding-top:20px">Property Sales & Letting</p><br><br>
<p style="color:white">
Giving a property the exposure it deserves to find quality tenants or to sell for the right price ...</p><br><br>
<button type="button" name="button">Read More</button>
     </div>
      </div>

      <div class="row">
       <div class="col-3 col-s-3 menu">
       </div>
      <div class="col-6 col-s-9 menu">
        <p style="text-align:center;font-size:25px;color:#00001a;font-weight:bolder;padding-top:80px;">
          Ash INDEX</p>
        <p style="text-align:center;color:black;padding-top:20px;font-size:14px;padding-bottom:50px">
      The Ash Index is Kenya’s first ever published property price index of historical
      data of Kenya’s property markets. It has proven over the last decade to be an important tool providing
      investors, home owners, the financial industry and consumers with current and historical information about
      house price inflation- allowing them to make informed decisions in the housing market, in order to enjoy
      the best possible returns.</p>
      </div>
      <div class="col-3 col-s-12 menu">

      </div>
      </div>

      <div class="row">
       <div class="col-6 col-s-9 menu">
         <p style="text-align:center;font-size:16px;color:white;font-weight:bolder;padding:20px;background-color:#00001a">
           Ash Property Sales Index</p>
         <p style="color:black;padding-top:20px;font-size:14px;padding-bottom:50px">
           Downward pressure on rents as COVID-19 pandemic slashes disposable incomes.
        </p>
        <button type="button" name="button">Read More</button>
       </div>
      <div class="col-2 col-s-8 menu">
        <p style="text-align:center;font-size:16px;font-weight:bolder;padding:20px;background-color:darkgrey">
          Quaterly<br> Change</p>
          <p style="text-align:center;font-size:16px;font-weight:bolder;padding:50px;background-color:grey">
            0%</p>
      </div>
      <div class="col-2 col-s-10 menu">
        <p style="text-align:center;font-size:16px;font-weight:bolder;padding:20px;background-color:darkgrey">
          Annual<br> Change</p>
          <p style="text-align:center;font-size:16px;font-weight:bolder;padding:50px;background-color:grey">
            0%</p>
      </div>
      <div class="col-2 col-s-12 menu">
        <p style="text-align:center;font-size:16px;font-weight:bolder;padding:20px;background-color:darkgrey">
         Change from<br> 2020</p>
          <p style="text-align:center;font-size:16px;font-weight:bolder;padding:50px;background-color:grey">
          0%</p>
      </div>
      </div>

      <div  style="padding-top:60px;" class="row">
       <div class="col-6 col-s-9 menu">
         <p style="text-align:center;font-size:16px;color:white;font-weight:bolder;padding:20px;background-color:#00001a">
           Ash Property Rental Index</p>
         <p style="color:black;padding-top:16px;font-size:14px;padding-bottom:50px">
           Close to half of tenants surveyed asked for rent discounts of between 25 and 30 percent.
        </p>
        <button type="button" name="button">Read More</button>
       </div>
      <div class="col-2 col-s-8 menu">
        <p style="text-align:center;font-size:16px;font-weight:bolder;padding:20px;background-color:darkgrey">
          Quaterly<br> Change</p>
          <p style="text-align:center;font-size:16px;font-weight:bolder;padding:50px;background-color:grey">
            0%</p>
      </div>
      <div class="col-2 col-s-10 menu">
        <p style="text-align:center;font-size:16px;font-weight:bolder;padding:20px;background-color:darkgrey">
          Annual<br> Change</p>
          <p style="text-align:center;font-size:16px;font-weight:bolder;padding:50px;background-color:grey">
            0%</p>
      </div>
      <div class="col-2 col-s-12 menu">
        <p style="text-align:center;font-size:16px;font-weight:bolder;padding:20px;background-color:darkgrey">
         Change from<br> 2020</p>
          <p style="text-align:center;font-size:16px;font-weight:bolder;padding:50px;background-color:grey">
          0%</p>
      </div>
      </div>

      <div style="padding-top:60px;padding-bottom:60px" class="row">
       <div class="col-6 col-s-9 menu">
         <p style="text-align:center;font-size:16px;color:white;font-weight:bolder;padding:20px;background-color:#00001a">
           Ash Property Land Index</p>
         <p style="color:black;padding-top:20px;font-size:16px;padding-bottom:50px">
           Land prices continue to mildly soften as Covid-19 uncertainty continues to affect Investor demand.
        </p>
        <button type="button" name="button">Read More</button>
       </div>
      <div class="col-2 col-s-8 menu">
        <p style="text-align:center;font-size:16px;font-weight:bolder;padding:20px;background-color:darkgrey">
          Quaterly<br> Change</p>
          <p style="text-align:center;font-size:16px;font-weight:bolder;padding:50px;background-color:grey">
            0%</p>
      </div>
      <div class="col-2 col-s-10 menu">
        <p style="text-align:center;font-size:16px;font-weight:bolder;padding:20px;background-color:darkgrey">
          Annual<br> Change</p>
          <p style="text-align:center;font-size:16px;font-weight:bolder;padding:50px;background-color:grey">
            0%</p>
      </div>
      <div class="col-2 col-s-12 menu">
        <p style="text-align:center;font-size:16px;font-weight:bolder;padding:20px;background-color:darkgrey">
         Change from<br> 2020</p>
          <p style="text-align:center;font-size:16px;font-weight:bolder;padding:50px;background-color:grey">
          0%</p>
      </div>
      </div>

    <?php include 'footer.php';?>
  </body>
</html>
