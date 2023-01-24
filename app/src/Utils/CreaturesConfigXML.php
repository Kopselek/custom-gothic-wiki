<?php

namespace App\Utils;

class CreaturesConfigXML
{
    public string $index = "None";
    public int $level = 0;
    public CreaturesName $name;
    public string $instance = "None";
    public string $type = "None";
    public bool $aggressive = false;
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

    public function hydrate(\SimpleXMLElement $xml): \SimpleXMLElement
    {
        $xml->addChild('index', $this->index);
        $xml->addChild('level', $this->level);

        // name group tag
        $name = $xml->addChild('name');
        $name->addChild('polish', $this->name->polish);
        $name->addChild('english', $this->name->english);

        //single tags
        $xml->addChild('instance', $this->instance);
        $xml->addChild('type', $this->type);
        $xml->addChild('aggressive', $this->aggressive);
        $xml->addChild('health', $this->health);
        $xml->addChild('mana', $this->mana);
        $xml->addChild('strength', $this->strength);
        $xml->addChild('magiclevel', $this->magiclevel);
        $xml->addChild('dexterity', $this->dexterity);
        $xml->addChild('experience', $this->experience);

        //damage group tag
        $damage = $xml->addChild('damage');
        $damage->addChild('meele', $this->damage->meele);
        $damage->addChild('meeleweapon', $this->damage->meeleweapon);
        $damage->addChild('rangedweapon', $this->damage->rangedweapon);
        $damage->addChild('magic', $this->damage->magic);

        //drop group tag
        //@TODO
//        $drop = $xml->addChild('drop');
//        $item = $drop->addChild('item');
//        $item->addAttribute('instance', $this->drop->itemInstance);
//        $item->addAttribute('min', $this->drop->min);
//        $item->addAttribute('max', $this->drop->max);
//        $item->addAttribute('chance', $this->drop->chance);

        //protection group tag
        $protection = $xml->addChild('protection');
        $protection->addChild('edge', $this->protection->edge);
        $protection->addChild('blunt', $this->protection->blunt);
        $protection->addChild('point', $this->protection->point);
        $protection->addChild('fire', $this->protection->fire);
        $protection->addChild('magic', $this->protection->magic);

        //single tags
        $xml->addChild('mindistance', $this->mindistance);
        $xml->addChild('maxdistance', $this->maxdistance);
        $xml->addChild('bonusdistance', $this->bonusdistance);
        $xml->addChild('respawn', $this->respawn);

        //weapon group tag
        $weapon = $xml->addChild('weapon');
        $weapon->addChild('meeleweapon', $this->weapon->meeleweapon);
        $weapon->addChild('armor', $this->weapon->armor);
        $weapon->addChild('shield', $this->weapon->shield);
        $weapon->addChild('magic', $this->weapon->magic);
        return $xml;
    }
}


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
