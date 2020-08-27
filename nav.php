<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ASH REAL ESTATE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
}
nav{
  background:#00001a;
  height: 80px;
  width: 100%;
}
label.logo{
  color: white;
  font-size: 25px;
  line-height: 80px;
  padding: 0 140px;
  font-weight: 600;
  font-family: 'quicksand', sans-serif;
}
nav ul{
  float: right;
  margin-right: 60px;
}
nav ul li{
  display: inline-block;
  line-height: 80px;
  margin: 0 2px;
}
nav ul li a{
  color: white;
  font-weight: 500;
  font-size: 14px;
  padding: 7px 10px;
  border-radius: 3px;
  font-family: 'quicksand', sans-serif;
}
a:hover{
  color:orange;
  transition:.5s;
}
.checkbtn{
  font-size: 30px;
  color: white;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#check{
  display: none;
}


@media (max-width: 952px){
  label.logo{
    font-size: 13px;
    padding-left: 25px;
  }
  nav ul li a{
    font-size: 16px;
  }
}

@media (max-width: 858px){
  .checkbtn{
    display: block;
    margin-right: 40px;
  }
  ul{
    position: fixed;
    width: 100%;
    height: 100vh;
    background:#00001a;
    top: 80px;
    left: -100%;
    text-align: center;
    transition: all .5s;
  }
  nav ul li{
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }
  nav ul li a{
    font-size: 20px;
  }
  #check:checked ~ ul{
    left: 0;
  }
}
html{
  font-family: 'quicksand', sans-serif;
}
.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
}
a{
  color: white;
}
/* For mobile phones: */
[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
.fa {
  padding: 10px;
  font-size: 18px;
  text-align: center;
  text-decoration: none;
}
.fa-facebook {
  color:white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.fa-twitter {
  color:white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.fa-instagram {
  color:white;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

</style>
</head>
<body>

  <nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <i class="fas fa-bars"></i>
    </label>
    <label class="logo">
      ASH ESTATE
    </label>
    <ul>
  <li><a href="index.php">HOME</a></li>
  <li><a href="development.php">DEVELOPMENTS</a></li>
  <li><a href="buy.php">BUY</a></li>
  <li><a href="rent.php">RENT</a></li>
  <li><a href="ash.php">ASH INDEX</a></li>
  <li><a href="contact.php">CONTACT</a></li>
  </ul>
  </nav>


</body>
</html>
