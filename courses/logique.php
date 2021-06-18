
<?php 

require_once dirname(__FILE__)."/../access/db.php";
require_once "create.php";
require_once "read.php";
require_once "edit.php";
require_once "delete.php";



$courses = findAllCourses();


// on surveille ici POST ou GET, on vérifie les données et on appelle les function selon.


//Delete course
if(isset($_GET['id'])) {

    if(!empty($_GET['id']) && ctype_digit($_GET['id']) ) {

        $course_id = $_GET['id'];




        $delete = deleteCourse($course_id);

               header("Location: index.php");
        }
}

//Acheter / pas Acheter
 if (isset($_POST['Achete']) && $_POST['Achete']!=""){
                        $course = $_POST['Achete'];
                            $pdo= getPdo();

                                        $edit = $pdo->prepare("UPDATE courses SET deja_achete = '1' WHERE id = :course");
                                
                                        $edit->execute(['course' => $course]);
                                        
                                        if($edit) {

                                            header("Location: index.php");
                                        }

                                
}
if (isset($_POST['pasAcheter']) && $_POST['pasAcheter']!=""){

               $course = $_POST['pasAcheter'];
               
                      $pdo= getPdo();

                        $edit = $pdo->prepare("UPDATE courses SET deja_achete = '0' WHERE id = :course");
                       
                        $edit->execute(['course' => $course]);
                             
                                        if($edit) {

                                            header("Location: index.php");
                                        }

                            
     
}

//edit


      if(isset($_POST['editDescription']) ){
        
            $editDescription = $_POST['editDescription'];
          
            $idEdit = $_POST['idEdit'];

               
            $edit = editCourse();
       
           
         }

 

//create



// if(!empty($_POST['course']) && ctype_digit($_POST['course']) ){
//     $course_id = $_POST['course'];
// }

// if(!empty($_POST['description']) ){
//     $description = htmlspecialchars($_POST['description']);

    
// }
// createCourse($description, $course_id);