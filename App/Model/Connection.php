<?php

namespace App\Model;

class Connection
{

    private static $instance;

    public static function getConexao()
    {
        if (!isset(self::$instance)):
            self::$instance = new \PDO('mysql: host=localhost;dbname=registers', 'root', '1234');
        endif;

        return self::$instance;

    }
}
