<?php

namespace App\Repository;

use App\Model\CreaturesConfig;

class CreatureConfigRepository extends BaseRepository
{
    private string $table = "creature_config";

    public function findAll(): array
    {
        return $this->connection->query("SELECT * FROM {$this->table}")->fetchAll(
            \PDO::FETCH_CLASS,
            CreaturesConfig::class
        );
    }
}