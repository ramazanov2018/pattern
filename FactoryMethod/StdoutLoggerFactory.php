<?php
namespace pattern\FactoryMethod;

require_once "LoggerFactory.php";

class StdoutLoggerFactory implements LoggerFactory
{
    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
