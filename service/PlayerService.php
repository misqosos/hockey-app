<?php

require_once("../classes/player/Player.php");
require_once("../db/database.class.php");

class PlayerService {

    public function __construct() {}

    function mapToEntity ($player) : Player {
        $playerEntity = new Player();
        $playerEntity->setFirstName($player["firstName"]);
        $playerEntity->setSurname($player["surname"]);
        $playerEntity->setBioId($player["bioId"]);
        $playerEntity->setGearId($player["gearId"]);
        return $playerEntity;
    }

    function mapToObject (Player $playerEntity) : Player {
        $player = new Player();
        $player->setFirstName($playerEntity->getFirstName());
        $player->setSurname($playerEntity->getSurname());
        $player->setBioId($playerEntity->getBioId());
        $player->setGearId($playerEntity->getGearId());
        return $player;
    }
    
    function addPlayer(Player $player) {
        $sql = 'INSERT INTO player (
            firstName,
            surname,
            bioId,
            gearId
            ) 
                VALUES 
                (
                    :firstName,
                    :surname,
                    :bioId,
                    :gearId
                )';
        
        $stmt = DbConnection::getDatabaseConnection()->prepare($sql); 
        
        $stmt->bindValue(':firstName', $player->getFirstName());
        $stmt->bindValue(':surname', $player->getSurname());
        $stmt->bindValue(':bioId', $player->getBioId());
        $stmt->bindValue(':gearId', $player->getGearId());
        
        return $stmt->execute();
    }
    
    function getLastRecord(){
        $sql = 'SELECT * FROM player ORDER BY id DESC LIMIT 1';
        
        $stmt = DbConnection::getDatabaseConnection()->prepare($sql);
    
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $row;
    }

    function updateRecord($id, $field, $value){
        $sql = 'UPDATE icehockey.player SET '.$field.' = '.$value.' WHERE id = :id';
        
        $stmt = DbConnection::getDatabaseConnection()->prepare($sql);

        $stmt->bindValue(':id', $id);
    
        return $stmt->execute();
    }
    
    function getLastRecordId(){
        $sql = 'SELECT id FROM player ORDER BY id DESC LIMIT 1';
        
        $stmt = DbConnection::getDatabaseConnection()->prepare($sql);
    
        $stmt->execute();
    
        $row = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $row["id"];
    }
}

?>