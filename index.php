<!doctype html>
<html lang="en">

<head>
  <title>Sidebar 01</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
-->
</head>

<body>
  <!-------------------------------------menu gauche----------------------------------------->
  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="p-4 pt-5">
        <!--	<a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>-->
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">MES DOSSIERS</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <?php
              $vue = scandir("mes_dossiers");
              //print_r($vue);
              foreach ($vue as $key => $value) {
                if ($value == "." || $value == "..") {
                  continue;
                }
              ?>

                <li><a href="mes_dossiers/<?php echo $value ?>"> <img src='imagedossier.png' height=50px></a> <?php echo $value ?> </a></li>
              <?php  } ?>
            </ul>
          </li>
          <li>
            <a href="#">Mes images</a>
          </li>
          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">MES FICHIER</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <?php
              $vue = scandir("mes_dossiers");
              //print_r($vue);
              foreach ($vue as $key => $value) {
                if ($value == "." || $value == "..") {
                  continue;
                }
              ?>

                <li><a href="mes_dossiers/<?php echo $value ?>"> <img src='imagedossier.png' height=50px></a> <?php echo $value ?> </a></li>
              <?php  } ?>
            </ul>
          </li>
          <li>
            <a href="#">Portfolio</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>

        <div class="footer">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>

      </div>
    </nav>
    <!----------------------------------------fin menu gauche-------------------------------------------->
    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
          <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="newdoc()" data-toggle="modal" data-target="#cre">Credos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="deletedoc()" data-toggle="modal" data-target="#sup">Suppdos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="newnamedoc()"  data-toggle="modal" data-target="#ren">Renommer </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="newfile()" data-toggle="modal" data-target="#crf">Crefichier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="copier_fichier()" data-toggle="modal" data-target="#cp">Copifichier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="chargements()" data-toggle="modal" data-target="#imp">Ajoutfichier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="supprimer_fich()" data-toggle="modal" data-target="#supf">supprimfichier</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <ul class="nav navbar-nav ml-auto" id="Submenu">
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="dossier()">Les DOSSIERS</a>
          <div id="doc">
            <?php
            $vue = scandir("mes_dossiers");
            //print_r($vue);
            foreach ($vue as $key => $value) {
              if ($value == "." || $value == "..") {
                continue;
              }
            ?>

              <a href="mes_dossiers/<?php echo $value ?>"> <img src='imagedossier.png' height=50px> <?php echo $value ?> </a>
            <?php  } ?>
            </di>
        </li>
      </ul>

      <!-------------------------------formulaire pour creer un dossier------------------------------------------------------>

<!--------------------------- Modal pour creer un dossier--------------------------->
<div class="modal fade" id="cre" tabindex="-1" role="dialog" aria-labelledby="Titlecre" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2 class="mb-4" class="modal-title" id="Titlecre">Créer un nouveau dossier.</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div id="doczon" style="display: none">
       
        <form action="" method="post">
        <div class="form-group row">
          <input type="text" name="dossier_racine"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
          

          <input type="text" name="dossier" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez ici le nom du dossier">
          


          <button type="submit" name="creer" class="btn btn-primary">Créer</button>
        </div>
        </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

      <!--
      <div id="doczon" style="display: none">
        <h2 class="mb-4">creation dossier.</h2>
        <form action="" method="post">
        <div class="form-group row">
          <input type="text" name="dossier_racine"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
          

          <input type="text" name="dossier" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez ici le nom du dossier">
          


          <button type="submit" name="creer" class="btn btn-primary">Créer</button>
        </div>
        </form>
      </div>
            -->

      <!----------------------------formulaire pour Supprimer un dossier----------------------------------------->
    <!--  <div id="supprimer_document" style="display: none">
        <h2 class="mb-4">supprimer un dossier</h2>
        <form action="" method="POST">

        <div class="form-group row">
          <input type="text" name="dossier_parent"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
          
          <input type="text" name="supprimer_dossier"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier a supprimer">
          


          <button type="submit" class="btn btn-danger">Supprimer</button>
            </div>
        </form>
      </div>-->

      <div class="modal fade" id="sup" tabindex="-1" role="dialog" aria-labelledby="Titlesup" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2 class="mb-4" class="modal-title" id="Titlesup">supprimer un dossier</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      
        <div id="supprimer_document" style="display: none">
       
        <form action="" method="POST">

