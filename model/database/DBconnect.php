<?php

namespace model\database;

use PDO;
use PDOException;

class DBconnect
{
    private $dsn;
    private $user;
    private $password;

    public function __construct()
    {
        $configKey = parse_ini_file("config.ini");
        $this->dsn = $configKey['type'] . ":host=" . $configKey['host'] . ";dbname=" . $configKey['dbname'];
        $this->user = $configKey['user'];
        $this->password = $configKey['password'];

    }

    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO($this->dsn, "$this->user", "$this->password");
        } catch (PDOException $exception) {
            return $exception->getMessage();
        }
        return $conn;
    }


}