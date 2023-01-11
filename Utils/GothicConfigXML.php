<?php

namespace GothicServer\Utils;

class CreaturesName
{
    public string $polish;
    public string $english;
}
class CreaturesConfig extends XMLConfigBase
{
    public string $index;
    public int $level;
    public CreaturesName $name;
    public string $instance;
    public string $type;
}
