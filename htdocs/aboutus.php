<!DOCTYPE html>
<html lang="en">
  <head>
    <title> About Us | Matcha HQ </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style.css">
    <link rel="icon" type="image/png" href="./images/MatchaHQicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .content{
        height:750px;
        width:100%;
        background-color: #F5F5DC;
        padding: 50px 50px;
        display: inline-block;
      }
      .wrapper{
        display: flex;
        align-items: left;
        justify-content: left;
      }
      .wrapper img{
        margin-right: 50px;
        width: 400px;
        height: 500px; 
      }
      .background{
        background-color: #D4C88C;
        box-shadow: 2px 2px 6px 0px  rgba(0,0,0,0.3);
        padding: 30px 50px;
      }
      h1{
        font-size: 2.2em;
        color: green;
        font-family: 'Courier New', Courier, monospace;
        text-shadow:3px 3px 3px black;
        text-align: center;
      }
      h3{
        font-family: "Lucida Handwriting", cursive;
        text-align: center;
        color: rgb(253, 251, 251);
        text-shadow:2px 2px 10px black;
      }
    </style>
  </head>

  <body>
    <header>
      <div class="headerContainer">
        <div class="logo">
          <img src="./images/MatchaHQ.png">
        </div>

        <div class="user">
          <button style="font-size:24px">
            <a href="./registration.php"><i class="fa fa-user"></i></a>
          </button>
        </div>
      </div>

      <div class="name">
        <h5> Matcha HQ </h5>
      </div>

      <nav>
        <ul class="navigation">
          <li><a class="active" href="./index.php">Home</a></li>
          <li><a href="./menu.php">Menu</a></li>
          <li><a href="./aboutus.php">About Us</a></li>
        </ul>
      </nav>
    </header>

    <main class="content">
      <div class="wrapper">
        <img src="./images/MatchaScoop.jpg">
        <div class="background">
          <h1>Matcha HQ</h1>
          <br>
          <h3>Are you a matcha lover? Look over our restaurant!<br> We sold variety of matcha foods and drinks, which includes staple food, desserts, drinks and smoothies etc.. Although matcha became popular in 2016, there are still people out there not fully exposed to matcha-related food. Thus, 'Matcha HQ' is borned to bring matcha lovers together and to make buying matcha food and beverages more convenient rather than travel to other countries to buy it.</h3>
          <br>
          <h1>Why Matcha HQ?</h1>
          <br>
          <h3>Our characteristic is that we have a lot of unexpected food such as matcha hotpot and matcha curry. Matcha HQ also have customised goods in different festival such as matcha monncake, matcha biscuit or matcha gingerbread man. Customers may pre-order through our websites and choose want to pick-up or dine in to reduce their waiting time.<br><br>Feel free to contact us!</h3>
        </div>
      </div>
    </main>

    <footer>
      <div class="footerContainer">
        <div class="left-footer">
          <h2>Subscribe to our newsletter</h2>
          <form action="./index.php" method="POST">
            <input type="text" placeholder="Name" name="user_username" required>
            <input type="text" placeholder="Email address" name="email" required>
            <label>
              <input type="checkbox" checked="checked" name="subscribe"> Weekly newsletter
            </label>
            <div class="subscribe">
              <button type="submit">Subscribe</button>
            </div>
          </form>
        </div>
        <div class="right-footer">
          <div class="information">
            <h4> Get in Touch </h4>
            <i class="fa fa-phone">  04-4889723  </i>
            <i class="fa fa-envelope"> matchahq@gmail.com  </i>
            <i class="fa fa-map-marker">  123, Jalan Raja Chulan, Wilayah Persekutuan 50200, Kuala Lumpur, Malaysia.  </i>
            <i class="fa fa-calendar-o">  Mon - Sat, 11AM - 9PM </i>
          </div>
          <div class="socialMediaLinks">
            <ul>
              <li><a href="https://www.facebook.com/?stype=lo&jlou=AffTLfV2SfiLFE-utPC94vjmdIbspl3IuXweWtLRPr1H3joHhyzS9Y4DnRBwP3ymw78qRSe_c4LB65uxL6EX-odWUOlpYgvzXadTcfISHyCuTg&smuh=11952&lh=Ac-32zDs4NeSaB82EMc"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4tZ2IifQ%3D%3D%22%7D"><i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://web.whatsapp.com/"><i class="fa fa-whatsapp"></i></a></li>
            </ul>
          </div>
          <div class="copyright">
            <p> &copy; Copyright 2021 Matcha HQ. All rights reserved. </p>
          </div>
        </div>
      </div>
    </footer>
    
  </body>
</html>