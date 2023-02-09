<?php

namespace App\Factory;

use App\Model\CreaturesConfig;
use App\Utils\CreaturesConfigXML;
use App\Utils\CreaturesDamage;
use App\Utils\CreaturesDrop;
use App\Utils\CreaturesName;
use App\Utils\CreaturesProtection;
use App\Utils\CreaturesWeapon;

class CreaturesConfigXMLFactory
{
    public static function create(CreaturesConfig $creaturesConfig): CreaturesConfigXML
    {
        $xml = new CreaturesConfigXML();
        $xml->index = $creaturesConfig->getIndex();
        $xml->level = $creaturesConfig->getLevel();

        $xml->name = new CreaturesName();
        $xml->name->polish = $creaturesConfig->getNamePolish();
        $xml->name->english = $creaturesConfig->getNameEnglish();

        $xml->instance = $creaturesConfig->getInstance();
        $xml->type = $creaturesConfig->getType();
        $xml->aggressive = $creaturesConfig->getAggressive();
        $xml->health = $creaturesConfig->getHealth();
        $xml->mana = $creaturesConfig->getMana();
        $xml->strength = $creaturesConfig->getStrength();
        $xml->magiclevel = $creaturesConfig->getMagiclevel();
        $xml->experience = $creaturesConfig->getExperience();

        $xml->damage = new CreaturesDamage();
        $xml->damage->meele = $creaturesConfig->getDamageMelee();
        $xml->damage->meeleweapon = $creaturesConfig->getDamageMeleeweapon();
        $xml->damage->rangedweapon = $creaturesConfig->getDamageRangedweapon();
        $xml->damage->magic = $creaturesConfig->getDamageMagic();

        $drops = unserialize($creaturesConfig->getDrop());
        foreach($drops as $drop) {
            $dropNewInstance = new CreaturesDrop();
            $dropNewInstance->itemInstance = $drop["instance"];
            $dropNewInstance->max = (int)$drop["max"];
            $dropNewInstance->min = (int)$drop["min"];
            $dropNewInstance->chance = (int)$drop["chance"];
            $xml->drop[] = $dropNewInstance;
        }

        $xml->protection = new CreaturesProtection();
        $xml->protection->edge = $creaturesConfig->getProtectionEdge();
        $xml->protection->blunt = $creaturesConfig->getProtectionBlunt();
        $xml->protection->point = $creaturesConfig->getProtectionPoint();
        $xml->protection->fire = $creaturesConfig->getProtectionFire();
        $xml->protection->magic = $creaturesConfig->getProtectionMagic();

        $xml->mindistance = $creaturesConfig->getMindistance();
        $xml->maxdistance = $creaturesConfig->getMaxdistance();
        $xml->bonusdistance = $creaturesConfig->getBonusdistance();
        $xml->respawn = $creaturesConfig->getRespawn();

        $xml->weapon = new CreaturesWeapon();
        $xml->weapon->meeleweapon = $creaturesConfig->getWeaponMeleeweapon();
        $xml->weapon->armor = $creaturesConfig->getWeaponArmor();
        $xml->weapon->shield = $creaturesConfig->getWeaponShield();
        $xml->weapon->magic = $creaturesConfig->getWeaponMagic();

        return $xml;
    }
}