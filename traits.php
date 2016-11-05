<?php
trait MyTrait {
    public function func1(){
        echo __CLASS__;
        var_dump($this);
    }
}

trait MyTrait2 {
    public function func2(){
        echo 'Function from MyTrait2';
    }
}

class MyClass {

    public function func1(){
        echo 'Function from MyClass';
    }
}

class Class2 extends MyClass {
    use MyTrait;
    use MyTrait2;
}

$b = new Class2();

$b->func1();