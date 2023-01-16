<?php

namespace GothicServer\Factory;

use GothicServer\Model\CreaturesConfig;
use GothicServer\Utils\CreaturesConfigXML;

class CreaturesConfigXMLFactory
{
    public static function create(CreaturesConfig $creaturesConfig): CreaturesConfigXML
    {
        $xml = new CreaturesConfigXML();
        $xml->index = $creaturesConfig->getIndex();
        //TODO: add rest of parameters like up
        return $xml;
    }
}