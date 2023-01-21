<?php

namespace App\Manager;

use App\Model\CreaturesConfig;

class CreaturesManager extends BaseManager
{
    public function create(CreaturesConfig $model)
    {
        $sql = "INSERT INTO creature_config(`index`, level, name_polish, name_english, instance, type, aggressive, health, mana, strength, magiclevel, dexterity, experience, damage_melee, damage_meleeweapon, damage_rangedweapon, damage_magic, `drop`, protection_edge, protection_blunt, protection_point, protection_fire, protection_magic, mindistance, maxdistance, bonusdistance, respawn, weapon_meleeweapon, weapon_armor, weapon_shield, weapon_magic) 
                VALUES (:index, :level, :name_polish, :name_english, :instance, :type, :aggressive, :health, :mana, :strength, :magiclevel, :dexterity, :experience, :damage_melee, :damage_meleeweapon, :damage_rangedweapon, :damage_magic, :drop, :protection_edge, :protection_blunt, :protection_point, :protection_fire, :protection_magic, :mindistance, :maxdistance, :bonusdistance, :respawn, :weapon_meleeweapon, :weapon_armor, :weapon_shield, :weapon_magic)";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            'index' => $model->getIndex(),
            'level' => $model->getLevel(),
            'name_polish' => $model->getNamePolish(),
            'name_english' => $model->getNameEnglish(),
            'instance' => $model->getInstance(),
            'type' => $model->getType(),
            'aggressive' => (int)$model->getAggressive(),
            'health' => $model->getHealth(),
            'mana' => $model->getMana(),
            'strength' => $model->getStrength(),
            'magiclevel' => $model->getMagiclevel(),
            'dexterity' => $model->getDexterity(),
            'experience' => $model->getExperience(),
            'damage_melee' => $model->getDamageMelee(),
            'damage_meleeweapon' => $model->getDamageMeleeweapon(),
            'damage_rangedweapon' => $model->getDamageRangedweapon(),
            'damage_magic' => $model->getDamageMagic(),
            //TODO: drop missing
            'drop' => "test",
            'protection_edge' => $model->getProtectionEdge(),
            'protection_blunt' => $model->getProtectionBlunt(),
            'protection_point' => $model->getProtectionPoint(),
            'protection_fire' => $model->getProtectionFire(),
            'protection_magic' => $model->getProtectionMagic(),
            'mindistance' => $model->getMindistance(),
            'maxdistance' => $model->getMaxdistance(),
            'bonusdistance' => $model->getBonusdistance(),
            'respawn' => $model->getRespawn(),
            'weapon_meleeweapon' => $model->getWeaponMeleeweapon(),
            'weapon_armor' => $model->getWeaponArmor(),
            'weapon_shield' => $model->getWeaponShield(),
            'weapon_magic' => $model->getWeaponMagic()
        ]);
    }


}