<?php
class Connection
{
    public static function make()
    {
        try{
            return $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', '123456');
        } catch (PDOException $e) {
            die($e);
        }
    }
}