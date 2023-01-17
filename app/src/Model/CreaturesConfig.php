<?php

namespace App\Model;

class CreaturesConfig
{
    private string $index;
    private int $level;
    private string $name_polish;
    private string $name_english;
//    private string $instance;
//    private string $type;
//    private int $aggressive;
//    private int $health;
//    private int $mana;
//    private int $strength;
//    private int $magiclevel;
//    private int $experience;
//    private int $damage_melee;
//    private int $damage_meleeweapon;
//    private int $damage_rangedweapon;
//    private int $damage_magic;
//    private string $drop;
//    private int $protection_edge;
//    private int $protection_blunt;
//    private int $protection_point;
//    private int $protection_fire;
//    private  int $protection_magic;
//    private  int $mindistance;
//    private int $maxdistance;
//    private int $bonusdistance;
//    private int $respawn;
//    private string $weapon_meeleweapon;
//    private string $weapon_armor;
//    private string $weapon_shield;
//    private string $weapon_magic;

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

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getNamePolish(): string
    {
        return $this->name_polish;
    }

    /**
     * @param string $name_polish
     */
    public function setNamePolish(string $name_polish): void
    {
        $this->name_polish = $name_polish;
    }

    /**
     * @return string
     */
    public function getNameEnglish(): string
    {
        return $this->name_english;
    }

    /**
     * @param string $name_english
     */
    public function setNameEnglish(string $name_english): void
    {
        $this->name_english = $name_english;
    }
}