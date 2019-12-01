<?php
    /**
     * Inclusão do arquivo de conecção com 
     * o banco de dados.
     * Caso esse arquivo (bd.inc) não exista 
     * configurar o bd_tmp.inc. 
     * Despois renomear o arquivo temporário 
     * para bd.inc.
     */
    require_once("../bd.inc");

    class Connection {
        public static function getConnection(){
            return new mysqli(
                Database::$host, 
                Database::$user,
                Database::$password,
                Database::$database
            );
        }
    
    }
?>  