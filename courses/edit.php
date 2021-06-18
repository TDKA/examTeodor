<?php


function editCourse(){


    $edit = $pdo->prepare("UPDATE courses SET description  = $editDescription WHERE id = :idEdit");

    $edit->execute(['idEdit' => $idEdit]);

    
}