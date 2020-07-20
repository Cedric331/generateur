<?php 
session_start();

require('function.php');

if (isset($formulaire)) 
{
   $formulaire .= $_SESSION['form'];
}

// fonction reset
if (isset($_POST['destroy'])) 
{
   destroy();
}

?>

<!doctype html>
<html lang="fr">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
      crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <!-- Debut de page-->
<div class="container">

   <h1>Générateur Formulaire</h1>

   <form method="POST" action="">
      <div class="form-group">
         <label for="label">Label : </label>
         <input type="text" class="form-control" id="label" name="label">
      </div>
      <div class="form-group">
         <label for="input">Nombre de Input:</label>
         <input type="text" class="form-control" id="input" name="input">
      </div>
      <div class="form-group">
         <label for="submit">Valeur du bouton:</label>
         <input type="number" class="form-control" id="submit" aria-describedby="submitHelp" name="submit">
         <small id="submitHelp" class="form-text text-muted">*Facultatif</small>
      </div>
      <button type="submit" class="btn btn-primary" name="ajouter">Ajouter</button>
      <button type="submit" class="btn btn-primary" name="destroy">Reset</button>
   </form>

<?php

   if (isset($_POST['label']) AND isset($_POST['input']) AND isset($_POST['ajouter']))
   {
      $formulaire = formulaire($_POST['label'], $_POST['input']);
      $_SESSION['form'] .= $formulaire;
      echo  "<form method=\"\" action=\"\">
            <div class=\"form-group\">" . $_SESSION['form'] . "</div>
            </form>";
   }




?>
</div>

   <!-- Fin de page-->

   <!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" crossorigin="anonymous">
   </script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" crossorigin="anonymous">
   </script>
</body>

</html>