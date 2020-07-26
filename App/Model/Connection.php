<?php

namespace App\Model;

class Connection
{
    const HOST = '';
    const DBNAME = '';
    const USER = '';
    const PASSWORD = '';

    private static $instance;

    public static function getConexao()
    {
        if (!isset(self::$instance)):
            self::$instance = new \PDO("mysql: host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASSWORD);
        endif;

        return self::$instance;

    }
}
