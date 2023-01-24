<?php

namespace App\Manager;

use App\Model\ItemsConfig;

class ItemsManager extends BaseManager
{
    public function create(ItemsConfig $model)
    {
        $sql = "INSERT INTO creature_config(`type`) 
                VALUES (:type)";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            'type' => $model->getType(),
        ]);
    }
}
