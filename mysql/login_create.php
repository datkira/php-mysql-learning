<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    /*if($username && $password){
        echo $username . " " . $password;
    } else {
        echo "No connection";
    }*/
    $connection = mysqli_connect('localhost', 'root', '1', 'loginapp');
    if($connection){
        echo "Connected DB";
    } else {
        die("DB connection failed.");
    }
    echo "<br>";
    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query failed." . mysqli_error());
    }
}