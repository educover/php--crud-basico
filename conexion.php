<?php


class DbConnect{

    private static $pdo=NULL;

    private function __construct (){}

    public static function conectar(){
        try{
            self::$pdo = new PDO("mysql:host=localhost;dbname=agenda", "root", "123");
            return self::$pdo;
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }
}