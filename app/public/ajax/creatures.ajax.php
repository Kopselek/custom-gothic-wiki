<?php

include __DIR__ . "/../../Autoloader.php";

use App\Manager\CreaturesManager;
use App\Model\CreaturesConfig;

$index = $_POST['index'];
$level = (int)$_POST['level'];

//name
$name = $_POST['name'];

$instance = $_POST['instance'];
$type = $_POST['type'];
$health = (int)$_POST['health'];
$mana = (int)$_POST['mana'];
$strength = (int)$_POST['strength'];
$magicLevel = (int)$_POST['magiclevel'];
$dexterity = (int)$_POST['dexterity'];
$experience = (int)$_POST['experience'];

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

$minDistance = (int)$_POST['mindistance'];
$maxDistance = (int)$_POST['maxdistance'];
$bonusDistance = (int)$_POST['bonusdistance'];
$respawn = (int)$_POST['respawn'];

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
$aggressive = False; //php jest spierdolony nie wiem czemu tak trzeba
if(strtoupper($_POST["aggressive"]) == "TRUE") $aggressive = True;
$model->setAggressive($aggressive);
$model->setHealth($health);
$model->setMana($mana);
$model->setStrength($strength);
$model->setMagiclevel($magicLevel);
$model->setDexterity($dexterity);
$model->setExperience($experience);

$model->setDamageMelee((int)$damage['melee']);
$model->setDamageMeleeweapon((int)$damage['meleeweapon']);
$model->setDamageRangedweapon((int)$damage['ranged']);
$model->setDamageMagic((int)$damage['magic']);

$model->setProtectionEdge((int)$protection['edge']);
$model->setProtectionBlunt((int)$protection['blunt']);
$model->setProtectionPoint((int)$protection['point']);
$model->setProtectionFire((int)$protection['fire']);
$model->setProtectionMagic((int)$protection['magic']);

$model->setMindistance($minDistance);
$model->setMaxdistance($maxDistance);
$model->setBonusdistance($bonusDistance);
$model->setRespawn($respawn);

$model->setWeaponMeleeweapon((int)$weapon['meleeweapon']);
$model->setWeaponArmor((int)$weapon['armor']);
$model->setWeaponShield((int)$weapon['shield']);
$model->setWeaponMagic((int)$weapon['magic']);

$creaturesManager = new CreaturesManager();
$creaturesManager->create($model);