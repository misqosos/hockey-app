
<?php

require_once("../classes/gear/Gear.php");
require_once("../db/database.class.php");

class GearService {

    public function __construct() {}

    function mapToEntity ($gear) : Gear {
        $gearEntity = new Gear();
        $gearEntity->setHelmet($gear["helmet"]);
        $gearEntity->setSkates($gear["skates"]);
        $gearEntity->setStick($gear["stick"]);
        $gearEntity->setGloves($gear["gloves"]);
        $gearEntity->setShinPads($gear["shinPads"]);
        $gearEntity->setElbowPads($gear["elbowPads"]);
        $gearEntity->setMouthGuard($gear["mouthGuard"]);
        $gearEntity->setShoulderPads($gear["shoulderPads"]);
        $gearEntity->setNeckGuard($gear["neckGuard"]);
        $gearEntity->setJersey($gear["jersey"]);
        $gearEntity->setPants($gear["pants"]);
        $gearEntity->setJockstrap($gear["jockstrap"]);
        $gear["ownerId"] == 0 || $gear["ownerId"] == "" ? $gearEntity->setOwnerId(null) : $gearEntity->setOwnerId($gear["ownerId"]);
        return $gearEntity;
    }

    function mapToObject (Gear $gearEntity) : Gear {
        $gear = new Gear();
        $gear->setHelmet($gearEntity->getHelmet());
        $gear->setSkates($gearEntity->getSkates());
        $gear->setStick($gearEntity->getStick());
        $gear->setGloves($gearEntity->getGloves());
        $gear->setShinPads($gearEntity->getShinPads());
        $gear->setElbowPads($gearEntity->getElbowPads());
        $gear->setMouthGuard($gearEntity->getMouthGuard());
        $gear->setShoulderPads($gearEntity->getShoulderPads());
        $gear->setNeckGuard($gearEntity->getNeckGuard());
        $gear->setJersey($gearEntity->getJersey());
        $gear->setPants($gearEntity->getPants());
        $gear->setJockstrap($gearEntity->getJockstrap());
        $gear->setOwnerId($gearEntity->getOwnerId());
        return $gear;
    }
    
    function addGear(Gear $gear) {
        $sql = 'INSERT INTO gear (
            helmet,
            skates,
            stick,
            gloves,
            shinPads,
            elbowPads,
            mouthGuard,
            shoulderPads,
            neckGuard,
            jersey,
            pants,
            jockstrap,
            ownerId) 
                VALUES 
                (
                    :helmet,
                    :skates,
                    :stick,
                    :gloves,
                    :shinPads,
                    :elbowPads,
                    :mouthGuard,
                    :shoulderPads,
                    :neckGuard,
                    :jersey,
                    :pants,
                    :jockstrap,
                    :ownerId
                );';
        
        $stmt = DbConnection::getDatabaseConnection()->prepare($sql); 

        $stmt->bindValue(':helmet', $gear->getHelmet());
        $stmt->bindValue(':skates', $gear->getSkates());
        $stmt->bindValue(':stick', $gear->getStick());
        $stmt->bindValue(':gloves', $gear->getGloves());
        $stmt->bindValue(':shinPads', $gear->getShinPads());
        $stmt->bindValue(':elbowPads', $gear->getElbowPads());
        $stmt->bindValue(':mouthGuard', $gear->getMouthGuard());
        $stmt->bindValue(':shoulderPads', $gear->getShoulderPads());
        $stmt->bindValue(':neckGuard', $gear->getNeckGuard());
        $stmt->bindValue(':jersey', $gear->getJersey());
        $stmt->bindValue(':pants', $gear->getPants());
        $stmt->bindValue(':jockstrap', $gear->getJockstrap());
        $stmt->bindValue(':ownerId', $gear->getOwnerId());

        return $stmt->execute();
    }
    
    function getLastRecord(){
        $sql = 'SELECT * FROM gear ORDER BY id DESC LIMIT 1';
        
        $stmt = DbConnection::getDatabaseConnection()->prepare($sql);
    
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $row;
    }
    
    function getLastRecordId(){
        $sql = 'SELECT id FROM gear ORDER BY id DESC LIMIT 1';
        
        $stmt = DbConnection::getDatabaseConnection()->prepare($sql);
    
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $row["id"];
    }
}

?>