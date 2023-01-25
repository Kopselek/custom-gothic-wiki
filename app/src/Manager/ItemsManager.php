<?php

namespace App\Manager;

use App\Model\ItemsConfig;

class ItemsManager extends BaseManager
{
    public function create(ItemsConfig $model)
    {
        $sql = "INSERT INTO creature_config(`type`, `mode`, `instance`, `texture`, `level`, `price`, `crystalslots`, `strength`, `dexterity`, `inteligence`, `equiplevel`, `damage_incisors`, `damage_hammer`, `damage_stab`, `damage_element`, `damage_magic`, `effect_mode`, `effect_type`, `effect_value`, `effect_time`, `bonusstrength_mode`, `bonusstrength_value`, `bonusdexterity_mode`, `bonusdexterity_value`, `bonusinteligence_mode`, `bonusinteligence_value`, `damagemonsterbonus_mode`, `damagemonsterbonus_value`, `damagemonsterbonus_type`, `name_pl`, `name_eng`) 
                VALUES (:type, :mode, :instance, :texture, :leve, :price, :crystalslots, :strength, :dexterity, :inteligence, :equiplevel, :damage_incisors, :damage_hammer, :damage_stab, :damage_element, :damage_magic, :effect_mode, :effect_type, :effect_value, :effect_time, :bonusstrength_mode, :bonusstrength_value, :bonusdexterity_mode, :bonusdexterity_value, :bonusinteligence_mode, :bonusinteligence_value, :damagemonsterbonus_mode, :damagemonsterbonus_value, :damagemonsterbonus_type, :name_pl, :name_eng)";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            'type' => $model->getType(),
        ]);
    }
}
