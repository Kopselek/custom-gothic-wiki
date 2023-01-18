<?php

namespace App\Repository;

use App\Database\Connection;

abstract class BaseRepository
{
    protected \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->getPdo();
    }
}