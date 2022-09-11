<?php

namespace Model\Factory;

class LoggerDb implements TypeLoggerInterface
{

    public function send(string $message)
    {
        echo $message . ' ', 'was sent wia db';
    }
}
