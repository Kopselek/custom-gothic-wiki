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
$model->setMode($mode);
$model->setInstance($instance);
$model->setTexture($texture);
$model->setLevel($level);
$model->setPrice($price);
$model->setCrystalSlots($crystalSlots);
$model->setStregth($strength);
$model->setDexterity($dexterity);
$model->setInteligence($inteligence);
$model->setEquipLevel($equipLevel);

$model->setDamageIncisors($damageIncisors);
$model->setDamageHammer($damageHammer);
$model->setDamageStab($damageStab);
$model->setDamageElement($damageElement);
$model->setDamageMagic($damageMagic);

$model->setEffectMode($effectMode);
$model->setEffectType($effectType);
$model->setEffectValue($effectValue);
$model->setEffectTime($effectTime);

$model->setBonusStrengthMode($bonusStrengthMode);
$model->setBonusStrengthValue($bonusStrengthValue);

$model->setBonusDexterityMode($bonusDexterityMode);
$model->setBonusDexterityValue($bonusDexterityValue);

$model->setBonusInteligenceMode($bonusInteligenceMode);
$model->setBonusInteligenceValue($bonusInteligenceValue);

$model->setDamageMonsterBonusMode($damageMonsterBonusMode);
$model->setDamageMonsterBonusType($damageMonsterBonusType);
$model->setDamageMonsterBonusValue($damageMonsterBonusValue);

$model->setNamePl($namePl);
$model->setNameEng($nameEng);

$itemsManager = new ItemsManager();
$itemsManager->create($model);
