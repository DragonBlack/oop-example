<?php
/**
 * Created by PhpStorm.
 * User: PHPAcademy
 * Date: 07.10.2016
 * Time: 20:42
 */

namespace db;


class Query{
    private $_dbConnection;
    private $_stmt;
    
    public function __construct(){
        $this->_dbConnection = Connection::instance();
    }
    
    public function sql($sql){
        $this->_stmt = $this->_dbConnection->prepare($sql);
        return $this;
    }
    
    public function all(){
        $this->execute();
        return $this->_stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function execute(){
        $this->_stmt->execute();
    }
}