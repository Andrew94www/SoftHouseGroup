<?php
namespace Model;
use Config\Config;
use Model\Factory\TypeLogger ;
class Logger implements LoggerInterface{
    private $config;
    public function __construct()
	{ 
	 $this->config =new Config();
   
	}
    public function send(string $message){
        $Logger = $this->helperGetLogger( $this->config->setTypeLogger($this->config->getTypeLogger()));
        $Logger->getLogger()->send($message);
    }
    public function sendByLogger(string $message, string $loggerType){
        $Logger = $this->helperGetLogger( $this->config->setTypeLogger($loggerType));
        $Logger->getLogger()->send($message);
    }

    public function getType(){

       return $this->config->getTypeLogger();

    }
    public function setType(string $type){
     
    $this->config->setTypeLogger($type);
     
    }
     private function  helperGetLogger( TypeLogger $type){
          return new $type;
    }
}