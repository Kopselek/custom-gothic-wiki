<?php
include __DIR__ . "/../../Autoloader.php";
use App\Repository\ItemsConfigRepository;

$itemsRepository = new ItemsConfigRepository();
$items = $itemsRepository->findAll();


foreach($items as $item) {
   echo $item;
}
