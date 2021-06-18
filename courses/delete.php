<?php


/**
 * Delete course by its ID
 * 
 * @param int $course_id
 * @return void 
 * 
 */


function deleteCourse(int $course_id): void{


    $pdo = getPdo();

    $delete = $pdo->prepare("DELETE FROM courses WHERE id = :course_id");

    $delete->execute(['course_id' => $course_id]);

   
}
