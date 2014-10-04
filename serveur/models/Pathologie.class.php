<?php
class Pathologie{
    // property declaration
    private $type;
    private $description;
    private $meridien;

    // method declaration
    public function getType() {
        return $this->type;
    }

    public function setType($type) {
         $this->type = $type;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }   

    public function getMeridien() {
        return $this->meridien;
    }

    public function setMeridien($meridien) {
        $this->meridien = $meridien;
    } 
}
?>