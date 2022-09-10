<?php
namespace Config;
class Config {
    private $email ='admin@admin';
    private $typeLogger ='File';
    public function getEmail(){
        return $this->email;
     
    }
    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getTypeLogger(){
       return $this->typeLogger;
    }
    public function setTypeLogger(string $typeLogger){
        $this->typeLogger =$typeLogger;
    }
         
    
}