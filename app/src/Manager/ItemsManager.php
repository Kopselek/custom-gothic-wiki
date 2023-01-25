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
            'mode' => $model->getMode(),
            'instance' => $model->getInstance(),
            'texture' => $model->getTexture(),
            'level' => $model->getLevel(),
            'price' => $model->getPrice(),
            'crystalslots' => $model->getCrystalSlots(),
            'strength' => $model->getStregth(),
            'dexterity' => $model->getDexterity(),
            'inteligence' => $model->getInteligence(),
            'equiplevel' => $model->getEquipLevel(),
            'damage_incisors' => $model->getDamageIncisors(),
            'damage_hammer' => $model->getDamageHammer(),
            'damage_stab' => $model->getDamageStab(),
            'damage_element' => $model->getDamageElement(),
            'damage_magic' => $model->getDamageMagic(),
            'effect_mode' => $model->getEffectMode(),
            'effect_type' => $model->getEffectType(),
            'effect_value' => $model->getEffectValue(),
            'effect_time' => $model->getEffectTime(),
            'bonusstrength_mode' => $model->getBonusStrengthMode(),
            'bonusstrength_value' => $model->getBonusStrengthValue(),
            'bonusdexterity_mode' => $model->getBonusDexterityMode(),
            'bonusdexterity_value' => $model->getBonusDexterityValue(),
            'bonusinteligence_mode' => $model->getBonusInteligenceMode(),
            'bonusinteligence_value' => $model->getBonusInteligenceValue(),
            'damagemonsterbonus_mode' => $model->getDamageMonsterBonusMode(),
            'damagemonsterbonus_value' => $model->getDamageMonsterBonusValue(),
            'damagemonsterbonus_type' => $model->getDamageMonsterBonusType(),
            'name_pl' => $model->getNamePl(),
            'name_eng' => $model->getNameEng()
        ]);
    }
}
