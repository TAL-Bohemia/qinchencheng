<?php

/*
 单例模式代码实现
*/
class Singleton
{
    public static $instance = null;

    private function __construct()
    {
    }

     public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
        }
        return self::$instance;
    }

}

