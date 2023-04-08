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
        $check = checkerror(["fullname"=>$fullname, "email"=>$email, "phone_number"=>$phone_number]);
        if($check == true){
            displayinfo($fullname, $email, $phone_number);  
        }
    }
    function checkerror(array $data){
        foreach($data as $index => $value){
            if(empty($value)){
                echo "<p style='color: red'>Please fill in your $index</p>";
                return false;
            }
        }
        return true;
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