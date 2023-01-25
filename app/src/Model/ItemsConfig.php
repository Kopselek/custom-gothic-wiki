<?php

namespace App\Model;

class ItemsConfig
{
    private string $type;
    private string $mode;
    private string $instance;
    private string $texture;
    private int $level;
    private int $price;
    private int $crystalSlots;
    private int $stregth;
    private int $dexterity;
    private int $inteligence;
    private int $equipLevel;
    private int $damageIncisors;
    private int $damageHammer;
    private int $damageStab;
    private int $damageElement;
    private int $damageMagic;
    private int $effectMode;
    private string $effectType;
    private int $effectValue;
    private int $effectTime;


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
}
