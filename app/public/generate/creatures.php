<?php

use App\Repository\CreatureConfigRepository;
use App\Factory\CreaturesConfigXMLFactory;

$creaturesRepository = new CreatureConfigRepository();
$creatures = $creaturesRepository->findAll();

$output = new \SimpleXMLElement("<root/>");

foreach($creatures as $creature) {
    $creatureXML = CreaturesConfigXMLFactory::create($creature);
    $outputCreatures = $output->addChild("creatures");
    $creatureXML->hydrate($outputCreatures);
}
header('Content-type: text/xml');
echo $output->asXML();