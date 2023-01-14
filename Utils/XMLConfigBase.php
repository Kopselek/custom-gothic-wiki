<?php

namespace GothicServer\Utils;

abstract class XMLConfigBase
{
    protected $xml;
    protected $root;

    public function __construct(
        string $root
    ) {
        $xml = new \SimpleXMLElement("<" . $root . "/>");
        $this->root = $root;
    }

    public function __ToString(): string
    {
        return $this->xml->asXML();
    }

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
