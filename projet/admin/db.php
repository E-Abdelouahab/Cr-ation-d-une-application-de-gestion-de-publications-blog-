<?php 
class database {
    private static $db_name = 'gestion de publications';
    private static $host = 'localhost';
    private static $pasword = 'admin1';
    private static $username = 'root';
    private static $connection = null;
    public static function connect(){
        try {
           return self::$connection = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name , self::$username, self::$pasword);
        
        } catch (\Throwable $th) {
            echo 'mamkonktich';
        }
    }
    public static function disconnect(){
       return self::$connection = null;
    }
    
}

// database::connect();