<?php

use App\Factory\ItemsConfigNUTFactory;
use App\Repository\ItemsConfigRepository;


$itemsRepository = new ItemsConfigRepository();
$items = $itemsRepository->findAll();

foreach ($items as $item) {
    $itemNUT = ItemsConfigNUTFactory::create($item);
    echo $itemNUT;
}