<?php

namespace Model\Factory;

class Email extends TypeLogger
{
    public function getLogger(): TypeLoggerInterface
    {
        return new LoggerEmail();
    }
}
