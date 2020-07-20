<?php 
session_start();
if (isset($formulaire)) 
{
   $formulaire .= $_SESSION['form'];
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
      <button type="submit" class="btn btn-primary">Ajouter</button>
   </form>

<?php

function formulaire($label, $input)
   {
      $form = "<form method=\"\" action=\"\">
               <div class=\"form-group\">
               <label for=\"". $label ."\">".$label."</label>
               <input type=\"". $input ."\" class=\"form-control\" id=\"". $label ."\" name=\"". $label ."\">
               </div>
            </form>";
      return $form;
   }

   if (isset($_POST['label']) AND isset($_POST['input']))
   {
      $formulaire = formulaire($_POST['label'], $_POST['input']);
      echo $formulaire;
      $_SESSION['form'] .= $formulaire;
   }


?>


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