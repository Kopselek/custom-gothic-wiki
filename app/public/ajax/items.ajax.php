<?php

include __DIR__ . "/../../Autoloader.php";

use App\Manager\ItemsManager;
use App\Model\ItemsConfig;

$type = $_POST['type'];

$model = new ItemsConfig();

$itemsManager = new ItemsManager();
$itemsManager->create($model);
