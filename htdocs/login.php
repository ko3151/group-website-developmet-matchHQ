<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Log In | Matcha HQ </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./login.css">
    <link rel="icon" type="image/png" href="./images/MatchaHQicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

  <body>
    <div class="logo">
      <img src="./images/MatchaHQ.gif">
    </div>

    <h1> Matcha HQ </h1>

    <div class="container">
        <h2> Members Log In </h2>
        <a href="./index.php"><h5 class="home">Back to Home ></h5></a>
        
      <div class="logIn">
        <form action="./login.php" method="POST">
          <label for="email"> Email: </label>
          <input type="text" placeholder="Type your email" id="email" name="email" required>

          <label for="psw"> Password: </label>
          <input type="password" placeholder="Type your password" id="psw" name="user_password" required>

          <div class="forgotpassword">
            <span class="psw">Forgot password?</a></span>
          </div>

          <div class="buttonclass">
           <button class="submit">Login</button>
          </div>

          <div class="newacc">
            <span class="new">Don't have an account? <a href="./registration.php"> REGISTER HERE.</a></span>
          </div>

          <div class="option"> OR </div>
        </form>

        <div class="col">
          <a href="https://www.facebook.com/?stype=lo&jlou=AffTLfV2SfiLFE-utPC94vjmdIbspl3IuXweWtLRPr1H3joHhyzS9Y4DnRBwP3ymw78qRSe_c4LB65uxL6EX-odWUOlpYgvzXadTcfISHyCuTg&smuh=11952&lh=Ac-32zDs4NeSaB82EMc" class="fb btn">
            <i class="fa fa-facebook"></i> Login with Facebook
          </a>
          <a href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiZW4tZ2IifQ%3D%3D%22%7D" class="twitter btn">
            <i class="fa fa-twitter"></i> Login with Twitter
          </a>
          <a href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fwww.google.com%3Fhl%3Den-US&ec=GAlA8wE&flowName=GlifWebSignIn&flowEntry=AddSession" class="google btn">
            <i class="fa fa-google"></i> Login with Google+
          </a>
        </div>
      </div>
    </div>
    
  </body>
</html>

<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "login";
    $handler = mysqli_connect($servername, $username, $password, $dbname);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $user_password = $_POST['user_password'];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql_query = "INSERT INTO login (email, user_password) VALUES('$email', '$user_password')";
      mysqli_query($handler, $sql_query);
      header("Location:./index.php");
    }
?>