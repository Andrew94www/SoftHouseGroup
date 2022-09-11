<?php
namespace Config;

use Model\Factory\DB;
use Model\Factory\All;
use Model\Factory\Email;
use Model\Factory\File;
class Config {
    private $email ='admin@admin';
    private $typeLogger='File';
    public function getEmail(){
        return $this->email;
     
    }
    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getTypeLogger(){
       return $this->typeLogger;
    }
    public function setTypeLogger($typeLogger){
        $this->typeLogger=$typeLogger;
        switch ($this->typeLogger) {
            case 'DB':
                return new DB();
            case 'Email':
                return new Email();
            case 'File';
                return new File();
            case 'All';
                return new All();
        }
        
    }
         
    
}