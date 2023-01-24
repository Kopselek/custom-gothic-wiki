<?php
include __DIR__ . "/../../Autoloader.php";
use App\Repository\CreatureConfigRepository;

$creaturesRepository = new CreatureConfigRepository();
print_r($creaturesRepository->findAll());

