<?php
interface MyInterface {
    public function i1();
}

interface MyInterface2 {
    public function i2();
}

class foo implements MyInterface, MyInterface2, Iterator{
    public function i1(){
    
    }
    
    public function i2()
    {
        // TODO: Implement i2() method.
    }
    
    public function current()
    {
        // TODO: Implement current() method.
    }
    
    public function valid()
    {
        // TODO: Implement valid() method.
    }
    public function next()
    {
        // TODO: Implement next() method.
    }
    public function key()
    {
        // TODO: Implement key() method.
    }
    
    public function rewind()
    {
        // TODO: Implement rewind() method.
    }
}