<?php
include __DIR__ . "/../Autoloader.php";
use GothicServer\Repository\CreatureConfigRepository;

$creatureConfigRepository = new CreatureConfigRepository();
$creatureConfig = $creatureConfigRepository->findAll();

print_r($creatureConfig);