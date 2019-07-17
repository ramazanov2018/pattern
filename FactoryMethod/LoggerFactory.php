<?php
namespace pattern\FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}
