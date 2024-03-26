<?php
/**
 * Fragment Header HTML page
 *
 * PHP version 7
 *
 * @category  Page_Fragment
 * @package   Application
 * @author    SIO-SLAM <sio@ldv-melun.org>
 * @copyright 2019-2021 SIO-SLAM
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link      https://github.com/sio-melun/geoworld
 */
?>
<!DOCTYPE html>
<html lang="fr" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Application Geoworld">
    <title>Homepage : GeoWorld</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
    }
    
    body{
      background-image:url('https://media.istockphoto.com/photos/earth-picture-id180754352?k=6&m=180754352&s=170667a&w=0&h=J6H7x1M4yJVoqZDaczoBkT5e4WvFeWyFA8pkVsGZsNU=');
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size :100% 100%;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">
</head>


<body>

<?php
require_once 'inc/manager-db.php';
$listeContinents = getNomContinents();
?>

<nav class="navbar navbar-expand-md fixed-top bg">
  <div class="container-fluid">
    <!--Mettre une image ici a la place de Geoworld-->
    <a class="navbar-brand" href="acceuil.php">Geoworld</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="acceuil.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cartemonde.php">Carte Monde</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">Continent</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">

            <?php foreach($listeContinents as $cont): ?>

              <a class="dropdown-item" href="?continent=<?php echo"$cont->Continent"; ?>"><?php echo $cont->Continent ?></a>

            <?php endforeach ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="todo-projet.php">
            Présentation-Atelier-de-Prof-SLAM
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Recherche..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">🔎</button>
      </form>
      <div class="btn-group">
        <a  type="button" class="btn btn-outline-primary" href="formulaire_inscription.php">S'inscrire</a>
        <a type="button" class="btn btn-outline-primary"  href="authentification.php">Connection</a>
        
      </div>
    </div>
  </div>
</nav>

</body>