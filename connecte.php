<!doctype html>
<html lang="fr">
<head>
  <title>Projet Zulgate</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Custom built theme - This already includes Bootstrap 4 -->
  <link rel="stylesheet" href="css/mytheme.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
    <div class="col-md-12 sticky-top bg-light shadow">
        <nav class="navbar">
            <a class="navbar-brand" href="index.php">Zulgate</a>
            <ul class="nav justify-content-end">
                <li>
                    <a class="nav-link" href="#"><i class="fa fa-envelope-o"></i></a>
                </li>
                <li>
                    <a class="nav-link" href="connect.php">Se connecter</a>
                </li>
            </ul>
        </nav>
    </div>
<!--    fin row header-->

        <div class="row m-0">
            <div class="col-md-2 bg-light">
            <nav class="fixed-left d-none d-md-block bg-light sidebar pt-2 h-100">
                <div class="sidebar-sticky">
                    <ul class="nav">
                        <li class="sidebar-search mx-3">
                            <a class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Recherche...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Afficher Liens</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link" href="#">Utilisateurs</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">RSS</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">API</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#">SiteMap</a>
                        </li>
                    </ul>
                </div>            
            </nav>
            </div>
<!--        fin menu gauche-->
            <div class="col-md-10 mr-0">
                <div class="container-fluid pt-3">
                    <div class="card pt-3">
                        <img class="rounded mx-auto d-block" src="/images/card.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Titre lien</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Url du lien</h6>
                            <p class="card-text">Descriptif du lien : #Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Do Eiusm
</p>
                            <p class="card-text">Mots clés : #Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit Sed Do Eiusm
</p>
                            <a href="#" class="btn btn-outline-primary">Editer</a>
                            <a href="#" class="btn btn-outline-primary">Supprimer</a>
                            <a href="#" class="btn btn-outline-primary">Valider</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        fin section-->

        <footer class="footer fixed-bottom bg-light font-weight-light">
            <div class="container">
                <p class="text-center mb-0" href="#">Crédit - Mentions - RSS</p>
            </div>
        </footer>
<!--    fin container-->
</body>
</html>