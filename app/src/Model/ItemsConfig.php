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
    private int $crystalslots;
    private int $strength;
    private int $dexterity;
    private int $inteligence;
    private int $equiplevel;
    private int $damage_incisors;
    private int $damage_hammer;
    private int $damage_stab;
    private int $damage_element;
    private int $damage_magic;
    private int $effect_mode;
    private string $effect_type;
    private int $effect_value;
    private int $effect_time;
    private int $bonusstrength_mode;
    private int $bonusstrength_value;
    private int $bonusdexterity_mode;
    private int $bonusdexterity_value;
    private int $bonusinteligence_mode;
    private int $bonusinteligence_value;
    private int $damagemonsterbonus_mode;
    private int $damagemonsterbonus_value;
    private string $damagemonsterbonus_type;
    private string $name_pl;
    private string $name_eng;


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
    public function getCrystalslots(): int
    {
        return $this->crystalslots;
    }

    /**
     * @param int $crystalslots
     */
    public function setCrystalslots(int $crystalslots): void
    {
        $this->crystalslots = $crystalslots;
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
    public function getEquiplevel(): int
    {
        return $this->equiplevel;
    }

    /**
     * @param int $equiplevel
     */
    public function setEquiplevel(int $equiplevel): void
    {
        $this->equiplevel = $equiplevel;
    }

    /**
     * @return int
     */
    public function getDamageIncisors(): int
    {
        return $this->damage_incisors;
    }

    /**
     * @param int $damage_incisors
     */
    public function setDamageIncisors(int $damage_incisors): void
    {
        $this->damage_incisors = $damage_incisors;
    }

    /**
     * @return int
     */
    public function getDamageHammer(): int
    {
        return $this->damage_hammer;
    }

    /**
     * @param int $damage_hammer
     */
    public function setDamageHammer(int $damage_hammer): void
    {
        $this->damage_hammer = $damage_hammer;
    }

    /**
     * @return int
     */
    public function getDamageStab(): int
    {
        return $this->damage_stab;
    }

    /**
     * @param int $damage_stab
     */
    public function setDamageStab(int $damage_stab): void
    {
        $this->damage_stab = $damage_stab;
    }

    /**
     * @return int
     */
    public function getDamageElement(): int
    {
        return $this->damage_element;
    }

    /**
     * @param int $damage_element
     */
    public function setDamageElement(int $damage_element): void
    {
        $this->damage_element = $damage_element;
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
    public function getEffectMode(): int
    {
        return $this->effect_mode;
    }

    /**
     * @param int $effect_mode
     */
    public function setEffectMode(int $effect_mode): void
    {
        $this->effect_mode = $effect_mode;
    }

    /**
     * @return string
     */
    public function getEffectType(): string
    {
        return $this->effect_type;
    }

    /**
     * @param string $effect_type
     */
    public function setEffectType(string $effect_type): void
    {
        $this->effect_type = $effect_type;
    }

    /**
     * @return int
     */
    public function getEffectValue(): int
    {
        return $this->effect_value;
    }

    /**
     * @param int $effect_value
     */
    public function setEffectValue(int $effect_value): void
    {
        $this->effect_value = $effect_value;
    }

    /**
     * @return int
     */
    public function getEffectTime(): int
    {
        return $this->effect_time;
    }

    /**
     * @param int $effect_time
     */
    public function setEffectTime(int $effect_time): void
    {
        $this->effect_time = $effect_time;
    }

    /**
     * @return int
     */
    public function getBonusstrengthmode(): int
    {
        return $this->bonusstrength_mode;
    }

    /**
     * @param int $bonusstrength_mode
     */
    public function setBonusstrengthmode(int $bonusstrength_mode): void
    {
        $this->bonusstrength_mode = $bonusstrength_mode;
    }

    /**
     * @return int
     */
    public function getBonusstrengthvalue(): int
    {
        return $this->bonusstrength_value;
    }

    /**
     * @param int $bonusstrength_value
     */
    public function setBonusstrengthvalue(int $bonusstrength_value): void
    {
        $this->bonusstrength_value = $bonusstrength_value;
    }

    /**
     * @return int
     */
    public function getBonusdexteritymode(): int
    {
        return $this->bonusdexterity_mode;
    }

    /**
     * @param int $bonusdexterity_mode
     */
    public function setBonusdexteritymode(int $bonusdexterity_mode): void
    {
        $this->bonusdexterity_mode = $bonusdexterity_mode;
    }

    /**
     * @return int
     */
    public function getBonusdexterityvalue(): int
    {
        return $this->bonusdexterity_value;
    }

    /**
     * @param int $bonusdexterity_value
     */
    public function setBonusdexterityvalue(int $bonusdexterity_value): void
    {
        $this->bonusdexterity_value = $bonusdexterity_value;
    }

    /**
     * @return int
     */
    public function getBonusinteligencemode(): int
    {
        return $this->bonusinteligence_mode;
    }

    /**
     * @param int $bonusinteligence_mode
     */
    public function setBonusinteligencemode(int $bonusinteligence_mode): void
    {
        $this->bonusinteligence_mode = $bonusinteligence_mode;
    }

    /**
     * @return int
     */
    public function getBonusinteligencevalue(): int
    {
        return $this->bonusinteligence_value;
    }

    /**
     * @param int $bonusinteligence_value
     */
    public function setBonusinteligencevalue(int $bonusinteligence_value): void
    {
        $this->bonusinteligence_value = $bonusinteligence_value;
    }

    /**
     * @return int
     */
    public function getDamagemonsterbonusmode(): int
    {
        return $this->damagemonsterbonus_mode;
    }

    /**
     * @param int $damagemonsterbonus_mode
     */
    public function setDamagemonsterbonusmode(int $damagemonsterbonus_mode): void
    {
        $this->damagemonsterbonus_mode = $damagemonsterbonus_mode;
    }

    /**
     * @return int
     */
    public function getDamagemonsterbonusvalue(): int
    {
        return $this->damagemonsterbonus_value;
    }

    /**
     * @param int $damagemonsterbonus_value
     */
    public function setDamagemonsterbonusvalue(int $damagemonsterbonus_value): void
    {
        $this->damagemonsterbonus_value = $damagemonsterbonus_value;
    }

    /**
     * @return string
     */
    public function getDamagemonsterbonustype(): string
    {
        return $this->damagemonsterbonus_type;
    }

    /**
     * @param string $damagemonsterbonus_type
     */
    public function setDamagemonsterbonustype(string $damagemonsterbonus_type): void
    {
        $this->damagemonsterbonus_type = $damagemonsterbonus_type;
    }

    /**
     * @return string
     */
    public function getNamePl(): string
    {
        return $this->name_pl;
    }

    /**
     * @param string $name_pl
     */
    public function setNamePl(string $name_pl): void
    {
        $this->name_pl = $name_pl;
    }

    /**
     * @return string
     */
    public function getNameEng(): string
    {
        return $this->name_eng;
    }

    /**
     * @param string $name_eng
     */
    public function setNameEng(string $name_eng): void
    {
        $this->name_eng = $name_eng;
    }
}
