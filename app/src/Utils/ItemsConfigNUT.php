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
    public int $crystalslots = 0;
    public int $strength = 0;
    public int $dexterity = 0;
    public int $inteligence = 0;
    public int $equipLevel = 0;
    public ItemsDamage $damage;
    public ItemsEffect $effect;
    public ItemsBonusStrength $bonusStrength;
    public ItemsBonusDexterity $bonusDexterity;
    public ItemsBonusInteligence $bonusInteligence;
    public ItemsDamageMonsterBonus $damageMonsterBonus;
    public ItemsName $name;

    public function __ToString()
    {
        return sprintf('Item.Add({ <br>
            type = "%s", <br>
            mode = "%s", <br>
            instance = "%s", <br>
            texture = "%s", <br>
            level = %d, <br>
            price = %d, <br>
            crystalslots = %d, <br>
            strength = %d, <br>
            dexterity = %d, <br>
            inteligence = %d, <br>
            equiplevel = %d, <br>
            <br>
            damage = { <br>
                incisors = %d, <br>
                hammer = %d, <br>
                stab = %d, <br>
                element = %d, <br>
                magic = %d, <br>
            }, <br>
            <br>
            effect = { <br>
                mode = %d, <br>
                type = "%s", <br>
                value = %d, <br>
                time = %d, <br>
            }, <br>
            <br>
            bonusStrength = { <br>
                mode = %d, <br>
                value = %d, <br>
            }, <br>
            <br>
            bonusDexterity = { <br>
                mode = %d, <br>
                value = %d, <br>
            }, <br>
            <br>
            bonusInteligence = { <br>
                mode = %d, <br>
                value = %d, <br>
            }, <br>
            <br>
            damageMonsterBonus = { <br>
                mode = %d, <br>
                value = %d, <br>
                type = "%s", <br>
            }, <br>
            <br>
            name = { <br>
                pl = "%s", <br>
                eng = "%s", <br>
            }, <br>
        }) <br>',
        $this->type,
        $this->mode,
        $this->instance,
        $this->texture,
        $this->level,
        $this->price,
        $this->crystalslots,
        $this->strength,
        $this->dexterity,
        $this->inteligence,
        $this->equipLevel,
        $this->damage->inciscors,
        $this->damage->hammer,
        $this->damage->stab,
        $this->damage->element,
        $this->damage->magic,
        $this->effect->mode,
        $this->effect->type,
        $this->effect->value,
        $this->effect->type,
        $this->bonusStrength->mode,
        $this->bonusStrength->value,
        $this->bonusDexterity->mode,
        $this->bonusDexterity->value,
        $this->bonusInteligence->mode,
        $this->bonusInteligence->value,
        $this->damageMonsterBonus->mode,
        $this->damageMonsterBonus->value,
        $this->damageMonsterBonus->type,
        $this->name->pl,
        $this->name->eng,
        );
    }
}

class ItemsDamage
{
    public int $inciscors = 0;
    public int $hammer = 0;
    public int $stab = 0;
    public int $element = 0;
    public int $magic = 0;
}

class ItemsEffect
{
    public int $mode = 0;
    public string $type = "";
    public int $value = 0;
    public int $time = 0;
}

class ItemsBonusStrength
{
    public int $mode = 1;
    public int $value = 0;
}

class ItemsBonusDexterity
{
    public int $mode = 1;
    public int $value = 0;
}

class ItemsBonusInteligence
{
    public int $mode = 1;
    public int $value = 0;
}

class ItemsDamageMonsterBonus
{
    public int $mode = 1;
    public int $value = 0;
    public string $type = "";
}

class ItemsName
{
    public string $pl = "";
    public string $eng = "";
}