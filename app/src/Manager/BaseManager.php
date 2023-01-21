<?php

namespace App\Manager;

use App\Database\Connection;

abstract class BaseManager
{
    protected \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->getPdo();
    }
}