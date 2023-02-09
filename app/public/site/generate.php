<?php
include __DIR__ . "/../../Autoloader.php";
if(!isset($_GET['type'])) {
    echo "Missing type in get";
    die();
}
switch ($_GET['type']) {
    case "creatures":
        $include = "generate/creatures.php";
        break;
    case "items":
        $include = "generate/items.php";
        break;
    default:
        $include = "site/404.php";
}

include __DIR__ . "/../" . $include;
