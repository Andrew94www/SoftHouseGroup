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

     return $this->config->getLogger(new $this->config->getTypeLogger());

    }
    public function sendByLogger(string $message, string $loggerType){
      
    }

    public function getType(){

       return $this->config->getTypeLogger();

    }
    public function setType(string $type){
     
       return  $this->config->setTypeLogger($type);
    }
    public function  getLogger( TypeLogger $type){
          return new $type;
    }
}