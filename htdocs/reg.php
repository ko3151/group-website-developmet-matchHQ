<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "registration";
    $handler = mysqli_connect($servername, $username, $password, $dbname);

    $fullname = $gender = $phone = $email = $user_username= $user_password = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname = test_input($_POST['fullname']);
        $gender = test_input($_POST['gender']);
        $phone = test_input($_POST['phone']);
        $email = test_input($_POST['email']);
        $user_username = test_input($_POST['user_username']);
        $user_password = test_input($_POST['user_password']);
    }

    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $hp_pattern = '/^[0-9]{10,12}$/';
    $pw_pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}$/';
    $check_email = "SELECT * FROM member WHERE (email = '$email')";
    $rs_email = mysqli_query($handler, $check_email);
    $check_username = "SELECT * FROM member WHERE (user_username = '$user_username')";
    $rs_username = mysqli_query($handler, $check_username);

    if (!preg_match($hp_pattern, $phone)){
        header("Location:registration.php?reg=phone");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location:registration.php?reg=invalid_email");
        exit();
    }else {
        $sql_query = "INSERT INTO member (fullname, gender, phone, email, user_username, user_password) VALUES('$fullname', '$gender', '$phone', '$email', '$user_username', '$user_password')";
        header("Location:./login.php");
    }

    if (mysqli_query($handler, $sql_query)) {
        die ("Data inserted successfully");
    } else {
        die ("Error inserting data: " . mysqli_error($handler));
    }
?>