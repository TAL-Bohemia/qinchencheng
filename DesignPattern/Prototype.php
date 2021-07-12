<?php


namespace App\Module\StuCourse;


/**
 * 抽象原型类
 * Class Prototype
 */
abstract class Prototype
{
    abstract function cloned();
}

/**
 * 具体原型类
 * Class ConcretePrototype
 * @package App\Module\StuCourse
 */
class ConcretePrototype extends Prototype
{
    private $i = 0 ;
    public function cloned(){
        //浅拷贝
        return clone $this;
    }

    public function  deepCloned(){
        //深拷贝,把拷贝对象的引用的对象都拷贝一次
        $obj = serialize($this);
        return unserialize($obj);
    }


    public function init()
    {
        //执行循环复杂操作
        for ($i=0; $i<2000000; $i++){
            $this->i = $this->i + $i;
        }

    }

    public function run()
    {
        return  $this->i;
    }

}

//创建原型对象并初始化
$prototype = new ConcretePrototype();
$prototype->init();

//clone 原型对象
$obj1 = $prototype->cloned();
$obj1->run();