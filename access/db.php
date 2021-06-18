<?php


function getPdo(){

 $pdo = new PDO('mysql:host=localhost:3304; dbname=courses', 'course', 'course', [
    
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ,

    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

    return $pdo;
    

  
}

?>