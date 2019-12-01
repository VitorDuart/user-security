<?php
    require_once("../models/User.php");
    require_once("../data/UserData.php");

    $data = new UserData();

    $users = $data->list();
    
        
?>