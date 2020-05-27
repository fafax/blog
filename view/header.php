<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Mon Blog PHP</title>
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="index.php">Mon blog PHP</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?post=posts">Articles</a></li>
                    
                 
                  {% if session.connect == false %}
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?post=connexion">Connexion</a></li>
                  {% else %}
                     <li class="nav-item" role="presentation"><a class="nav-link" href="index.php?post=deconnexion">Deconnexion</a></li>
                  {% endif %}
                </ul>
        </div>
        </div>
    </nav>

      <header class="masthead">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="site-heading">
                        <h3>Fabien HAMAYON</h3>
                        <h5>Le développeur à l'écoute de vos besoins</h5>
                        <br>
                        <p class="subheading">{{title}}</p>
                     </div>
                </div>
            </div>
        </div>
    </header>
  