<?php

namespace Model\Factory;

class DB extends TypeLogger
{
    public function getLogger(): TypeLoggerInterface
    {
        return new LoggerDb();
    }
}
