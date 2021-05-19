  <!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Formulaire</title>

    <!--font-->

    <!--css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>


<!--contenu du site-->

<body class="container body">
 
    <!-- Exercice 1 -->
    <?php 
  
    //Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
     $min = 0;
     $max = 150;
      
     $chiffresPairs = array();
     $chiffresImpairs = array();
      
     for ($i = $min; $i < $max; $i++) {
         if ( $i % 2 != 0 ) {
             $chiffresImpairs[] = $i;
         }
         else {
             $chiffresPairs[] = $i;
         }
     }
      
     echo 'Les chiffres impairs compris entre 0 et 150 sont: '.implode(' ', $chiffresImpairs);  
     ?>
  
    <br>

    <!-- Exercice 2 -->
    <?php 

   //Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers.

   for ($i=0; $i<500; $i++) {
    echo 'Je dois faire des sauvegardes régulières de mes fichiers<br>';
}


   ?>

    
    <!--Exercice 3-->
    <?php 
  
  //Ecrire un script qui affiche la table de multiplication totale de {1,...,12} par {1,...,12},
  echo "<table border ><tr><td> </td>"; // table multiplication
  for($j=0;$j<15;$j++) {
      echo "<td><strong> $j </strong></td>"; // les indices de chaque colonne
  }
  echo "</tr>";
  echo"</strong>";
  for($i=0;$i<15;$i++) {
      echo "<tr><td><strong>$i </strong></td>"; // les indices de chaque ligne
      for($j=0;$j<15;$j++) {
          $res=$i*$j;
          echo "<td> $res </td>";
      }
      echo "</tr>";
  }
  echo "</table>";
  ?> 
     

</body>

</html>