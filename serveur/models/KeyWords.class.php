<?php
class KeyWords{
    // property declaration
    private $name;
    private $idS;

    // method declaration
    public function getName() {
        return $this->name;
    }

    public function getIdS() {
        return $this->idS;
    }

    public function setName($name) {
         $this->name = $name;
    }

    public function setIdS($idS) {
        $this->idS = $idS;
    }            
}
?>