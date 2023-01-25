<?php

namespace App\Repository;

use App\Model\ItemsConfig;

class ItemsConfigRepository extends BaseRepository
{
    private string $table = "items_config";

    public function findAll(): array
    {
        return $this->connection->query("SELECT * FROM {$this->table}")->fetchAll(
            \PDO::FETCH_CLASS,
            ItemsConfig::class
        );
    }
}