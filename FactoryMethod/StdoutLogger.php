<?php
namespace pattern\FactoryMethod;

require_once "Logger.php";

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}
