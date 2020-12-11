<?php
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=noticias;charset=utf8', 'noticias', 'noticias01');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}
?>