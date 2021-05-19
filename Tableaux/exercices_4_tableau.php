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

  //Exercice 4 Combien de semaines dure le stage du groupe 19003 ?
   $new_tab = array_slice($a[19003],0,26);
  $new_tab1 = array_slice($new_tab,11,-3);
   echo'<pre>';
   echo print_r($new_tab1);
   echo'</pre>';

   $b = sizeof($new_tab1);

   echo "Le durée du Stage en semaine :";
   echo $b;

  

  ?> 
</body>
</html>