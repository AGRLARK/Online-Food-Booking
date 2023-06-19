<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Database Connection
    $conn = new mysqli('localhost','root','','food');
    if($conn->connect_error){
        die("Connection Failed : ".$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name,email,phone,message)values(?,?,?,?)");
        $stmt->bind_param("sssi",$name,$email,$message,$phone);
        $stmt->execute();
        echo "Registration Successfully";
        $stmt->close();
        $conn->close();
    }


?>