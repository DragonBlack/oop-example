<?php
namespace db;


class Connection {
    private static $_instance;
    private $_dbh;
    
    public static function instance(){
        if(self::$_instance === null){
            self::$_instance = new self;
        }
        return self::$_instance;
    }
    
    private function __construct(){
        $params = require_once 'db_config.php';
        $this->_dbh = new \PDO("mysql:host={$params['db_host']};dbname={$params['db_name']}", $params['db_user'], $params['db_password']);
    }
    
    public function prepare($sql){
        return $this->_dbh->prepare($sql);
    }
}