<!DOCTYPE html>
<html lang="en">
	<head>
        <title>Payment | Matcha HQ</title>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="./images/MatchaHQicon.png">
        <link rel="stylesheet" href="./payment.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

    <body>
        <div class="row">
            <div class="container">
                <div class="upper">
					<h2>Payment</h2>
					<a href="./menu.php"><h5 class="home">Continue Shopping ></h5></a>
				</div>

                <main>
                    <div class="card">
                        <div class="cardicon"><img src="./images/cc.jpg"></a></div>
                        <div class="cardicon"><img src="./images/pp.jpg"></a></div>
                        <div class="cardicon"><img src="./images/ob.jpg"></a></div>
                    </div>

            

                    <form action="./menu.php" method="POST">

                        <div>
                            <label for="cname">Name on card</label>
                            <input type="text" placeholder="John More Doe" id="cname" name="user_cardname" required>
                        </div>

                        <div>
                            <label for="ccnum">Card Number</label></td>
                            <input type="text" placeholder="1111-2222-3333-4444" id="ccnum" name="user_cardnum" required>
                        </div>
                        
                        <div>
                        <label for="num">Expiration Date</label>
                            <select name="expmonth" required>
                                <option value="" disabled selected hidden>Month</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>        
                            <select name="expyear" required>
                                <option value="" disabled selected hidden>Year</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                            </select>
                        </div> 
                        
                        <div> 
                            <label for="securitycode">Security Code</label>  
                            <input type="password" placeholder="1234" id="securitycode" name="user_securitycode" required>
                        </div> 

                        <p style="color:gray; font-size: small;"><i>By purchasing I agree to the Terms of Service.</i></p>
                        
                        <button class="button">Place Order</button>
                    </form>
                </main>
            </div>

            <div class="container" style="align-self: flex-start;">

                <div class="os-header"><h4>Order Summary<span class="price" style="color:black"></span></h4></div>

                <div>
                    <table>
                        <?php
                            $total = $_POST["totalPrice"];
                            $booking = $_POST['booking'];
                            $date = $_POST['date'];
                            $time = $_POST['time'];
                            $pax = $_POST['pax'];

                            echo "&nbsp" ."&nbsp" ."&nbsp" ."Booking: " ."&nbsp" ."&nbsp" .$booking ."<br>";
                            echo "&nbsp" ."&nbsp" ."&nbsp" ."Date: " ."&nbsp" ."&nbsp" .$date ."<br>";
                            echo "&nbsp" ."&nbsp" ."&nbsp" ."Time: " ."&nbsp" ."&nbsp" .$time ."<br>";
                            echo "&nbsp" ."&nbsp" ."&nbsp" ."No. of pax: " ."&nbsp" ."&nbsp" .$pax ."<br>" ."<hr>";
                            echo "<b>Total: " ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."&nbsp" ."RM "  .$total ."<br>" ."<br>";
                        ?>
                    </table>
                 
                    <table class="os-total-line-table">
                        <tr class="os-total-line">
                        <th><div></div></th>
                        <td><div style="text-align: right; margin-left: 300px; color: lightgray; font-size: 15px; font-style: none;">Thanks!</div></td>
                    </table>
                </div>
            </div>
            
        </div>
    </body>
</html>



<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "orderlist";
    $handler = mysqli_connect($servername, $username, $password, $dbname);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $booking = $_POST['booking'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $pax = $_POST['pax'];
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $sql_query3 = "INSERT INTO orderdetails (booking, date, time, pax) VALUES('$booking', '$date', '$time', '$pax')";
      mysqli_query($handler, $sql_query3);
    }
?>