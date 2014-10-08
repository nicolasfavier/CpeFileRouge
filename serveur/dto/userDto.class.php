<?php


    class UserDto{
        // property declaration
        private $email;
       
        public function __construct (User $user){
          $this->email = $user->getEmail();
        }        

        // method declaration
        public function getEmail() {
            return $this->email;
        } 
    }
?>