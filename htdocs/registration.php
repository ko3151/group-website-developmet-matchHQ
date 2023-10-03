<!DOCTYPE html>
<html lang="en">
	<head>
        <title> Registration | Matcha HQ </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./registration.css" type="text/css">
        <link rel="icon" type="image/png" href="./images/MatchaHQicon.png">
	</head>

	<body>
        <div class="logo">
            <img src="./images/MatchaHQ.gif">
        </div>
      
        <h1> Matcha HQ </h1>

        <div class="wrapper">
            <div class="upper">
                <h2>Registration</h2>
                <a href="./index.php"><h5 class="home">Back to Home ></h5></a>
            </div>
            
            <main>
                <form action="reg.php" method="POST">
                    <table>
                        <tr>
                            <td><label for="fullname">Name</label></td>
                            <td>
                                <input type="text" placeholder="e.g.: John Lim" id="fullname" name="fullname" required>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="gender">Gender</label></td>
                            <td>
                                <input type="radio" id="gender" name="gender" value="male" required>Male
                                <input type="radio" id="gender" name="gender" value="female" required>Female
                            </td>
                        </tr>

                        <tr>
                            <td><label for="phone">Phone number</label></td>
                            <td>
                                <input type="tel" placeholder="e.g.: 601234567890" id="phone" name="phone" required pattern="[0-9]{10,12}$" title="Numbers only. e.g.: 601234567890">
                            </td>
                        </tr>

                        <tr>
                            <td><label for="email">Email</label></td>
                            <td><input type="email" placeholder="e.g.: myname@example.com" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="myname@example.com"></td>
                        </tr>

                        <tr>
                            <td><label for="user_username">Username</label></td>
                            <td>
                                <input type="text" placeholder="e.g.: Quokka08" id="user_username" name="user_username" required>
                            </td>
                        </tr>

                        <tr>
                            <td><label for="password">Password</label></td>
                            <td><input type="password" placeholder="e.g.:AbCdE123@@" id="password" name="user_password" required pattern="(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}"
                            title="Must contain 8 or more characters with at least one number, one special character, one uppercase letter, one lowercase letter"></td>
                        </tr>
                    </table>
                    <button type="submit">
                        Register Me!
                    </button>
                </form>
                <span class="new">Already have an account? <a href="./login.php"> LOG IN HERE.</a></span><br>
            
                <?php
                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                if(strpos($fullUrl, "reg=phone") == true){
                    echo "<span class='error'>*Invalid phone number.</span>";
                    exit();
                }else if(strpos($fullUrl, "reg=invalid_email") == true){
                    echo "<span class='error'>*Invalid e-mail.</span>";
                    exit();
                }else if(strpos($fullUrl, "reg=check_email") == true){
                    echo "<span class='error'>*E-mail is already in use.</span>";
                    exit();
                }else if(strpos($fullUrl, "reg=username_taken") == true){
                    echo "<span class='error'>*Username is taken.</span>";
                    exit();
                }else if(strpos($fullUrl, "reg=password") == true){
                    echo "<span class='error'>*Password does not meet requirements.</span>";
                    exit();
                }
                ?>
            </main>
        </div>
	</body>
</html>