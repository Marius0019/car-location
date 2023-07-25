<?php

namespace App\Controller;

use App\Core\Database;
abstract class AbstractController  
{
    // Creer une propriété privé pdo
protected \PDO $pdo;

public function __construct()
{
    $this->pdo = Database::getConnection();
}
}

// INSERT INTO car (name , description, image, price) VALUES ('Peugeot', 'Une magnifique Peugeot 404', 'peugeot.jpg', 8967.78);

//    INSERT INTO car (name , description, image, price) VALUES ('Renault', 'Une magnifique Clio 2', 'renault.jpg', 9567.78); 
