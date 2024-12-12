DROP DATABASE IF EXISTS icehockey;
CREATE DATABASE iF NOT EXISTS icehockey;

CREATE TABLE IF NOT EXISTS icehockey.bio(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `agility` INT(10),
  `stamina` INT(10),
  `speed` INT(10),
  `height` INT(10),
  `weight` INT(10),
  `side` VARCHAR(200),
  `position` VARCHAR(200),
  `sponsor` VARCHAR(200),
  ownerId INT(10) UNSIGNED,
  PRIMARY KEY(`id`)
);

CREATE TABLE IF NOT EXISTS icehockey.gear(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  helmet VARCHAR(20),
  skates VARCHAR(20),
  stick VARCHAR(20),
  gloves VARCHAR(20),
  shinPads VARCHAR(20),
  elbowPads VARCHAR(20),
  mouthGuard VARCHAR(20),
  shoulderPads VARCHAR(20),
  neckGuard VARCHAR(20),
  jersey VARCHAR(20),
  pants VARCHAR(20),
  jockstrap VARCHAR(20),
  ownerId INT(10) UNSIGNED,
  PRIMARY KEY(`id`)
);

CREATE TABLE IF NOT EXISTS icehockey.player(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` VARCHAR(20),
  `surname` VARCHAR(20),
  `bioId` INT(10) UNSIGNED,
  `gearId` INT(10) UNSIGNED,
  PRIMARY KEY(`id`)
);

ALTER TABLE icehockey.gear
ADD FOREIGN KEY IF NOT EXISTS (ownerId) REFERENCES icehockey.player(id) ON UPDATE CASCADE;

ALTER TABLE icehockey.bio
ADD FOREIGN KEY IF NOT EXISTS (ownerId) REFERENCES icehockey.player(id) ON UPDATE CASCADE;