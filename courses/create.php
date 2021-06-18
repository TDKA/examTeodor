<?php

/**
 * Create new course
 * @param string $description
 * 
 * @param int $course_id
 * @return void
 */


function createCourse(string $description, int $course_id): void{

    $pdo = getPdo();

    $createCourse = $pdo->prepare("INSERT INTO courses (description, id) 
                                    VALUES (:description, :course_id)");

    $createCourse->execute([
                            'description' => $desciption,
                        
                            'course_id' => $course_id

                        ]);

}

