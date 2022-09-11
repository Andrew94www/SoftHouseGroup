<?php

namespace Model\Factory;

class LoggerAll implements TypeLoggerInterface
{

    public function send(string $message)
    {
        echo $message . ' ', 'was sent wia all';
    }
}
