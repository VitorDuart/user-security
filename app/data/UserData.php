<?php
    require('connetion.php');

    class UserData{
        private $sql
        function get($user){
            $this->sql = "SELECT * FROM User where username = $user->username and $user->password";
            $mysqli->query($this->sql);

        }

        function store($user){
            $this->sql = "INSERT INTO User ($user->username, $user->password";
            $mysqli->query($this->sql);
        }
    }
?>