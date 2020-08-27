<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
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
      input{
        width:100%;
        padding:5px;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
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
      button{
        background-color:#00001a;
        width: 180px;
        height: 35px;
        font-size: 14px;
        color:orange;
      }
      textarea{
        width: 100%;
        border: 1px solid #ccc;
      }
    </style>
  </head>
  <body>
    <?php include 'nav.php';?>
    <img src="images/contact.jpg" alt="contact" style="max-width:100%;height:auto;">

    <div class="row" style="padding-top:60px">
     <div class="col-2 col-s-2 menu">

     </div>

      <div class="col-2 col-s-4 menu" style="border:1px solid #000;padding-top:40px;
      padding-bottom:40px;height:150px">
  <i class='fas fa-phone-alt' style="font-size:16px;color:#00001a;">&nbsp;&nbsp;Phone Number</i>
<p style="font-size:14px">General: +254 700 000 000</p>
<p style="font-size:14px">Sales: +254 700 000 000</p>
    </div>

    <div class="col-2 col-s-6 menu" style="border:1px solid #000;padding-top:40px;
    padding-bottom:40px;height:150px">
    <i class='fas fa-envelope' style="font-size:16px;color:#00001a;">&nbsp;&nbsp;Email</i>
<a target="_blank" href="#" style="color:black">ashrealestate@gmail.com</a>
    </div>

    <div class="col-2 col-s-8 menu" style="border:1px solid #000;padding-top:40px;
    padding-bottom:40px;height:150px">
    <i class='fas fa-globe-africa' style="font-size:16px;color:#00001a;">&nbsp;&nbsp;Social Links</i><br>
<i class="fa fa-facebook" style="color:black"></i>ashrealestate<br>
<i class="fa fa-twitter" style="color:black"></i>@ashrealestate
      </div>

        <div class="col-2 col-s-10 menu" style="border:1px solid #000;padding-top:40px;
        padding-bottom:40px;height:150px">
        <i class='fas fa-thumbtack' style="font-size:16px;color:#00001a;">&nbsp;&nbsp;Address</i>
<p style="font-size:14px">Location Unknown,</p><br>
<p style="font-size:14px">P.O. Box 00000-00000,</p><br>
<p style="font-size:14px;">Nairobi,Kenya.</p><br>
          </div>
          <div class="col-2 col-s-12 menu">

          </div>
    </div>


    <div class="row" style="padding-top:60px;">
      <div class="col-2 col-s-2 menu">
      </div>

      <div class="col-2 col-s-4 menu" style="display:table-cell;vertical-align:middle;border:1px solid #000;padding-top:40px;
      padding-bottom:40px;height:410px">
<p style="font-size:16px;color:#00001a;font-weight:bolder">Opening Hours</p>
<p style="font-size:14px;padding-top:40px">Mon - Fri: 8.00AM - 5.30PM</p><br>
<p style="font-size:14px">Sat: 9.00AM - 1:00PM</p><br>
<p style="font-size:14px">Sun: Closed</p><br>
<p style="font-size:16px;padding-top:40px">Local Time</p><br><br>
<button type="button" onclick="document.getElementById('demo').innerHTML = Date()">CLICK TO DISPLAY TIME</button><br><br>
<p id="demo"></p>
    </div>
<div class="col-6 col-s-9 menu">
  <form class="" action="" method="post">
  <label for="fname">Your Name*:</label><br>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="email">Your Email*:</label><br>
    <input type="email" id="email" name="email"><br></br>
    <label for="phone">Your Mobile Number*:</label><br>
  <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><br></br>
  <label for="phone">Your Message*:</label><br>
  <textarea name="comment" rows="10" cols="20" placeholder=""required>
  </textarea> <br><br>
  <input style="color:orange" type="submit" value="SEND">
  </form>
</div>
    <div class="col-2 col-s-12 menu">
    </div>
  </div>

        <div class="mapWrapper">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.256232723013!2d36.81483586904314!3d-1.285564082601941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d714b90b4d%3A0xf58d8f9b297c294c!2sCentral%20Business%20District%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1597665029235!5m2!1sen!2ske" width="600" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>


    <?php include 'footer.php';?>
  </body>
</html>
