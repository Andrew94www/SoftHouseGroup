<?php

namespace Model\Factory;

class LoggerEmail implements TypeLoggerInterface
{

    public function send(string $message)
    {
        echo $message . ' ', 'was sent wia email';
    }
}