<div class="form-group row">
  <input type="text" name="dossier_parent"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
  
  <input type="text" name="supprimer_dossier"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier a supprimer">
  


  <button type="submit" class="btn btn-danger">Supprimer</button>
    </div>
</form>
        </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>
      <!----------------------------formulaire pour Supprimer un fichier----------------------------------------->
      <!----------------------------PHP pour Supprimer un dossier----------------------------------------->
      <?php


      if (isset($_POST['dossier_parent']) && isset($_POST['supprimer_dossier'])) {
        rmdir("mes_dossiers" . "/" . $_POST['dossier_parent'] . "/" . $_POST['supprimer_dossier']);

        echo $_POST['supprimer_dossier'] . "supprimer<br>";
      }

      ?>
      <!----------------------------fin php pour Supprimer un dossier----------------------------------------->


      <!----------------------------Renommer un dossier ou un fichier----------------------------------------->


      <div class="modal fade" id="ren" tabindex="-1" role="dialog" aria-labelledby="Titleren" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2 class="mb-4" class="modal-title" id="Titleren">Renommer un dossier ou un fichier</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      
        <div id="renommer">
       

        <form action="" method="POST">
          <input type="text" name="fichier_renommer"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
          

          <input type="text" name="encien_nom"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom actuel du dossier ou fichier(+ex)">
          

          <input type="text" name="nouveau_nom"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nouveau nom du dossier ou fichier(+ex)">
          


          <button type="submit" class="btn btn-primary">renommer</button>

        </form>
        </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!------
      <div id="renommer" style="display: none">
        <h2 class="mb-4">Renommer un dossier ou un fichier</h2>
        <form action="" method="POST">
          <input type="text" name="fichier_renommer"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
          

          <input type="text" name="encien_nom"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom actuel du dossier ou fichier(+ex)">
          

          <input type="text" name="nouveau_nom"  class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nouveau nom du dossier ou fichier(+ex)">
          


          <button type="submit" class="btn btn-primary">renommer</button>

        </form>
      </div>----->
      <?php


      if (isset($_POST['fichier_renommer']) && isset($_POST['nouveau_nom'])  &&  isset($_POST['encien_nom'])) {

        rename("mes_dossiers" . "/" . $_POST['fichier_renommer'] . "/" . $_POST['encien_nom'],  "mes_dossiers" . "/" . $_POST['fichier_renommer'] . "/" . $_POST['nouveau_nom']);

        echo $_POST['encien_nom'] . "renomer en" . $_POST['nouveau_nom'];
      }

      ?>

      <!----------------------------fin Renommer un dossier ou un fichier----------------------------------------->
      <!---------------------------- Créer un nouveau fichier----------------------------------------->



<!-- Modal -->
<div class="modal fade" id="crf" tabindex="-1" role="dialog" aria-labelledby="Titlecrf" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2 class="mb-4" class="modal-title" id="Titlecrf">Créer un nouveau fichier</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!--------------------partie a modifier-------------------------->
       
        <form action="" method="POST">

          <input type="text" name="dossier_fichier_creer" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
      

          <input type="text" name="fichier_creer" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du fichier(+ex)">
          
          <button type="submit"  class="btn btn-primary">creer</button>
        </form>
        
          <!--------------------fin partie a modifier-------------------------->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

    <!--  <div id="fichier" style="display: none">
        <h2 class="mb-4">nouveu fichier</h2>

        <form action="" method="POST">

          <input type="text" name="dossier_fichier_creer" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
      

          <input type="text" name="fichier_creer" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du fichier(+ex)">
          
          <button type="submit"  class="btn btn-primary">creer</button>
        </form>
        <div>-->
        <?php


        if (isset($_POST['dossier_fichier_creer']) || isset($_POST['fichier_creer'])) {
          //unlink("mes_dossiers"."/".$_POST['dossier_fichier']."/".$_POST['supprimer_fichier']);
          fopen("mes_dossiers" . "//" . $_POST['dossier_fichier_creer'] . "//" . $_POST['fichier_creer'], "x");

          echo $_POST['fichier_creer'] . "créer<br>";
        }

        ?>

      

      <!---------------------------- fin créer  un nouveau fichier----------------------------------------->
      <!---------------------------- copier fichier----------------------------------------->

      <!-- Modal -->
