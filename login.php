<?php

$email = $_POST['email'];
$password = $_POST['password'];


//database connection
$conn = new mysqli('localhost','root','test');
if ($conn ->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn ->prepare("insert into registration(email,password)");
    $stmt ->bind_param("sssssi",$email,$password);
    $stmt ->execute();
    echo "Registration Successfull";
    $stmt ->close();
    $conn ->close();
}













?>