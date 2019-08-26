<?php

session_start();

header('location: ../index.html');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$password = $_POST['password'];
$options = $_POST['options'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($name == NULL){
    header('location: register.html');
}
    if($num == 1){
        echo "Username taken";
    }else{
        $reg = " insert into usertable (name, password,options) values ('$name', '$password','$options')";
        mysqli_query($con , $reg);
        echo "Registration Successful";
    }

?>