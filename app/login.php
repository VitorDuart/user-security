<?php
    require('models/User.php');

    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = new User($username, $password);


?>