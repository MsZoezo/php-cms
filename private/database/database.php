<?php
require_once(__DIR__ . "/../config.php");

class Database
{
    private static ?Database $instance = null;

    private PDO $pdo;

    private function __construct()
    {
        try {
            $this->pdo = new PDO("mysql:host=" . (HOST) . ";port=" . (PORT) . ";dbname=" . (DATABASE) . ";charset=" . (CHARSET), USER, PASSWORD, OPTIONS);
        } catch (\PDOException $exception) {
            throw new \PDOException($exception->getMessage(), (int) $exception->getCode());
        }
    }

    public static function getInstance(): Database {
        if(self::$instance == null) self::$instance = new Database();
        return self::$instance;
    }
}