<?php

namespace GothicServer\Utils;

class CreaturesConfigXML extends XMLConfigBase
{
    public function __construct()
    {
        parent::__construct("creatures");
    }

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
    public CreaturesVisual $visual;

    public function hydrate(): void
    {
        $this->xml->addChild('index', $this->index);
        $this->xml->addChild('level', $this->level);

        // name group tag
        $name = $this->xml->addChild('name');
        $name->addChild('polish', $this->name->polish);
        $name->addChild('english', $this->name->english);

        //single tags
        $this->xml->addChild('instance', $this->instance);
        $this->xml->addChild('type', $this->type);
        $this->xml->addChild('aggressive', $this->aggressive);
        $this->xml->addChild('health', $this->health);
        $this->xml->addChild('mana', $this->mana);
        $this->xml->addChild('strength', $this->strength);
        $this->xml->addChild('magiclevel', $this->magiclevel);
        $this->xml->addChild('dexterity', $this->dexterity);
        $this->xml->addChild('experience', $this->experience);

        //damage group tag
        $damage = $this->xml->addChild('damage');
        $damage->xml->addChild('meele', $this->damage->meele);
        $damage->xml->addChild('meeleweapon', $this->damage->meeleweapon);
        $damage->xml->addChild('rangedweapon', $this->damage->rangedweapon);
        $damage->xml->addChild('magic', $this->damage->magic);

        //drop group tag
        $drop = $this->xml->addChild('drop');
        $item = $drop->addChild('item');
        $item->addAttribute('instance', $this->drop->itemInstance);
        $item->addAttribute('min', $this->drop->min);
        $item->addAttribute('max', $this->drop->max);
        $item->addAttribute('chance', $this->drop->chance);

        //protection group tag
        $protection = $this->xml->addChild('protection');
        $protection->addChild('edge', $this->protection->edge);
        $protection->addChild('blunt', $this->protection->blunt);
        $protection->addChild('point', $this->protection->point);
        $protection->addChild('fire', $this->protection->fire);
        $protection->addChild('magic', $this->protection->magic);

        //single tags
        $this->xml->addChild('mindistance', $this->mindistance);
        $this->xml->addChild('maxdistance', $this->maxdistance);
        $this->xml->addChild('bonusdistance', $this->bonusdistance);
        $this->xml->addChild('respawn', $this->respawn);

        //weapon group tag
        $weapon = $this->xml->addChild('weapon');
        $weapon->addChild('meeleweapon', $this->weapon->meeleweapon);
        $weapon->addChild('armor', $this->weapon->armor);
        $weapon->addChild('shield', $this->weapon->shield);
        $weapon->addChild('magic', $this->weapon->magic);

        //visual group tag
        $visual = $this->xml->addChild('visual');
        $visual->addChild('bodymodel', $this->visual->bodymodel);
        $visual->addChild('bodytexture', $this->visual->bodytexture);
        $visual->addChild('headmodel', $this->visual->headmodel);
        $visual->addChild('headtexture', $this->visual->headtexture);
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
