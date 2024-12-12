<?php

class Bio {

    private $id;
    private $agility;
    private $stamina;
    private $speed;
    private $height;
    private $weight;
    private $side;
    private $position;
    private $sponsor;
    private $ownerId;

    public function __construct1 (){}

    public function __construct2 (
        $agility,
        $stamina,
        $speed,
        $height,
        $weight,
        $side,
        $position,
        $sponsor,
        $ownerId
    ) {
        $this->agility = $agility;
        $this->stamina = $stamina;
        $this->speed = $speed;
        $this->height = $height;
        $this->weight = $weight;
        $this->side = $side;
        $this->position = $position;
        $this->sponsor = $sponsor;
        $this->ownerId = $ownerId;
    }
    
    public function getAgility()
    {
        return $this->agility;
    }
    
    public function setAgility($agility)
    {
        $this->agility = $agility;

        return $this;
    }
    
    public function getStamina()
    {
        return $this->stamina;
    }
    
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;

        return $this;
    }
    
    public function getSpeed()
    {
        return $this->speed;
    }
    
    public function setSpeed($speed)
    {
        $this->speed = $speed;

        return $this;
    }
    
    public function getHeight()
    {
        return $this->height;
    }
    
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }
    
    public function getWeight()
    {
        return $this->weight;
    }
    
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }
    
    public function getSide()
    {
        return $this->side;
    }
    
    public function setSide($side)
    {
        $this->side = $side;

        return $this;
    }
    
    public function getPosition()
    {
        return $this->position;
    }
    
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }
    
    public function getSponsor()
    {
        return $this->sponsor;
    }

    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;

        return $this;
    }

    /**
     * Get the value of ownerId
     */ 
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     * Set the value of ownerId
     *
     * @return  self
     */ 
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;

        return $this;
    }
}

?>