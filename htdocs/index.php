<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Home | Matcha HQ </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./home.css">
    <link rel="icon" type="image/png" href="./images/MatchaHQicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <h1>"When the world has brought you down to your knees, matcha'll be there for you."<P>— Inspired by The Rembrandts’ “I’ll Be There For You”</P></h1>
        
      <div class="wrapper">
        <img src="./images/MatchaCafe.jpg">
        <div class="intro">
          <h2>- MATCHA HQ -</h2>
          <hr>
          <p>
            Cafe that specialises in selling matcha food and beverages which is located in Kuala Lumpur, Malaysia. We offer several types of matcha food and beverages ranging from matcha desserts such as matcha cookies, matcha crepes, all the way to unique food combinations like matcha hotpot, matcha curry etc.  Our aim is to satisfy every matcha lover’s demand and requests.
          </p>
        </div>
      </div>

      <div class="benefit">
        <div class="intro">
          <h2>- BENEFITS OF MATCHA -</h2>
          <hr>
          <p>
            Matcha tea may appear to be just another form of tea, but this is far from the case. Matcha is rich in caffeine. Matcha has a high concentration of antioxidants, which may help prevent cell damage and lower your risk of chronic diseases.
            Some studies also suggest that the catechins and caffeine found in matcha may have a mild beneficial impact in weight loss and management. 
          </p>
        </div>
        <img src="./images/MatchaHomePowder.jpg">
      </div>

            
      <div class="menu">
        <p>Explore menu</p>
        <div class="menubutton">
          <a href="./menu.php"><img src="./images/MatchaHomeDrinks.jpg"></a>
          <a href="./menu.php"><img src="./images/MatchaCake.png"></a>
          <a href="./menu.php"><img src="./images/MatchaBiscuit.png"></a>
          <a href="./menu.php"><img src="./images/MatchaGyoza.png"></a>
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

<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "subscribe";
    $handler = mysqli_connect($servername, $username, $password, $dbname);

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_username = $_POST['user_username'];
    $email = $_POST['email'];
  }

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $sql_query = "INSERT INTO subscribe (user_username, email) VALUES('$user_username', '$email')";
    mysqli_query($handler, $sql_query);
  }
?>