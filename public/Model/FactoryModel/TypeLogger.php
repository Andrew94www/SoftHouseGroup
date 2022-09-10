<?php
namespace Model\Factory;
abstract class TypeLogger{
    abstract public function getLogger():TypeLoggerInterface;
    public function logger($message)
    {
        $logger =$this->getLogger();
        $logger->send($message);
    }
} 