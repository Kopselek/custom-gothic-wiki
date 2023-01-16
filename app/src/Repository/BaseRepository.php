<?php

namespace GothicServer\Repository;

use GothicServer\Database\Connection;

abstract class BaseRepository
{
    protected \PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance()->getPdo();
    }
}