<div class="modal fade" id="cp" tabindex="-1" role="dialog" aria-labelledby="Titlecp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2 class="mb-4" class="modal-title" id="Titlecp">copier un fichier</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!--------------------partie a modifier-------------------------->
       
       
        <form action="" method="POST">

          <input type="text" name="sracine_dossier" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
          

          <input type="text" name="sfichier_copier" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du fichier(+ex) a copier">
          

          <input type="text" name="sdossier_destinatair" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier destinataire">
          
          <button type="submit" class="btn btn-primary">copier</button>

        </form>
          <!--------------------fin partie a modifier-------------------------->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
    <!---  <div id="copy" style="display: none">
        <h2 class="mb-4">copier un fichier</h2>
        <form action="" method="POST">

          <input type="text" name="sracine_dossier" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
          

          <input type="text" name="sfichier_copier" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du fichier(+ex) a copier">
          

          <input type="text" name="sdossier_destinatair" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier destinataire">
          
          <button type="submit" class="btn btn-primary">copier</button>

        </form>
      </div>-->
        <?php


        if (isset($_POST['sracine_dossier']) || isset($_POST['sfichier_copier']) || isset($_POST['sdossier_destinatair'])) {

          copy("mes_dossiers" . "/" . $_POST['sracine_dossier'] . "/" . $_POST['sfichier_copier'], "mes_dossiers" . "/" . $_POST['sdossier_destinatair'] . "/" . $_POST['sfichier_copier']);

          echo $_POST['sfichier_copier'] . "copier sur " . $_POST['sdossier_destinatair'];
        }

        ?>

        <!---------------------------- fin copier fichier----------------------------------------->

        <!---------------------------- supprimer un fichier----------------------------------------->
        <!-- Modal -->
<div class="modal fade" id="supf" tabindex="-1" role="dialog" aria-labelledby="Titlesupf" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2 class="mb-4" class="modal-title" id="Titlesupf">supprimer un fichier</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!--------------------partie a modifier-------------------------->
       
          <form action="" method="POST">

            <input type="text" name="dossier_fichiers" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
            

            <input type="text" name="supprimer_fichiers" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du fichier(+ex)">
            

            <button type="submit"  class="btn btn-primary">Supprimer</button>

          </form>
          <!--------------------fin partie a modifier-------------------------->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
      <!--  <div id="supprimer" style="display: none">
          <h2 class="mb-4">supprimer un fichier</h2>
          <form action="" method="POST">

            <input type="text" name="dossier_fichiers" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
            

            <input type="text" name="supprimer_fichiers" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du fichier(+ex)">
            

            <button type="submit"  class="btn btn-primary">Supprimer</button>

          </form>
        </div>-->
        <?php


        if (isset($_POST['supprimer_fichiers']) || isset($_POST['dossier_fichiers'])) {
          unlink("mes_dossiers" . "/" . $_POST['dossier_fichiers'] . "/" . $_POST['supprimer_fichiers']);

          echo $_POST['supprimer_fichiers'] . "supprimer<br>";
        }

        ?>
        <!----------------------------fin supprimer fichier----------------------------------------->

        <!----------------------------formulaire pour importer un fichier----------------------------------------->

