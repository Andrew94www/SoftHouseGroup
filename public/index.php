<?php 
require __DIR__.'/vendor/autoload.php';
use  Model\Logger;
use  Config\Config;
use  Model\Factory\Db;
use  Model\Factory\File;
use  Model\Factory\Email;
$v = new Logger();
$v->send('xjxjxjjxjxjx');
 class Controller{
    /**
* Sends a log message to the default logger.
*/
public function log()
{
}
/**
* Sends a log message to a special logger.
*
* @param string $type
*/
public function logTo(string $type)
{
}
/**
* Sends a log message to all loggers.
*/
public function logToAll()
{
}
 }
