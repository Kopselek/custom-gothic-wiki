<?php

include __DIR__ . "/../Autoloader.php";

use App\Manager\CreaturesManager;
use App\Model\CreaturesConfig;

$index = $_POST['index'];
$level = $_POST['level'];

//name
$name = $_POST['name'];

$instance = $_POST['instance'];
$type = $_POST['type'];
$health = $_POST['health'];
$mana = $_POST['mana'];
$strength = $_POST['strength'];
$magicLevel = $_POST['magiclevel'];
$dexterity = $_POST['dexterity'];
$experience = $_POST['experience'];

//damage
// inside damage = ['melee']['meleeweapon']['ranged']['magic']
// ex $damage['melee']
$damage = $_POST['damage'];

//drop
// inside $drop array = [1][2][3][4][5] and ['instance'] ['min'] ['max'] ['chance']
// $drop[1]['instance'] example
//$drop = $_POST['drop'];

//protection
//inside protection array = [edge][blunt][point][fire][magic]
$protection = $_POST['protection'];

$minDistance = $_POST['mindistance'];
$maxDistance = $_POST['maxdistance'];
$bonusDistance = $_POST['bonusdistance'];
$respawn = $_POST['respawn'];

//weapon
// inside weapon ['meeleweapon']['armor']['shield']['magic']
// ex $weapon['meeleweapon']
$weapon = $_POST['weapon'];

$model = new CreaturesConfig();
$model->setIndex($index);
$model->setLevel($level);

$model->setNamePolish($name['polish']);
$model->setNameEnglish($name['english']);

$model->setInstance($instance);
$model->setType($type);
$model->setHealth($health);
$model->setMana($mana);
$model->setStrength($strength);
$model->setMagiclevel($magicLevel);
$model->setDexterity($dexterity);
$model->setExperience($experience);

$model->setDamageMelee($damage['melee']);
$model->setDamageMeleeweapon($damage['meleeweapon']);
$model->setDamageRangedweapon($damage['ranged']);
$model->setDamageMagic($damage['magic']);

$model->setProtectionEdge($protection['edge']);
$model->setProtectionBlunt($protection['blunt']);
$model->setProtectionPoint($protection['point']);
$model->setProtectionFire($protection['fire']);
$model->setProtectionMagic($protection['magic']);

$model->setMindistance($minDistance);
$model->setMaxdistance($maxDistance);
$model->setBonusdistance($bonusDistance);
$model->setRespawn($respawn);

$model->setWeaponMeleeweapon($weapon['meleeweapon']);
$model->setWeaponArmor($weapon['armor']);
$model->setWeaponShield($weapon['shield']);
$model->setWeaponMagic($weapon['magic']);

$creaturesManager = new CreaturesManager();
$creaturesManager->create($model);