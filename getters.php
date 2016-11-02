<?php
class A {
    private $foo = 10;
    private $bar =20;

    public function __get($name)
    {
        $func = 'get'.ucfirst($name);
        if (method_exists($this, $func)){
            return $this->$func();
        }

        throw new Exception('Property not found');
    }

    private function getFoo(){
        return $this->foo;
    }
}

$obj = new A();
//echo $obj->getFoo();
echo $obj->bar;