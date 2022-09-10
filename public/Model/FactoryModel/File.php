<?php 
namespace Model\Factory;
class File extends TypeLogger{
    public function getLogger(): TypeLoggerInterface
    {
        return new LoggerFile();
    }
}