<?php

namespace App\Model;

class CreaturesConfig
{
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
//    private string $drop;
    private int $protection_edge;
    private int $protection_blunt;
    private int $protection_point;
    private int $protection_fire;
    private int $protection_magic;
    private int $mindistance;
    private int $maxdistance;
    private int $bonusdistance;
    private int $respawn;
    private string $weapon_meeleweapon;
    private string $weapon_armor;
    private string $weapon_shield;
    private string $weapon_magic;

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

    /**
     * @return string
     */
    public function getInstance(): string
    {
        return $this->instance;
    }

    /**
     * @param string $instance
     */
    public function setInstance(string $instance): void
    {
        $this->instance = $instance;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getAggressive(): int
    {
        return $this->aggressive;
    }

    /**
     * @param int $aggressive
     */
    public function setAggressive(int $aggressive): void
    {
        $this->aggressive = $aggressive;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    /**
     * @param int $health
     */
    public function setHealth(int $health): void
    {
        $this->health = $health;
    }

    /**
     * @return int
     */
    public function getMana(): int
    {
        return $this->mana;
    }

    /**
     * @param int $mana
     */
    public function setMana(int $mana): void
    {
        $this->mana = $mana;
    }

    /**
     * @return int
     */
    public function getStrength(): int
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength(int $strength): void
    {
        $this->strength = $strength;
    }

    /**
     * @return int
     */
    public function getMagiclevel(): int
    {
        return $this->magiclevel;
    }

    /**
     * @param int $magiclevel
     */
    public function setMagiclevel(int $magiclevel): void
    {
        $this->magiclevel = $magiclevel;
    }

    /**
     * @return int
     */
    public function getExperience(): int
    {
        return $this->experience;
    }

    /**
     * @param int $experience
     */
    public function setExperience(int $experience): void
    {
        $this->experience = $experience;
    }

    /**
     * @return int
     */
    public function getDamageMelee(): int
    {
        return $this->damage_melee;
    }

    /**
     * @param int $damage_melee
     */
    public function setDamageMelee(int $damage_melee): void
    {
        $this->damage_melee = $damage_melee;
    }

    /**
     * @return int
     */
    public function getDamageMeleeweapon(): int
    {
        return $this->damage_meleeweapon;
    }

    /**
     * @param int $damage_meleeweapon
     */
    public function setDamageMeleeweapon(int $damage_meleeweapon): void
    {
        $this->damage_meleeweapon = $damage_meleeweapon;
    }

    /**
     * @return int
     */
    public function getDamageRangedweapon(): int
    {
        return $this->damage_rangedweapon;
    }

    /**
     * @param int $damage_rangedweapon
     */
    public function setDamageRangedweapon(int $damage_rangedweapon): void
    {
        $this->damage_rangedweapon = $damage_rangedweapon;
    }

    /**
     * @return int
     */
    public function getDamageMagic(): int
    {
        return $this->damage_magic;
    }

    /**
     * @param int $damage_magic
     */
    public function setDamageMagic(int $damage_magic): void
    {
        $this->damage_magic = $damage_magic;
    }

    /**
     * @return int
     */
    public function getProtectionEdge(): int
    {
        return $this->protection_edge;
    }

    /**
     * @param int $protection_edge
     */
    public function setProtectionEdge(int $protection_edge): void
    {
        $this->protection_edge = $protection_edge;
    }

    /**
     * @return int
     */
    public function getProtectionBlunt(): int
    {
        return $this->protection_blunt;
    }

    /**
     * @param int $protection_blunt
     */
    public function setProtectionBlunt(int $protection_blunt): void
    {
        $this->protection_blunt = $protection_blunt;
    }

    /**
     * @return int
     */
    public function getProtectionPoint(): int
    {
        return $this->protection_point;
    }

    /**
     * @param int $protection_point
     */
    public function setProtectionPoint(int $protection_point): void
    {
        $this->protection_point = $protection_point;
    }

    /**
     * @return int
     */
    public function getProtectionFire(): int
    {
        return $this->protection_fire;
    }

    /**
     * @param int $protection_fire
     */
    public function setProtectionFire(int $protection_fire): void
    {
        $this->protection_fire = $protection_fire;
    }

    /**
     * @return int
     */
    public function getProtectionMagic(): int
    {
        return $this->protection_magic;
    }

    /**
     * @param int $protection_magic
     */
    public function setProtectionMagic(int $protection_magic): void
    {
        $this->protection_magic = $protection_magic;
    }

    /**
     * @return int
     */
    public function getMindistance(): int
    {
        return $this->mindistance;
    }

    /**
     * @param int $mindistance
     */
    public function setMindistance(int $mindistance): void
    {
        $this->mindistance = $mindistance;
    }

    /**
     * @return int
     */
    public function getMaxdistance(): int
    {
        return $this->maxdistance;
    }

    /**
     * @param int $maxdistance
     */
    public function setMaxdistance(int $maxdistance): void
    {
        $this->maxdistance = $maxdistance;
    }

    /**
     * @return int
     */
    public function getBonusdistance(): int
    {
        return $this->bonusdistance;
    }

    /**
     * @param int $bonusdistance
     */
    public function setBonusdistance(int $bonusdistance): void
    {
        $this->bonusdistance = $bonusdistance;
    }

    /**
     * @return int
     */
    public function getRespawn(): int
    {
        return $this->respawn;
    }

    /**
     * @param int $respawn
     */
    public function setRespawn(int $respawn): void
    {
        $this->respawn = $respawn;
    }

    /**
     * @return string
     */
    public function getWeaponMeeleweapon(): string
    {
        return $this->weapon_meeleweapon;
    }

    /**
     * @param string $weapon_meeleweapon
     */
    public function setWeaponMeeleweapon(string $weapon_meeleweapon): void
    {
        $this->weapon_meeleweapon = $weapon_meeleweapon;
    }

    /**
     * @return string
     */
    public function getWeaponArmor(): string
    {
        return $this->weapon_armor;
    }

    /**
     * @param string $weapon_armor
     */
    public function setWeaponArmor(string $weapon_armor): void
    {
        $this->weapon_armor = $weapon_armor;
    }

    /**
     * @return string
     */
    public function getWeaponShield(): string
    {
        return $this->weapon_shield;
    }

    /**
     * @param string $weapon_shield
     */
    public function setWeaponShield(string $weapon_shield): void
    {
        $this->weapon_shield = $weapon_shield;
    }

    /**
     * @return string
     */
    public function getWeaponMagic(): string
    {
        return $this->weapon_magic;
    }

    /**
     * @param string $weapon_magic
     */
    public function setWeaponMagic(string $weapon_magic): void
    {
        $this->weapon_magic = $weapon_magic;
    }
}