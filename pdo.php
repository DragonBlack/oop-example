<?php
$dbuser = 'root';
$dbpassword = '';

try {
    $pdo = new PDO('mysql:host=localhost;dbname=sample', $dbuser, $dbpassword);
}catch (PDOException $e){
    echo $e->getMessage();
}

$query = 'SELECT * FROM offices';


$stmt = $pdo->prepare($query);
$stmt->bindParam(':cid', $customer, PDO::PARAM_INT);

$customer = 129;
$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($res);
echo '</pre>';

$customer = 146;
$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($res);
echo '</pre>';