<?php
class Query
{
    public static function pdo()
    {

        $dns = "mysql:dbname=project_poems;host=localhost";
        $username = "giovanny";
        $pwd = "boss972320"; 

        $pdo = new PDO($dns, $username, $pwd, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]);
        return $pdo;
    }
}