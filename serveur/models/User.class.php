<?php
class User
{
    // property declaration
    private $email;
    private $password;

    // method declaration
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setEmail($email) {
         $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }            
}
?>