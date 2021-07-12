<?php
/*
 单例模式
 定义：保证一个类仅有一个实例，并提供一个访问它的全局访问点
 








*/

class SingleClass
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

