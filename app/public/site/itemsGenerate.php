<?php
include __DIR__ . "/../../Autoloader.php";
use App\Repository\ItemsConfigRepository;

$itemsRepository = new ItemsConfigRepository();
$items = $itemsRepository->findAll();

print_r($items);