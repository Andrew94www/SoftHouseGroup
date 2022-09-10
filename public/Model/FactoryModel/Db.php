<?php 
namespace Model\Factory;
class Db extends TypeLogger{
    public function getLogger(): TypeLoggerInterface
    {
        return new LoggerDb();
    }
}