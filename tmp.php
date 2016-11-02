<?php
require_once './db/Query.php';
require_once './db/Connection.php';


$res = (new \db\Query())
    ->sql('SELECT * FROM offices')
    ->all();

echo '<pre>';
print_r($res);
echo '</pre>';