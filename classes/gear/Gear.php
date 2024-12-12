
<?php

class Gear {
    private $id;
    private $helmet;
    private $skates;
    private $stick;
    private $gloves;
    private $shinPads;
    private $elbowPads;
    private $mouthGuard;
    private $shoulderPads;
    private $neckGuard;
    private $jersey;
    private $pants;
    private $jockstrap;
    private $ownerId;

    public function __construct1 (){}

    public function __construct2 ( 
        $helmet,
        $skates,
        $stick,
        $gloves,
        $shinPads,
        $elbowPads,
        $mouthGuard,
        $shoulderPads,
        $neckGuard,
        $jersey,
        $pants,
        $jockstrap,
        $ownerId
        )
    {
        $this->id = $id;
        $this->helmet = $helmet;
        $this->skates = $skates;
        $this->stick = $stick;
        $this->gloves = $gloves;
        $this->shinPads = $shinPads;
        $this->elbowPads = $elbowPads;
        $this->mouthGuard = $mouthGuard;
        $this->shoulderPads = $shoulderPads;
        $this->neckGuard = $neckGuard;
        $this->jersey = $jersey;
        $this->pants = $pants;
        $this->jockstrap = $jockstrap;
        $this->ownerId = $ownerId;
    }

    

    /**
     * Get the value of helmet
     */ 
    public function getHelmet()
    {
        return $this->helmet;
    }

    /**
     * Set the value of helmet
     *
     * @return  self
     */ 
    public function setHelmet($helmet)
    {
        $this->helmet = $helmet;

        return $this;
    }

    /**
     * Get the value of skates
     */ 
    public function getSkates()
    {
        return $this->skates;
    }

    /**
     * Set the value of skates
     *
     * @return  self
     */ 
    public function setSkates($skates)
    {
        $this->skates = $skates;

        return $this;
    }

    /**
     * Get the value of stick
     */ 
    public function getStick()
    {
        return $this->stick;
    }

    /**
     * Set the value of stick
     *
     * @return  self
     */ 
    public function setStick($stick)
    {
        $this->stick = $stick;

        return $this;
    }

    /**
     * Get the value of gloves
     */ 
    public function getGloves()
    {
        return $this->gloves;
    }

    /**
     * Set the value of gloves
     *
     * @return  self
     */ 
    public function setGloves($gloves)
    {
        $this->gloves = $gloves;

        return $this;
    }

    /**
     * Get the value of shinPads
     */ 
    public function getShinPads()
    {
        return $this->shinPads;
    }

    /**
     * Set the value of shinPads
     *
     * @return  self
     */ 
    public function setShinPads($shinPads)
    {
        $this->shinPads = $shinPads;

        return $this;
    }

    /**
     * Get the value of elbowPads
     */ 
    public function getElbowPads()
    {
        return $this->elbowPads;
    }

    /**
     * Set the value of elbowPads
     *
     * @return  self
     */ 
    public function setElbowPads($elbowPads)
    {
        $this->elbowPads = $elbowPads;

        return $this;
    }

    /**
     * Get the value of mouthGuard
     */ 
    public function getMouthGuard()
    {
        return $this->mouthGuard;
    }

    /**
     * Set the value of mouthGuard
     *
     * @return  self
     */ 
    public function setMouthGuard($mouthGuard)
    {
        $this->mouthGuard = $mouthGuard;

        return $this;
    }

    /**
     * Get the value of shoulderPads
     */ 
    public function getShoulderPads()
    {
        return $this->shoulderPads;
    }

    /**
     * Set the value of shoulderPads
     *
     * @return  self
     */ 
    public function setShoulderPads($shoulderPads)
    {
        $this->shoulderPads = $shoulderPads;

        return $this;
    }

    /**
     * Get the value of neckGuard
     */ 
    public function getNeckGuard()
    {
        return $this->neckGuard;
    }

    /**
     * Set the value of neckGuard
     *
     * @return  self
     */ 
    public function setNeckGuard($neckGuard)
    {
        $this->neckGuard = $neckGuard;

        return $this;
    }

    /**
     * Get the value of jersey
     */ 
    public function getJersey()
    {
        return $this->jersey;
    }

    /**
     * Set the value of jersey
     *
     * @return  self
     */ 
    public function setJersey($jersey)
    {
        $this->jersey = $jersey;

        return $this;
    }

    /**
     * Get the value of pants
     */ 
    public function getPants()
    {
        return $this->pants;
    }

    /**
     * Set the value of pants
     *
     * @return  self
     */ 
    public function setPants($pants)
    {
        $this->pants = $pants;

        return $this;
    }

    /**
     * Get the value of jockstrap
     */ 
    public function getJockstrap()
    {
        return $this->jockstrap;
    }

    /**
     * Set the value of jockstrap
     *
     * @return  self
     */ 
    public function setJockstrap($jockstrap)
    {
        $this->jockstrap = $jockstrap;

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