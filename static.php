<?php
class A {
    public static $foo = 123;
    public $bar = 'sdfsdf';

    public static function getFoo(){
        self::test();
    }

    public function test(){
        echo 'TEST';
        echo self::$foo;
        $this->bar;
    }
}


$a = new A();

$a->getFoo();