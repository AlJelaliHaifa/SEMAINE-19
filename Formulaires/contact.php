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
    <div class="page">
        <div class="banniere">
            <div class="row">
                <div class="col-lg-2">
                    <br>
                    <img class="img-fluid" src="image/jarditou_logo.jpg" alt="jarditou_logo">
                </div>
                <div class="col-10">
                    <br>
                    <h2 class="text-right">La qualité depuis 70 ans</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- barre de navigation grise horizontale qui passe a la verticale sur les petits ecrans -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="Accueil.html">Jarditou.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="Accueil.html">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tableau.html">Tableau</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Contact.html">Formulaire</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Votre promotion" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>


    <!--bannière-->

    <img class="img-fluid" src="image/promotion.jpg" alt="promo">


    <!--Les coordonées-->

    <fieldset>
        <p class="text-danger">*Ces zones sont obligatoires</p>
        <h2>Vos coordonnées</h2>
        <form id="myForm" action="contact_check.php" method="POST" style="margin: 2px;">
            <div class="form-group">
                <label for="lastName">Votre nom*:</label>
                <input name="lastName" class="form-control" id="lastName" minlength="2" type="text" value="<?= isset($lastName) ? htmlspecialchars($lastName) : "";?>" />
                <span class="text-danger">
                    <?php
                    if(isset($error_lastName)){
                        echo $error_lastName;
                    }
                    ?>
                </span>
                <br>
                <label for="firstName">Votre prénom*:</label>
                <input name="firstName" id="firstName" minlength="2" class="form-control" type="text" value="<?= isset($firstName) ? htmlspecialchars($firstName) : "";?>" />
                <span class="text-danger">
                    <?php
                    if(isset($error_firstName)){
                        echo $error_firstName;
                    }
                    ?>
                </span>
                <br>
                <span class="text-danger"></span>
                <label for="sex">Sexe :</label>
                <br>
                <label><input name="sex" type="radio"  value="H" /> Masculin  </label>
                <label><input name="sex" type="radio"  value="F" />   Féminin  </label>
                <label><input name="sex" type="radio"  value="N" />   Neutre  </label>
               
                <br>
                <label for="age">Date de naissance*:</label>
                <input name="age" id="age" type="date" class="form-control" value="<?= isset($age) ? htmlspecialchars($age) : "";?>"/>
                <span class="text-danger">
                    <?php
                    if(isset($error_age)){
                        echo $error_age;
                    } 
                    ?>
                </span>
                <br>
                <label for="postalCode">Code postal*:</label>
                <input name="postalCode" id="postalCode" type="text" maxlength="5" class="form-control" value="<?= isset($postalCode) ? htmlspecialchars($postalCode) : "";?>" />
                <span class="text-danger">
                <?php
                    if(isset($error_postalCode)){
                        echo $error_postalCode;
                    } 
                    ?>
                </span>
                <br>
                <label for="adress">Adresse:</label>
                <input name="adress" id="adress" type="text" minlength="2" class="form-control" value="<?= isset($adress) ? htmlspecialchars($adress) : "";?>"/>
                <span class="text-danger">
                <?php
                    if(isset($error_adress)){
                        echo $error_adress;
                    } 
                    ?>
                </span>
                <br>
                <label for="city">Ville:</label>
                <input name="city" id="city" type="text" minlength="2" class="form-control" value="<?= isset($city) ? htmlspecialchars($city) : "";?>" />
                <span class="text-danger">
                <?php
                    if(isset($error_city)){
                        echo $error_city;
                    } 
                    ?>
                </span>
                <br>
                <label for="email">Email*:</label>
                <input name="email" id="email" type="text" minlength="2" class="form-control" placeholder="abcd@mail.fr" value="<?= isset($email) ? htmlspecialchars($email) : "";?>"/>
                <span class="text-danger">
                <?php
                    if(isset($error_email)){
                        echo $error_email;
                    } 
                    ?>
                </span>
                <br>
                <h2>Votre demande</h2>
                <label id="Subject" value="">Sujet*:</label>
                <br>
                <select id="subject" name="subject" value="<?= isset($subject) ? htmlspecialchars($subject) : "";?>" class="form-control">
                         <option value="Veuillez selectionner un sujet" >Veuillez selectionner un sujet</option>
                         <option  value="myOrders">Mes commandes</option>
                         <option  value="productIssue">Question sur un produit</option>
                         <option  value="claims">Réclamation</option>
                         <option  value="other"> Autre   </option>
                      </select>
                <span class="text-danger">
                <?php
                    if(isset($error_subject)){
                        echo $error_subject;
                    } 
                    ?>
                </span>
                <br>
                <label id="question">Votre question*:</label>
                <br>
                <textarea name="comment" id="comment" rows="3" cols="35" class="form-control" minlength="2" value="<?= isset($comment) ? htmlspecialchars($comment) : "";?>"> </textarea>
                <span class="text-danger">
                <?php
                    if(isset($error_comment)){
                        echo $error_comment;
                    } 
                    ?>
                </span>
                <br>
                <input type="checkbox" name="checkbox" id="checkbox" value="">*J'accepte le traitement informatique de ce formulaire
                <span class="text-danger"><?php
                    if(isset($error_checkbox)){
                        echo $error_checkbox;
                    } 
                    ?></span>
                <br>
                <br>
                <button type="submit" id="SubForm" class="btn btn-dark mb-2">Envoyer</button>
                <button type="reset" id="ResForm" class="btn btn-dark mb-2">Annuler</button>
                <br>
                <br>
            </div>
        </form>
    </fieldset>

    <!-- barre de navigation grise horizontale qui passe a la verticale sur les petits ecrans -->

    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">mentions légales</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">horaires</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#">plan du site</a>
            </li>
        </ul>
    </nav>
    <script src="contact_bis.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>