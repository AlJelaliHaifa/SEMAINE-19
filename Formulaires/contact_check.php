<?php
// Definition des variables 
$lastName = filter_input(INPUT_POST,"lastName");
$firstName = ("firstName");
$age = filter_input(INPUT_POST,"age");
$postalCode = filter_input(INPUT_POST,"postalCode");
$adress = filter_input(INPUT_POST,"adress");
$city = filter_input(INPUT_POST,"city");
$email = filter_input(INPUT_POST,"email");
$subject = filter_input(INPUT_POST,"subject");
$comment = filter_input(INPUT_POST,"comment");

$error = 0;



    //partie "votre nom" 
    if (empty($lastName)) {
        $error_lastName = 'Veuillez entrer votre nom';
        $error++;
    }

   //partie "votre prenom"
    if (empty($firstName)){
        $error_firstName = 'Veuillez entrer votre prénom';
        $error++;
    }

    //partie date de naissance
    if (empty($age)) {
        $error_age = "Veuillez entrer jour/mois/année ";
        $error++;
    }
    
    // partie code postale
    if (strlen($postalCode)!= 5) {
        $error_postalCode = 'Veuillez entrer votre code postal';
        $error++;
    }

    // partie adresse
    if (empty($adress)) {
        $error_adress = 'Veuillez entrer votre adresse';
        $error++;
    }

     // partie ville
    if (empty($city)) {
        $error_city = 'Veuillez entrer votre ville';
        $error++;
    }

     // partie email
     if (preg_match("/^[a\-z0\-9]+([_|\.|\-]{1}[a\-z0\-9]+)*@[a\-z0\-9]+([_|\.|\-]­{1}[a\-z0\-9]+)*[\.]{1}[a\-z]{2,6}$/",$email) < 1 ) {
        $error_email = 'Veuillez entrer votre adresse mail';
        $error++;
    }
     //partie sujet
     if ($subject === "Veuillez selectionner un sujet"){
         $error_subject = 'Veuillez selectionner un sujet';
         $error++;
     }

     // partie commentaire
    if (strlen($comment)< 4) {
        $error_comment = 'Veuillez completer le champ';
        $error++;
    }
   
     // partie checkbox
    if (isset($POST["checkbox"])) {
        $error_checkbox = "Veuillez accepter les conditions pour effectuer l'envoie des données";
        $error++;
    }
  
     // partie envoie du formulaire
     if ($error === 0){
         include 'contact_thanks.php';
     }   else include 'contact.php';
   


?> 