<?php

require_once("../classes/bio/Bio.php");
require_once("../classes/gear/Gear.php");

class Player {

    private $id;
    private $firstName;
    private $surname;
    private $bioId;
    private $gearId;
    private Bio $bio;
    private Gear $gear;
    
    public function __construct1(){}
    
    public function __construct2(
        $firstName,
        $surname,
        $bioId,
        $gearId
    )
    {
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->bioId = $bioId;
        $this->gearId = $gearId;
    }

    public function __construct3(
        $firstName,
        $surname,
        Gear $gear,
        Bio $bio
    ){
        $this->firstName = $firstName;
        $this->surname = $surname;
        $this->bio = $bio;
        $this->gear = $gear;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of bioId
     */ 
    public function getBioId()
    {
        return $this->bioId;
    }

    /**
     * Set the value of bioId
     *
     * @return  self
     */ 
    public function setBioId($bioId)
    {
        $this->bioId = $bioId;

        return $this;
    }

    /**
     * Get the value of gearId
     */ 
    public function getGearId()
    {
        return $this->gearId;
    }

    /**
     * Set the value of gearId
     *
     * @return  self
     */ 
    public function setGearId($gearId)
    {
        $this->gearId = $gearId;

        return $this;
    }
}

?>