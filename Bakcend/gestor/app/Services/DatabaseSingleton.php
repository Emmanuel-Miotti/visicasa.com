<?php

namespace App\Services;

use PDO;
use PDOException;

class DatabaseSingleton
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=127.0.0.1;dbname=tu_base", "usuario", "password");
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new DatabaseSingleton();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
