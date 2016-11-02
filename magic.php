<?php
error_reporting(E_ALL);
class Single {

    static private $_instance;

    public static function getInstance(){
        if(self::$_instance === null){
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    private function __construct(){}
    private function __clone(){}
    private function __sleep(){}
    private function __wakeup(){}
}

Single::getInstance();

$a = new Single;