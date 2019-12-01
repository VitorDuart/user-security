<?php
    require_once('connection.php');
    require_once("../models/User.php");

    class UserData{
        private $manager;
        public function __construct(){
            $this->manager = Connection::getConnection();
        }

        public function get($user){
            $username = $user->getUsername();
            $password = $user->getPassword();
            $sql = "select * 
                from usuario 
                where username = '$username' 
                and password = '$password'
            ";
            
            $result = $this->manager->query($sql);

            if ($result->num_rows == 0){
                $result->close();
                return null;
            }
                

            $row = $result->fetch_array(MYSQLI_ASSOC);

            $user = new User($row["username"], $row["password"]);
            
            $result->close();

            $this->manager->close();

            return $user;
        }

        public function store($user){
            $username = $user->getUsername();
            $password = $user->getPassword();
            $sql = "insert into usuario (username, password) values('$username', '$password')";
            $this->manager->query($sql);
        }

        public function list(){
            $users = [];

            $r = $this->manager->query("select * from usuario");

            for($i=0; $i<$r->num_rows; $i++){
                $row = $r->fetch_array();
                array_push($users, new User($row["username"], $row["password"]));
            }

            return $users;
        }
    }
?>