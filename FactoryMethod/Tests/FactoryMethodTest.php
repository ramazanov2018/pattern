<?php
namespace pattern\FactoryMethod\Tests;

require_once "../FileLogger.php";
require_once "../FileLoggerFactory.php";
require_once "../StdoutLogger.php";
require_once "../StdoutLoggerFactory.php";

use pattern\FactoryMethod\FileLogger;
use pattern\FactoryMethod\FileLoggerFactory;
use pattern\FactoryMethod\StdoutLogger;
use pattern\FactoryMethod\StdoutLoggerFactory;

class FactoryMethodTest extends \PHPUnit_Framework_TestCase
{

    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}