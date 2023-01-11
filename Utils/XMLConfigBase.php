<?php

namespace GothicServer\Utils;

abstract class XMLConfigBase
{
    public function __construct(
        private string $configName
    ) {
        $xml = new SimpleXMLElement("<" . $this->configName . "></" . $this->configName . ">");

        $xml->addAtributa("test", "test");
        Header('Content-type: text/xml');

        echo $xml->asXML();
    }
}
