<?php

namespace App\Factory;

use App\Model\ItemsConfig;
use App\Utils\ItemsBonusDexterity;
use App\Utils\ItemsBonusInteligence;
use App\Utils\ItemsBonusStrength;
use App\Utils\ItemsConfigNUT;
use App\Utils\ItemsDamage;
use App\Utils\ItemsDamageMonsterBonus;
use App\Utils\ItemsEffect;
use App\Utils\ItemsName;

class ItemsConfigNUTFactory
{
    public static function create(ItemsConfig $itemsConfig): ItemsConfigNUT
    {
       $config = new ItemsConfigNUT();
       $config->type = $itemsConfig->getType();
       $config->mode = $itemsConfig->getMode();
       $config->instance = $itemsConfig->getInstance();
       $config->texture = $itemsConfig->getTexture();
       $config->level = $itemsConfig->getLevel();
       $config->price = $itemsConfig->getPrice();
       $config->crystalslots = $itemsConfig->getCrystalslots();
       $config->strength = $itemsConfig->getStrength();
       $config->dexterity = $itemsConfig->getDexterity();
       $config->inteligence = $itemsConfig->getInteligence();
       $config->equipLevel = $itemsConfig->getEquiplevel();

       $damage = new ItemsDamage();
       $damage->inciscors = $itemsConfig->getDamageIncisors();
       $damage->hammer = $itemsConfig->getDamageHammer();
       $damage->stab = $itemsConfig->getDamageStab();
       $damage->element = $itemsConfig->getDamageElement();
       $damage->magic = $itemsConfig->getDamageMagic();
       $config->damage = $damage;

       $effect = new ItemsEffect();
       $effect->mode = $itemsConfig->getEffectMode();
       $effect->type = $itemsConfig->getEffectType();
       $effect->value = $itemsConfig->getEffectValue();
       $effect->time = $itemsConfig->getEffectTime();
       $config->effect = $effect;

       $bonusStrength = new ItemsBonusStrength();
       $bonusStrength->mode = $itemsConfig->getBonusstrengthmode();
       $bonusStrength->value = $itemsConfig->getBonusstrengthvalue();
       $config->bonusStrength = $bonusStrength;

       $bonusDexterity = new ItemsBonusDexterity();
       $bonusDexterity->mode = $itemsConfig->getBonusdexteritymode();
       $bonusDexterity->value = $itemsConfig->getBonusdexterityvalue();
       $config->bonusDexterity = $bonusDexterity;

       $bonusInteligence = new ItemsBonusInteligence();
       $bonusInteligence->mode = $itemsConfig->getBonusinteligencemode();
       $bonusInteligence->value = $itemsConfig->getBonusinteligencevalue();
       $config->bonusInteligence = $bonusInteligence;

       $damageMonsterBonus = new ItemsDamageMonsterBonus();
       $damageMonsterBonus->mode = $itemsConfig->getDamagemonsterbonusmode();
       $damageMonsterBonus->value = $itemsConfig->getDamagemonsterbonusvalue();
       $damageMonsterBonus->type = $itemsConfig->getDamagemonsterbonustype();
       $config->damageMonsterBonus = $damageMonsterBonus;

       $name = new ItemsName();
       $name->pl = $itemsConfig->getNamePl();
       $name->eng = $itemsConfig->getNameEng();
       $config->name = $name;

       return $config;
    }
}