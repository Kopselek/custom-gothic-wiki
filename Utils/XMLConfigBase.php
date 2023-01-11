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
    }
}
