<?php

/**
 * MySQLi database; only one connection is allowed
 * Класс разрешает только одно подключение к БД
 */
class Database {
    private $connection;
    // Store the single instance.
    // Хранит один экземпляр.
    private static $_instance;

    /**
     * Get an instance of the Database.
     * Получает экземпляр БД
     * @return Database
     */
    public static function getInstance() {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * Construct
     */
    public function __construct() {
        $this->connection = new mysqli('localhost', 'root', '', 'address');
        // Error handling.
        if (mysqli_connect_error())
        trigger_error('Failed to connect to MySQL: ' .
            mysqli_connect_error(), E_USER_ERROR);
    }
    /**
     * Empty clone magic method to prevent duplication.
     * пустой маг. метод клон для запрета копирования
     */
    private function __clone() {}

    /**
     * Get the mysqli connection.
     */
    public function getConnection() {
        return $this->connection;
    }

}


