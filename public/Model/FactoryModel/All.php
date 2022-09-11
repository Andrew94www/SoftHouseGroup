<?php

namespace Model\Factory;

class All extends TypeLogger
{
    public function getLogger(): TypeLoggerInterface
    {
        return new LoggerAll();
    }
}
