<?php
include __DIR__ . "/../Autoloader.php";

$site = $_GET["site"] ?? "default";

$sitesFiles = array_diff(scandir("site", SCANDIR_SORT_DESCENDING), ['..', '.']);
$sites = [];
$sites[] = "default";
foreach($sitesFiles as $siteFile) {
    $sites[] = str_replace(".php", "", $siteFile);
}

if(!in_array($site, $sites)) $site = "404";

include_once(sprintf("site/%s.php", $site));