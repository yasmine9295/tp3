<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Jumbotron Template · Bootstrap</title>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.2/examples/jumbotron/">
    <script src="https://kit.fontawesome.com/08fbe9231c.js" crossorigin="anonymous"></script>
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <!--his template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <a class="navbar-brand" href="index.php">Ma bibliotheque</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Gestion des genres</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Liste des genres</a>
                        <a class="dropdown-item" href="#">Ajouter un genre</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-user"></i>  Gestion des auteurs</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Liste des auteurs</a>
                        <a class="dropdown-item" href="#">Ajouter un auteur</a>
                        <a class="dropdown-item" href="#">rechercher un auteur</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-flag"></i>   Gestion des nationalités</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="listeNationalites.php">Liste des nationalités</a>
                        <a class="dropdown-item" href="formeAjoutNationalite.php">Ajouter une nationalité</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>