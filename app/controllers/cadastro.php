<?php
    require_once("../models/User.php");
    require_once("../data/UserData.php");


    $username = $_POST["username"];
    $password = $_POST["password"];

    $new = new User($username, $password);
    $data = new UserData();
    $data->store($new);
    header("Location:../index.html");
?>