<!-- Modal -->
<div class="modal fade" id="imp" tabindex="-1" role="dialog" aria-labelledby="Titleimp" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <h2 class="mb-4" class="modal-title" id="Titleimp">ajouter fichier</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!--------------------partie a modifier-------------------------->
       
        <form action="" method="POST" enctype="multipart/form-data">
           
            <input type="file" name="newfic"  class="custom-file-input-primary" >
            <input type="text" name="nom_dossier" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier destinataire">
            <input type="submit" value="ajout fichier"  class="btn btn-primary">


          </form>
          <!--------------------fin partie a modifier-------------------------->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>
       <!-- <div id="file" style="display: none">
          <form action="" method="POST">
            <h2 class="mb-4">ajouter fichier</h2>
            <input type="file" name="newfic"  class="custom-file-input-primary" >
            <input type="text" name="nom_dossier" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier destinataire">
            <input type="submit" value="ajout fichier"  class="btn btn-primary">


          </form>
          </div>-->
          <?php

          if (isset($_POST['newfic']) || isset($_POST['nom_dossier'])) {
            function ficier()
            {
              //$uploads_dir = 'mes_dossiers'.'/'.$_POST['nom_dossier'];

              $error = $_FILES["newfic"]["error"];
              if ($error == 0) {
                $temporer = $_FILES["newfic"]["tmp_name"];
                $name = $_FILES["newfic"]["name"];
                echo $name;
                echo $error;
                echo $temporer;
                move_uploaded_file($temporer, 'mes_dossiers' . '/' . $_POST['nom_dossier'] . '/' . $name);
                echo 'fichier enregistre avec succes';
              } else {
                echo 'erreur de chargement du fichier';
              }
            };
            ficier();
          };
          ?>
       



      </div>
    </div>
    <!---------------------------------fin importer fichier-------------------------------------------------->






    <!---------------------------------essai modal-------------------------------------------------->
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitlesup" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitlesup">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!--------------------partie a modifier-------------------------->
        <h2 class="mb-4">supprimer un fichier</h2>
          <form action="" method="POST">

            <input type="text" name="dossier_fichiers" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du dossier racine">
            

            <input type="text" name="supprimer_fichiers" class="form-control mb-2" id="inlineFormInput" placeholder="Entrez le nom du fichier(+ex)">
            

            <button type="submit"  class="btn btn-primary">Supprimer</button>

          </form>
          <!--------------------fin partie a modifier-------------------------->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <!---------------------------------fin -------------------------------------------------->

    <!-----------------------------Tout le script----------------------------------------------->
    <script>
      //doc

      //supprimer un dossier
      function dossier() {
        var doczon = document.getElementById('doc').style;
        console.log(doczon.display);
        if (doczon.display === "none") {
          doczon.display = "block";
        } else {
          doczon.display = "none";
        }
      }

      //creation nouveau docier    
      function newdoc() {
        var doczon = document.getElementById('doczon').style;
        console.log(doczon.display);
        if (doczon.display === "none") {
          doczon.display = "block";
        } else {
          doczon.display = "none";
        }
      }


      //supprimer un dossier
      function deletedoc() {
        var doczon = document.getElementById('supprimer_document').style;
        console.log(doczon.display);
        if (doczon.display === "none") {
          doczon.display = "block";
        }else {
          doczon.display = "none";
        }
      }

      //renommer un dossier
      function newnamedoc() {
        var doczon = document.getElementById('renommer').style;
        console.log(doczon.display);
        if (doczon.display === "none") {
          doczon.display = "block";
        } else {
          doczon.display = "none";
        }
      }



      //Créer un nouveau fichier

      function newfile() {
        var file = document.getElementById('fichier').style;
        console.log(file.display);
        if (file.display === "none") {
          file.display = "block";
        } else {
          file.display = "none";
        }
      }

      //copier un fichier
      function copier_fichier() {
        var doczon1 = document.getElementById('copy').style;
        console.log(doczon1.display);
        if (doczon1.display === "none") {
          doczon1.display = "block";
        } else {
          doczon1.display = "none";
        }
      }



      //ajouter un fichier

      function chargements() {
        var file1 = document.getElementById('file').style;
        console.log(file1.display);
        if (file1.display === "none") {
          file1.display = "block";
        } else {
          file1.display = "none";
        }
      }

      //suprimer fichier
      function supprimer_fich() {
        var file2 = document.getElementById('supprimer').style;
        console.log(file2.display);
        if (file2.display === "none") {
          file2.display = "block";
        } else {
          file2.display = "none";
        }
      }
    </script>
    <?php

    /***************************php ajouter pour creer dossier****************************/

    if (isset($_POST['dossier_racine'])  && isset($_POST['dossier'])) {
      mkdir("mes_dossiers" . "/" . $_POST['dossier_racine'] . "/" . $_POST['dossier'], 0600);


    ?>


    <?php
    }

    ?>





    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
</body>

</html>