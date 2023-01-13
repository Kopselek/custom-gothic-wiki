<?php

namespace GothicServer\Utils;

class CreaturesName
{
    public string $polish = "None";
    public string $english = "None";
}

class CreaturesDamage
{
    public int $meele = 0;
    public int $meeleweapon = 0;
    public int $rangedweapon = 0;
    public int $magic = 0;

}

class CreaturesDrop
{
    public string $itemInstance = "None";
    public int $min = 0;
    public int $max = 0;
    public int $chance = 0;
}

class CreaturesProtection
{
    public int $edge = 0;
    public int $blunt = 0;
    public int $point = 0;
    public int $fire = 0;
    public int $magic = 0;
}

class CreaturesWeapon
{
    public string $meeleweapon = "None";
    public string $armor = "None";
    public string $shield = "None";
    public string $magic = "None";
}

class CreaturesVisual
{
    public string $bodymodel = "None";
    public string $bodytexture = "None";
    public string $headmodel = "None";
    public string $headtexture = "None";
}

class CreaturesConfig extends XMLConfigBase
{
    public string $index = "None";
    public int $level = 0;
    public CreaturesName $name;
    public string $instance = "None";
    public string $type = "None";
    public bool $agressive = false;
    public int $health = 0;
    public int $mana = 0;
    public int $strength = 0;
    public int $magiclevel = 0;
    public int $dexterity = 0;
    public int $experience = 0;
    public CreaturesDamage $damage;
    public CreaturesDrop $drop;
    public CreaturesProtection $protection;
    public int $mindistance = 0;
    public int $maxdistance = 0;
    public int $bonusdistance = 0;
    public int $respawn = 0;
    public CreaturesWeapon $weapon;
    public CreaturesVisual $visual;

}
