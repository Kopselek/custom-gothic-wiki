<?php

namespace GothicServer\Utils;

class CreaturesName
{
    public string $polish;
    public string $english;
}

class CreaturesDamage {
    public string $meele;
    public string $meeleweapon;
    public string $rangedweapon;
    public string $magic;

}

class CreaturesDrop {
    public string $itemInstance;
    public int $min;
    public int $max;
    public int $chance;
}

class CreaturesProtection {
    public int $edge;
    public int $blunt;
    public int $point;
    public int $fire;
    public int $magic;
}

class CreaturesWeapon {
    public string $meeleweapon;
    public string $armor;
    public string $shield;
    public string $magic;
}

class CreaturesVisual {
    public string $bodymodel;
    public string $bodytexture;
    public string $headmodel;
    public string $headtexture;
}
class CreaturesConfig extends XMLConfigBase
{
    public string $index;
    public int $level;
    public CreaturesName $name;
    public string $instance;
    public string $type;
    public bool $agressive;
    public string $strength;
    public string $magiclevel;
    public string $dexterity;
    public string $experience;
    public CreaturesDamage $damage;
    public CreaturesDrop $drop;
    public CreaturesProtection $protection;
    public int $mindistance;
    public int $maxdistance;
    public int $bonusdistance;
    public int $respawn;
    public CreaturesWeapon $weapon;
    public CreaturesVisual $visual;

}
