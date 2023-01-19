<?php

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
// inside damage = ['meele']['meeleweapon']['ranged']['magic']
// ex $damage['meele']
$damage = $_POST['damage'];

//drop
// inside $drop array = [1][2][3][4][5] and ['instance'] ['min'] ['max'] ['chance']
// $drop[1]['instance'] example
$drop = $_POST['drop'];

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

//visual
// inside visual ['bodymodel']['bodytexture']['headmodel']['headtexture']
// ex $visual['bodymodel']
$visual = $_POST['visual'];

print_r($_POST);
