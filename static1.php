<?php
class A {
    const MY_CONST = 'Class A';

    private static $foo;

    public function __get($name){
        echo 'Function get';
    }

    public static function __callStatic($name, $arguments) {
        echo 'Function call static';
    }

    public static function getName(){
        echo static::MY_CONST, '<br/>';
    }
}

class B extends A {
    const MY_CONST = 'Class B';
}


echo A::getName(), '<br/>', B::getName();
