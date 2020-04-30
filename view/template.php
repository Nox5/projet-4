<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/index.css">

        <title><?= $title ?></title>
    </head>

    <body>
        <header>
        <!--Navigation-->
            <nav class="navbar navbar-expand-lg" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-tigger" href="#">JEAN FORTEROCHE</a>

                    <button class="navbar-toggler text-uppercase rounded collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-align-justify fa-2x"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto ">
                            <li class="nav-item mx-0 mx-lg-1">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-tigger active" href="#">Accueil</a>
                            </li>
                            <li class="nav-item mx-0 mx-lg-1">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-tigger" href="#">Contact</a>
                            </li>
                            <li class="nav-item mx-0 mx-lg-1">
                                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-tigger" href="#">Connexion</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <?= $content ?>
        <!--Pied de page-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-blog mb-4">BILLET SIMPLE POUR L'ALASKA</h4>
                        <p class="lead mb-0">- Jean Forterochee -</p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-reseaux mb-4">Réseaux sociaux</h4>
                    <a class="fab fa-facebook mx-1 fa-3x"></a>
                    <a class="fab fa-twitter mx-1 fa-3x"></a>
                    <a class="fab fa-linkedin mx-1 fa-3x"></a>
                </div>

                <div class="col-lg-4">
                    <h4 class="text-etudiant mb-4">Site étudiant</h4>
                    <p class="langage-annee mb-0">PHP blog / 2020</p>
                </div>
                </div>

                
            </div>
        </footer>

        <!--Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container">
                <small>Copyright Billet simple pour l'Alaska 2020</small>
            </div>
        </section>

        <script src="https://kit.fontawesome.com/64fa37ded4.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
