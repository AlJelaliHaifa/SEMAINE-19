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

  //Exercice 3 Extraire, dans un nouveau tableau, les codes des groupes.
  $new_tab = array_slice($a[19001],0,-24);
  $new_tab1 = array_slice($a[19002],0,-26);
  $nes_tab3 = array_slice($a[19003],0,-26);

  print_r([$new_tab=19001, $new_tab1=19002 , $nes_tab3=19003]) ;
  echo '<br>';

  ?> 
</body>
</html>