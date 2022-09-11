<?php

namespace Model\Factory;

class LoggerFile implements TypeLoggerInterface
{

    public function send(string $message)
    {
        echo $message . ' ', 'was sent wia file';
    }
}
