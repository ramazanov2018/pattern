<?php

namespace pattern\Singleton;


final class Singleton
{
    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * получем единственный едиственный экэемпляр Singleton
     */
    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * запрещаем создание обьекта через конструктор
     */
    private function __construct()
    {
    }

    /**
     * запрещаем клонирование
     */
    private function __clone()
    {
    }

    /**
     * запрещаем сериализацию
     */
    private function __wakeup()
    {
    }
}