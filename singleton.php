<?php
class Single {
    private static $_instance;
    
    public static function getInstance(){
        if(self::$_instance === null){
            self::$_instance = new self;
        }
        return self::$_instance;
    } 
    
    private function __construct(){}
    private function __sleep(){}
    private function __wakeup(){}
    private function __clone(){}
    
}

$a = Single::getInstance();