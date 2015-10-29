<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 require_once('dbConnect.php');
 
 $sql = "INSERT INTO volley (username,password,email) VALUES ('$username','$email','$password')";
 
 if(mysqli_query($con,$sql)){
 echo "Successfully Registered";
 }else{
 echo "Could not register";
 
 }
 }else{
echo 'error';
}