<?php




    
/**
 * return an array that contains ALL THE Courses from the table courses
 * @return array
 * 
 */
function findAllCourses() :array {

    $pdo = getPdo();

     $result = $pdo -> query('SELECT * FROM courses');

    $courses = $result -> fetchAll();

    return $courses;
}

