<?php

namespace App\Utils;


class ItemsConfigNUT
{

    public string $type = "None";
    public string $mode = "None";
    public string $instance = "None";
    public string $texture = "None";
    public int $level = 0;
    public int $price = 0;
    public int $crystalSlots = 0;
    public int $stregth = 0;
    public int $dexterity = 0;
    public int $inteligence = 0;
    public int $equipLevel = 0;
    public int $damageIncisors = 0;
    public int $damageHammer = 0;
    public int $damageStab = 0;
    public int $damageElement = 0;
    public int $damageMagic = 0;
    public int $effectMode = 0;
    public string $effectType = "None";
    public int $effectValue = 0;
    public int $effectTime = 0;
    public int $bonusStrengthMode = 0;
    public int $bonusStrengthValue = 0;
    public int $bonusDexterityMode = 0;
    public int $bonusDexterityValue = 0;
    public int $bonusInteligenceMode = 0;
    public int $bonusInteligenceValue = 0;
    public int $damageMonsterBonusMode = 0;
    public int $damageMonsterBonusValue = 0;
    public string $damageMonsterBonusType = "None";
    public string $namePl = "None";
    public string $nameEng = "None";

    public function hydrate(\SimpleXMLElement $xml): \SimpleXMLElement
    {
        return 0;
    }
}