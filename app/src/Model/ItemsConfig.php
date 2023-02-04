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
    private int $bonusStrengthMode;
    private int $bonusStrengthValue;
    private int $bonusDexterityMode;
    private int $bonusDexterityValue;
    private int $bonusInteligenceMode;
    private int $bonusInteligenceValue;
    private int $damageMonsterBonusMode;
    private int $damageMonsterBonusValue;
    private string $damageMonsterBonusType;
    private string $namePl;
    private string $nameEng;


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
     * @return string
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     */
    public function setMode(string $mode): void
    {
        $this->mode = $mode;
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
    public function getTexture(): string
    {
        return $this->texture;
    }

    /**
     * @param string $texture
     */
    public function setTexture(string $texture): void
    {
        $this->texture = $texture;
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
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getCrystalSlots(): int
    {
        return $this->crystalSlots;
    }

    /**
     * @param int $crystalSlots
     */
    public function setCrystalSlots(int $crystalSlots): void
    {
        $this->crystalSlots = $crystalSlots;
    }

    /**
     * @return int
     */
    public function getStregth(): int
    {
        return $this->stregth;
    }

    /**
     * @param int $stregth
     */
    public function setStregth(int $stregth): void
    {
        $this->stregth = $stregth;
    }

    /**
     * @return int
     */
    public function getDexterity(): int
    {
        return $this->dexterity;
    }

    /**
     * @param int $dexterity
     */
    public function setDexterity(int $dexterity): void
    {
        $this->dexterity = $dexterity;
    }

    /**
     * @return int
     */
    public function getInteligence(): int
    {
        return $this->inteligence;
    }

    /**
     * @param int $inteligence
     */
    public function setInteligence(int $inteligence): void
    {
        $this->inteligence = $inteligence;
    }

    /**
     * @return int
     */
    public function getEquipLevel(): int
    {
        return $this->equipLevel;
    }

    /**
     * @param int $equipLevel
     */
    public function setEquipLevel(int $equipLevel): void
    {
        $this->equipLevel = $equipLevel;
    }

    /**
     * @return int
     */
    public function getDamageIncisors(): int
    {
        return $this->damageIncisors;
    }

    /**
     * @param int $damageIncisors
     */
    public function setDamageIncisors(int $damageIncisors): void
    {
        $this->damageIncisors = $damageIncisors;
    }

    /**
     * @return int
     */
    public function getDamageHammer(): int
    {
        return $this->damageHammer;
    }

    /**
     * @param int $damageHammer
     */
    public function setDamageHammer(int $damageHammer): void
    {
        $this->damageHammer = $damageHammer;
    }

    /**
     * @return int
     */
    public function getDamageStab(): int
    {
        return $this->damageStab;
    }

    /**
     * @param int $damageStab
     */
    public function setDamageStab(int $damageStab): void
    {
        $this->damageStab = $damageStab;
    }

    /**
     * @return int
     */
    public function getDamageElement(): int
    {
        return $this->damageElement;
    }

    /**
     * @param int $damageElement
     */
    public function setDamageElement(int $damageElement): void
    {
        $this->damageElement = $damageElement;
    }

    /**
     * @return int
     */
    public function getDamageMagic(): int
    {
        return $this->damageMagic;
    }

    /**
     * @param int $damageMagic
     */
    public function setDamageMagic(int $damageMagic): void
    {
        $this->damageMagic = $damageMagic;
    }

    /**
     * @return int
     */
    public function getEffectMode(): int
    {
        return $this->effectMode;
    }

    /**
     * @param int $effectMode
     */
    public function setEffectMode(int $effectMode): void
    {
        $this->effectMode = $effectMode;
    }

    /**
     * @return string
     */
    public function getEffectType(): string
    {
        return $this->effectType;
    }

    /**
     * @param string $effectType
     */
    public function setEffectType(string $effectType): void
    {
        $this->effectType = $effectType;
    }

    /**
     * @return int
     */
    public function getEffectValue(): int
    {
        return $this->effectValue;
    }

    /**
     * @param int $effectValue
     */
    public function setEffectValue(int $effectValue): void
    {
        $this->effectValue = $effectValue;
    }

    /**
     * @return int
     */
    public function getEffectTime(): int
    {
        return $this->effectTime;
    }

    /**
     * @param int $effectTime
     */
    public function setEffectTime(int $effectTime): void
    {
        $this->effectTime = $effectTime;
    }

    /**
     * @return int
     */
    public function getBonusStrengthMode(): int
    {
        return $this->bonusStrengthMode;
    }

    /**
     * @param int $bonusStrengthMode
     */
    public function setBonusStrengthMode(int $bonusStrengthMode): void
    {
        $this->bonusStrengthMode = $bonusStrengthMode;
    }

    /**
     * @return int
     */
    public function getBonusStrengthValue(): int
    {
        return $this->bonusStrengthValue;
    }

    /**
     * @param int $bonusStrengthValue
     */
    public function setBonusStrengthValue(int $bonusStrengthValue): void
    {
        $this->bonusStrengthValue = $bonusStrengthValue;
    }

    /**
     * @return int
     */
    public function getBonusDexterityMode(): int
    {
        return $this->bonusDexterityMode;
    }

    /**
     * @param int $bonusDexterityMode
     */
    public function setBonusDexterityMode(int $bonusDexterityMode): void
    {
        $this->bonusDexterityMode = $bonusDexterityMode;
    }

    /**
     * @return int
     */
    public function getBonusDexterityValue(): int
    {
        return $this->bonusDexterityValue;
    }

    /**
     * @param int $bonusDexterityValue
     */
    public function setBonusDexterityValue(int $bonusDexterityValue): void
    {
        $this->bonusDexterityValue = $bonusDexterityValue;
    }

    /**
     * @return int
     */
    public function getBonusInteligenceMode(): int
    {
        return $this->bonusInteligenceMode;
    }

    /**
     * @param int $bonusInteligenceMode
     */
    public function setBonusInteligenceMode(int $bonusInteligenceMode): void
    {
        $this->bonusInteligenceMode = $bonusInteligenceMode;
    }

    /**
     * @return int
     */
    public function getBonusInteligenceValue(): int
    {
        return $this->bonusInteligenceValue;
    }

    /**
     * @param int $bonusInteligenceValue
     */
    public function setBonusInteligenceValue(int $bonusInteligenceValue): void
    {
        $this->bonusInteligenceValue = $bonusInteligenceValue;
    }

    /**
     * @return int
     */
    public function getDamageMonsterBonusMode(): int
    {
        return $this->damageMonsterBonusMode;
    }

    /**
     * @param int $damageMonsterBonusMode
     */
    public function setDamageMonsterBonusMode(int $damageMonsterBonusMode): void
    {
        $this->damageMonsterBonusMode = $damageMonsterBonusMode;
    }

    /**
     * @return int
     */
    public function getDamageMonsterBonusValue(): int
    {
        return $this->damageMonsterBonusValue;
    }

    /**
     * @param int $damageMonsterBonusValue
     */
    public function setDamageMonsterBonusValue(int $damageMonsterBonusValue): void
    {
        $this->damageMonsterBonusValue = $damageMonsterBonusValue;
    }

    /**
     * @return string
     */
    public function getDamageMonsterBonusType(): string
    {
        return $this->damageMonsterBonusType;
    }

    /**
     * @param string $damageMonsterBonusType
     */
    public function setDamageMonsterBonusType(string $damageMonsterBonusType): void
    {
        $this->damageMonsterBonusType = $damageMonsterBonusType;
    }

    /**
     * @return string
     */
    public function getNamePl(): string
    {
        return $this->namePl;
    }

    /**
     * @param string $namePl
     */
    public function setNamePl(string $namePl): void
    {
        $this->namePl = $namePl;
    }

    /**
     * @return string
     */
    public function getNameEng(): string
    {
        return $this->nameEng;
    }

    /**
     * @param string $nameEng
     */
    public function setNameEng(string $nameEng): void
    {
        $this->nameEng = $nameEng;
    }
}
