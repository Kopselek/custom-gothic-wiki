<?php

namespace GothicServer\Utils;

abstract class XMLConfigBase
{
    public function __construct(
        private string $configName
    ) {
        $xml = new SimpleXMLElement($this->configName);
    }
}
