<!DOCTYPE html>
<html lang="it">
  <head>
  <meta charset="UTF-8">
  <title>Libellula Srl Calcolo del fattore K</title>
  <link href="../css/style.css" rel="stylesheet">

  </head>
  <body>

  <h1>Libellula Srl     </h1>
  <h2>Calcolo fattore k </h2>

  <form method="post">
   Materiale ....: <input type="text" name="materiale">     <br>
   Larghezza V ..: <input type="text" name="larghezzaV">    <br>
   GradiV .......: <input type="text" name="gradiV">        <br>
   Raggio Punzone: <input type="text" name="raggioPunzone"> <br>
   Anisotropia...: <input type="text" name="anisotropia">   <br>


  <input type="submit" class="button" name="s90" value="taglio a 90"/>
  <input type="submit" class="button" name="n90" value="taglio diverso da 90" />
  <br>
  <br>
  <br>

   <?php

     if (isset($_POST['s90'])) {
               $flag90 = true;
               s90();
             }
     if (isset($_POST['n90'])) {
               $flag90 = false;
               s90();
       }



function s90() {
    $materiale    = $_POST["materiale"];
    $larghezzaV   = $_POST["larghezzaV"];
    $gradiV       = $_POST["gradiV"];
    $raggioPunzone= $_POST["raggioPunzone"];
    $anisotropia  = $_POST["anisotropia"];
    $flag90       = false;
         //  lancio shell
         $output = shell_exec("python ../python/calcoloFattoreK.py   '".$materiale."'  '".$larghezzaV."' '".$gradiV."'  '".$raggioPunzone."'   '".$anisotropia."'   '".$flag90."'     ");
         echo $output;
         exit;
    }


    ?>

</form>
  </body>
</html>
