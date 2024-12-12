<?php

require_once("../classes/bio/Bio.php");
require_once("../db/database.class.php");

class BioService {

    public function __construct() {}

    function mapToEntity ($bio) : Bio {
        $bioEntity = new Bio();
        $bioEntity->setAgility($bio["agility"]);
        $bioEntity->setStamina($bio["stamina"]);
        $bioEntity->setSpeed($bio["speed"]);
        $bioEntity->setHeight($bio["height"]);
        $bioEntity->setWeight($bio["weight"]);
        $bioEntity->setSide($bio["side"]);
        $bioEntity->setPosition($bio["position"]);
        $bioEntity->setSponsor($bio["sponsor"]);
        $bioEntity->setOwnerId($bio["ownerId"]);
        return $bioEntity;
    }

    function mapToObject (Bio $bioEntity) : Bio {
        $bio = new Bio();
        $bio->setAgility($bioEntity->getAgility());
        $bio->setStamina($bioEntity->getStamina());
        $bio->setSpeed($bioEntity->getSpeed());
        $bio->setHeight($bioEntity->getHeight());
        $bio->setWeight($bioEntity->getWeight());
        $bio->setSide($bioEntity->getSide());
        $bio->setPosition($bioEntity->getPosition());
        $bio->setSponsor($bioEntity->getSponsor());
        $bio->setOwnerId($bioEntity->getOwnerId());
        return $bio;
    }
    
    function addBio(Bio $bio) {
        $sql = 'INSERT INTO bio (
            agility, 
            stamina, 
            speed, 
            height, 
            weight, 
            side, 
            position, 
            sponsor,
            ownerId) 
                VALUES 
                (
                    :agility, 
                    :stamina, 
                    :speed, 
                    :height, 
                    :weight, 
                    :side, 
                    :position, 
                    :sponsor,
                    :ownerId
                )';
        
        $stmt = DbConnection::getDatabaseConnection()->prepare($sql); 
        
        $stmt->bindValue(':agility', $bio->getAgility());
        $stmt->bindValue(':stamina', $bio->getStamina());
        $stmt->bindValue(':speed', $bio->getSpeed());
        $stmt->bindValue(':height', $bio->getHeight());
        $stmt->bindValue(':weight', $bio->getWeight());
        $stmt->bindValue(':side', $bio->getSide());
        $stmt->bindValue(':position', $bio->getPosition());
        $stmt->bindValue(':sponsor', $bio->getSponsor());
        $stmt->bindValue(':ownerId', $bio->getOwnerId());
        
        return $stmt->execute();
    }
    
    function getLastRecord(){
        $sql = 'SELECT * FROM bio ORDER BY id DESC LIMIT 1';
        
        $stmt = DbConnection::getDatabaseConnection()->prepare($sql);
    
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $row;
    }
    
    function getLastRecordId(){
        $sql = 'SELECT id FROM bio ORDER BY id DESC LIMIT 1';
        
        $stmt = DbConnection::getDatabaseConnection()->prepare($sql);
    
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $row["id"];
    }
}

?>