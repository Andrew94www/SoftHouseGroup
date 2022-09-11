<?php
require __DIR__ . '/vendor/autoload.php';

use  Model\Logger;

class Controller
{
    /**
     * Sends a log message to the default logger.
     */
    public function log()
    {
        $Logger = new Logger();
        $Logger->send('Error message');
    }
    /**
     * Sends a log message to a special logger.
     *
     * @param string $type
     */
    public function logTo(string $type)
    {
        $Logger = new Logger();
        $Logger->sendByLogger('Error message', $type);
    }
    /**
     * Sends a log message to all loggers.
     */
    public function logToAll()
    {
        $Logger = new Logger();
        $Logger->sendByLogger('Error message', 'All');
    }
}
