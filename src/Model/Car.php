<?php 


namespace App\Model;
// require_once 'App\Model';

class Car 
{
public function getCars($pdo)
{
    $stmt = $pdo->prepare ('SELECT * FROM car');
    $stmt->execute();
    return $stmt->fetchAll();
}

} 

