<?php
namespace Model;
interface LoggerInterface
{

 public function send(string $message);

 public function sendByLogger(string $message, string $loggerType);

 public function getType();

 public function setType(string $type);
}