<?php

include __DIR__ . "/../../Autoloader.php";

use App\Manager\ItemsManager;
use App\Model\ItemsConfig;

$type = $_POST['type'];
$mode = $_POST['mode'];
$instance = $_POST['instance'];
$texture = $_POST['texture'];
$level = (int)$_POST['level'];
$price = (int)$_POST['price'];
$crystalSlots = (int)$_POST['crystalslots'];
$strength = (int)$_POST['strength'];
$dexterity = (int)$_POST['dexterity'];
$inteligence = (int)$_POST['inteligence'];
$equipLevel = (int)$_POST['equiplevel'];

$damageIncisors = (int)$_POST['damage_incisors'];
$damageHammer = (int)$_POST['damage_hammer'];
$damageStab =   (int)$_POST['damage_stab'];
$damageElement = (int)$_POST['damage_element'];
$damageMagic = (int)$_POST['damage_magic'];

$effectMode = (int)$_POST['effect_mode'];
$effectType = (int)$_POST['effect_type'];
$effectValue = (int)$_POST['effect_value'];
$effectTime = (int)$_POST['effect_time'];

$bonusStrengthMode = (int)$_POST['bonusstrength_mode'];
$bonusStrengthValue = (int)$_POST['bonusstrength_value'];
$bonusDexterityMode = (int)$_POST['bonusdexterity_mode'];
$bonusDexterityValue = (int)$_POST['bonusdexterity_value'];
$bonusInteligenceMode = (int)$_POST['bonusinteligence_mode'];
$bonusInteligenceValue = (int)$_POST['bonusinteligence_value'];
$damageMonsterBonusMode = (int)$_POST['damagemonsterbonus_mode'];
$damageMonsterBonusValue = (int)$_POST['damagemonsterbonus_value'];
$damageMonsterBonusType = $_POST['damagemonsterbonus_type'];

$namePl = $_POST['name_pl'];
$nameEng = $_POST['name_eng'];

$model = new ItemsConfig();
$model->setType($type);
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
