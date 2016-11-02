<?php
class A {
 public $foo = '1';
 protected $className = 'A';
 private $bar = 2;

 public function getItems(){
  foreach($this as $key=>$val){
      echo $key, ' => ', $val, '<br/>';
  }
 }
}


class B extends A {
    public function getItems(){
        foreach($this as $key=>$val){
            echo $key, ' => ', $val, '<br/>';
        }
    }
}

class C extends B {

}

//$tmp = new A;
//
//$tmp->getItems();
//
//echo '<br/>';

$tmp = new C();

var_dump($tmp instanceof C, $tmp instanceof B, $tmp instanceof A);