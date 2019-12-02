<?php
    require_once("../models/User.php");
    require_once("../data/UserData.php");
    

    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = new User($username, $password);

    $userdata = new UserData();

    $u = $userdata->get($user);

    if ($u == null){
        header("Location:.././index.php");
    }else{
        header("Location: ../pages/userpage.php");
    }


?>