 <?php 
  
  //Ecrivez la fonction calculator() traitant les opérations d'addition, de soustraction, de multiplication et de division.
   
  function calculator($a, $b, $operator)
 {
    global $a , $b, $operator,$calcul;
  
  switch ($operator) {
    case "-":
      $calcul =$a - $b;
        break;
    case "+":
        $calcul = $a  + $b;
        break;
    case "*":
      $calcul =$a * $b;
        break;
    case "/":
          $calcul = $a / $b;
        break;
}
  return $calcul;
 }
 echo calculator($a, $b, $operator);
 




  ?> 