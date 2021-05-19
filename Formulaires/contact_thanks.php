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
   <div class="row m-auto shadow">
       <div class="col-lg-8 col-xs-12 px-4">
           <section class="vh80">
               <h1 class="mt4"> Votre formulaire nous a bien été transmis, il sera traité dans les meilleurs délais.</h1>
               <p>Merci pour votre visite sur notre site <a href="Accueil.html">Jarditou.com</a></p>
               echo "Nom: $lastName <br>";
               echo "Prénom: $firstName <br>";
               echo "Date de naissance: $age <br>";
               echo "Code postal: $postalCode <br>";
               echo "Adresse: $adress <br>";
               echo "City: $city <br>";
               echo "E-mail: $email <br>";
               echo "Sujet: $subject <br>";
               echo "Question: $comment <br>";
           </section>
       </div>
   </div>
    
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