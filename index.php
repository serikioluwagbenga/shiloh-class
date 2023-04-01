<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    // how to get GET methods 
    if(isset($_GET['submit'])){
        $fullname =  $_GET['fullname'];
        $email =  $_GET['email'];
        $phone_number =  $_GET['phone_number'];
        displayinfo($fullname, $email, $phone_number);
    }

    // how to get POST methods 
    if(isset($_POST['submit'])){
        validateinput();
    }

    function validateinput() {
        $fullname =  $_POST['fullname'];
        $email =  $_POST['email'];
        $phone_number =  $_POST['phone_number'];
        if(empty($fullname)){
            echo "<p style='color: red'>Please fill in your full name</p>";
            return ;
        }
        if(empty($email)){
            echo "<p style='color: red'>Please fill in your email</p>";
            return ;
        }
        
        if(empty($phone_number)){
            echo "<p style='color: red'>Please fill in your phone number</p>";
            return ;
        }
        displayinfo($fullname, $email, $phone_number);  
    }
    function displayinfo($fullname, $email, $phone_number){
        echo '<h1>Your Information</h1>';
        echo "<ul>";
        echo '<li>Fullname: ' . $fullname . '</li>';
        echo "<li>Email: $email</li>";
        echo "<li>Phone number: $phone_number</li>";
        echo "</ul>";
    }
?>
<body>
    <form action="index.php" method="POST">
        <input type="text" name="fullname" placeholder="Enter Fullname">
        <input type="email" name="email" placeholder="Enter Email">
        <input type="number" name="phone_number" placeholder="Enter Phone Number">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>