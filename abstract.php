<?php
abstract class Figure {
    protected $n;
    protected $l;

    public function __construct($l, $n){
        $this->n = $n;
        $this->l = $l;
    }

    public function perimeter(){
        return $this->n*$this->l;
    }
    abstract public function area();
}

class Square extends Figure {
    public function area(){
        return power($this->l, 2);
    }
}

class Threangle extends Figure {
    public function area(){
        //Что-то считаем
    }
}