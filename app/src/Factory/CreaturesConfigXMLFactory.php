<?php

namespace App\Factory;

use App\Model\CreaturesConfig;
use App\Utils\CreaturesConfigXML;

class CreaturesConfigXMLFactory
{
    public static function create(CreaturesConfig $creaturesConfig): CreaturesConfigXML
    {
        $xml = new CreaturesConfigXML();
        $xml->index = $creaturesConfig->getIndex();
        $xml->level = $creaturesConfig->getLevel();
        $xml->name->polish = $creaturesConfig->getNamePolish();
        $xml->name->english = $creaturesConfig->getNameEnglish();
        //TODO: add rest of parameters like up
        return $xml;
    }
}