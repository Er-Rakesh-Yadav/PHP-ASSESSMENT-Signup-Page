<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost','root','');
    if(!$conn){
        echo "You are not connected with server";
    }
    if(!mysqli_select_db($conn,'sectioni')){
        echo "Database is not selected";
    }
    $sql = "INSERT INTO seci(username,password) VALUES('$username','$password')";
    if(!mysqli_query($conn,$sql)){
        echo "data not inserted";
    }
    else{
        echo "Successfullyy inserted";
    }
    header("refresh:10;url=index.html");
?>