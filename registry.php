<?php
class InvalidParameterException extends Exception {

}

class InvalidParameterException2 extends InvalidParameterException {
    public function setCode($code)
    {
        $this->code = $code*2;
    }
}

class Registry {
    private static $_container = [];

    public static function get($name){
        return isset(self::$_container[$name]) ? self::$_container[$name] : null;
    }

    public static function set($name, $value){
        if(!isset(self::$_container[$name])) {
            self::$_container[$name] = $value;
            throw new Exception('Oooops');
        }
        else {
            throw new InvalidParameterException2('Invalid parameter', 500);
        }
    }
}

try {
    Registry::set('name', 'Vasia');
    echo Registry::get('name'), '<br/>';
    Registry::set('name', 'Bob');
    echo Registry::get('name'), '<br/>';
}
catch (InvalidParameterException $e){
    echo 'Error: ',$e->getMessage(), '<br/>';
    echo 'Code: ', $e->getCode();
}
finally {
    echo 'Finally';
}

echo '<br/>Script finish';
