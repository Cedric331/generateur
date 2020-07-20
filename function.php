<?php 

function formulaire($label, $input)
   {
      $form = "<label for=\"". $label ."\">".$label."</label>
               <input type=\"". $input ."\" class=\"form-control\" id=\"". $label ."\" name=\"". $label ."\">";
      return $form;
   }

function destroy()
   {
   session_destroy();
   }