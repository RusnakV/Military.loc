<?php

class Db
{
    public static function getConnection()
    {
        $params = [
		    'host' => 'localhost',
		    'dbname' => 'military_base',
		    'user' => 'root',
		    'password' => ''
		];

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->exec("set names utf-8");
        return $db;
    }
}