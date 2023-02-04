CREATE TABLE `creature_config`
(
    `id`                  INT AUTO_INCREMENT,
    `index`               TEXT,
    `level`               INT,
    `name_polish`         TEXT,
    `name_english`        TEXT,
    `instance`            TEXT,
    `type`                TEXT,
    `aggressive`          TINYINT(1),
    `health`              INT,
    `mana`                INT,
    `strength`            INT,
    `magiclevel`          INT,
    `dexterity`           INT,
    `experience`          INT,
    `damage_melee`        INT,
    `damage_meleeweapon`  INT,
    `damage_rangedweapon` INT,
    `damage_magic`        INT,
    `drop`                TEXT,
    `protection_edge`     INT,
    `protection_blunt`    INT,
    `protection_point`    INT,
    `protection_fire`     INT,
    `protection_magic`    INT,
    `mindistance`         INT,
    `maxdistance`         INT,
    `bonusdistance`       INT,
    `respawn`             INT,
    `weapon_meleeweapon`  TEXT,
    `weapon_armor`        TEXT,
    `weapon_shield`       TEXT,
    `weapon_magic`        TEXT,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE utf8mb4_unicode_520_ci;

CREATE TABLE `items_config`
(
    `id`                            INT AUTO_INCREMENT,
    `type`                          TEXT,
    `mode`                          TEXT,
    `instance`                      TEXT,
    `texture`                       TEXT,
    `level`                         INT,
    `price`                         INT,
    `crystalslots`                  INT,
    `strength`                      INT,
    `dexterity`                     INT,
    `inteligence`                   INT,
    `equiplevel`                    INT,
    `damage_incisors`               INT,
    `damage_hammer`                 INT,
    `damage_stab`                   INT,
    `damage_element`                INT,
    `damage_magic`                  INT,
    `effect_mode`                   INT,
    `effect_type`                   TEXT,
    `effect_value`                  INT,
    `effect_time`                   INT,
    `bonusstrength_mode`            INT,
    `bonusstrength_value`           INT,
    `bonusdexterity_mode`           INT,
    `bonusdexterity_value`          INT,
    `bonusinteligence_mode`         INT,
    `bonusinteligence_value`        INT,
    `damagemonsterbonus_mode`       INT,
    `damagemonsterbonus_value`      INT,
    `damagemonsterbonus_type`       TEXT,
    `name_pl`                       TEXT,
    `name_eng`                      TEXT,
    PRIMARY KEY (`id`)

) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE utf8mb4_unicode_520_ci;