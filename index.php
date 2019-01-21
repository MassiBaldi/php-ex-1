<!-- Passare due argomenti allo script:
Nome e Cognome. Lo script dovrà
salutare l’interlocutore -->

<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- Ex1 -->
    <?php
      $name = 'Massimiliano';
      $lastname = 'Baldi';

      echo "Ex1: Ciao $name $lastname"
    ?>
    <br>
    <br>

    <!-- Ex2 -->

    <?php
      $testo = 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.';

      echo "Ex2: $testo";
      echo "<br>";

      $testoLenght = strlen($testo);
      echo "Lunghezza testo: $testoLenght";
      echo "<br>";
      $badWord = $_GET['badword'];

      echo str_replace($badWord, '***', $testo);
    ?>



  </body>
</html>
