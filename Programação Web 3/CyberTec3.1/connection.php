<?php
    class Connection{
        public static function StartConnection(){
            $connect = new PDO("mysql:host=localhost;
                                dbname=bdmuseu","root","");
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connect->exec("SET CHARACTER SET utf8");

            return $connect;
        }

    }
?>