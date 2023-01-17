<?php

namespace GothicServer\Model;

class CreaturesConfig
{
    //TODO: add getter and setter
    private string $index;
    private int $level;
    private string $name_polish;
    private string $name_english;
    private string $instance;
    private string $type;
    private int $aggressive;
    private int $health;
    private int $mana;
    private int $strength;
    private int $magiclevel;
    private int $experience;
    private int $damage_melee;
    private int $damage_meleeweapon;
    private int $damage_rangedweapon;
    private int $damage_magic;
    private string $drop;
    private int $protection_edge;
    private int $protection_blunt;
    private int $protection_point;
    private int $protection_fire;
    private  int $protection_magic;
    private  int $mindistance;
    private int $maxdistance;
    private int $bonusdistance;
    private int $respawn;
    private string $weapon_meeleweapon;
    private string $weapon_armor;
    private string $weapon_shield;
    private string $weapon_magic;

    //TODO: Visual is for humans have to do smth

    /**
     * @return string
     */
    public function getIndex(): string
    {
        return $this->index;
    }

    /**
     * @param string $index
     */
    public function setIndex(string $index): void
    {
        $this->index = $index;
    }
}