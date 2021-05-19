<html>
<body>
  <?php 


$a = [
"19001" => 
[
  "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"
], 
"19002" => 
[
  "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""
], 
"19003" => 
[
  "", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation"
],
];

echo'<pre>';
echo print_r($a);
echo'</pre>';

  //Exercice 1 Quelle semaine a lieu la validation du groupe 19002 ?

  echo $a[19002][24] ;
  echo '<br>';
   
  //Exercice 2 Trouver la position de la dernière occurrence de Stage pour le groupe 19001.

  echo $a[19001][21];
  echo '<br>';

  ?> 
</body>
</html>