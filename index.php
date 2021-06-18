<?php 

require "courses/logique.php";
    
?>


<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  </head>
<body>
   
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="" alt="" width="30" height="24" class="d-inline-block align-text-top">
      NAVBAR
    </a>
  </div>
</nav>                    
 <hr>
<span>Bonjour Luc</span>
<br><br><br><br>

      <div class="lesCourses">

    <?php foreach ($courses as $course) { ?>
     
      <div class="card" style="width: 18rem;">
      
        <div class="card-body">

          <p class="card-text"><?php echo $course['description'] ?></p>


                  <?php if($course['deja_achete']) {?>
                    <form action="" method="POST" class='mt-3'>

                                <button type="submit" name="pasAcheter" value="<?php echo $course['id']?>" class="btn btn-danger">A Acheter</button>

                   <?php }else{?>   

                                <button type="submit" name="Achete" value="<?php echo $course['id']?>" class="btn btn-success"> Acheté</button>

                      </form>
                  <?php } ?>


                  <form action="" method ="POST">
             
                    <div class="form-group">

                        <input type="hidden" value="<?php echo $course['id'] ?>" class="form-control"  placeholder="" name="idEdit">
                      
                          <a href="#" class="btn btn-warning">Editer</a>

                          <input class="form-control rounded-pill" type="text" name="editDescription" id="" value="<?php echo $course['description'] ?>">
                    </div>
                </form>

            <a  href="index.php?id=<?php echo $course['id']?>" class="btn btn-danger">Supprimer</a>
          </div>
    </div>


    

      


<br><br><br><br>
  <div class="nouvelleCourse">
  
     

        <form action="" method="POST" class="row col-md-6">
    
        <h3>Ajouter une course</h3>

        <input type="hidden" name="course" value="<?php echo $course['id'] ?>">

        <div class="form-group">
            <textarea  class="form-control" name="description" id="" cols="30" rows="2" placeholder="Description"></textarea>
        </div>
    
       
        <div class="form-group">
            <button class="btn btn-success mt-2">Ajouter </button>
        </div>

      
  
  
  </div>
<?php } ?>

  <br><br>
  <p>on veut pouvoir cliquer pour changer le booleen dejaAchete, et ainsi recharger la page et que le bouton prenne la bonne couleur</p>
  <p>on veut cliquer pour supprimer et recharger la page egalement</p>
  <p>on veut editer uniquement la description lorsque l'on clique sur Editer : le nom devient alors un formulaire avec un echo dans la value</p>
  <p>pour déclencher le mode edition : on envoie dans POST l'id de la course, et la prochaine fois que l'on l'affiche, cette derniere sera en mode Edition si son ID est le même que retrouvé dans POST</p>
  <p>il y aura donc une condition pertinente dans le foreach, qui decidra pour chaque course d'un affichage normal ou en mode edition</p>

  <br><br>




  <p>Les requis, obligatoire : </p>
  <ul>
    <li>utiliser PDO</li>
    <li>utiliser bootstrap</li>
    <li>une course par ligne, utiliser soit une table, soit une liste, soit des rows</li>
    <li>la structure de la base de données est à respecter</li>
  </ul>
  <h2>1. Réaliser le projet SANS gestion d'utilisateurs</h2>
  <p>imagine que cette version ne sera utilisée que par une seule personne. La database :</p>
<img src="db.png" alt="">

<p><strong>travailler strictement dans cet ordre </strong>: afficher, supprimer, créer, et <strong>EN DERNIER</strong>, éditer</p>




  <h2>2. Uniquement quand tout marche en 1., s'intérésser au dossier authentification et à la gestion des utilisateurs</h2>
  <p>il faudra commencer sans encryption et sans salt, avec des users et passwords créés directement dans phpmyadmin </p>
  <p>l'idée sera qu'il y ait une liste de courses par utilisateur (donc une colonne user_id dans la table courses)</p>
<p>la database dans cette version-la :</p>
  <img src="db2.png" alt="">

  <h2>3.Uniquement si tout ce qui est dit avant est fonctionnel, créer un module d'inscription (signup.php) dans /authentification</h2>
      <p>c'est la partie bonus/facultative. essentiellement cela doit fonctionner sans utilisateurs, ensuite avec une connexion sur des comptes crées directement via phpmyadmin non-cryptés </p>
      <p>UNIQUEMENT APRES CES DEUX ETAPES FONCTIONNELLES  un module d'inscription et cryptage des mots de passe</p>



      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>