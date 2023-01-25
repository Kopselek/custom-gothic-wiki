<?php

include __DIR__ . "/../../Autoloader.php";

use App\Manager\ItemsManager;
use App\Model\ItemsConfig;

$mode = $_POST['mode'];
$type = $_POST['type'];
$instance = $_POST['instance'];
$texture = $_POST['texture'];
$level = $_POST['level'];
$price = $_POST['price'];
$crystalSlots = $_POST['crystalslots'];
$strength = $_POST['strength'];
$dexterity = $_POST['dexterity'];
$inteligence = $_POST['inteligence'];
$equipLevel = $_POST['equiplevel'];

$damageIncisors = $_POST['damage_incisors'];
$damageHammer = $_POST['damage_hammer'];
$damageStab =   $_POST['damage_stab'];
$damageElement = $_POST['damage_element'];
$damageMagic = $_POST['damage_magic'];

$effectMode = $_POST['effect_mode'];
$effectType = $_POST['effect_type'];
$effectValue = $_POST['effect_value'];
$effectTime = $_POST['effect_time'];

$bonusStrengthMode = $_POST['bonusstrength_mode'];
$bonusStrengthValue = $_POST['bonusstregth_value'];
$bonusDexterityMode = $_POST['bonusdexterity_mode'];
$bonusDexterityValue = $_POST['bonusdexterity_value'];
$bonusInteligenceMode = $_POST['bonusinteligence_mode'];
$bonusInteligenceValue = $_POST['bonusinteligence_value'];
$damageMonsterBonusMode = $_POST['damagemonsterbonus_mode'];
$damageMonsterBonusValue = $_POST['damagemonsterbonus_value'];
$damageMonsterBonusType = $_POST['damagemonsterbonus_type'];

$namePl = $_POST['name_pl'];
$nameEng = $_POST['name_eng'];

$model = new ItemsConfig();

$itemsManager = new ItemsManager();
$itemsManager->create($model);
