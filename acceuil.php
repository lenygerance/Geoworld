<?php require_once 'header.php'; ?>
<!DOCTYPE html>
<html>
<body>
    <h1 style="color:Powderblue;">GeoWorld</h1>
    <time style="color:white;"><i><?php
    $t=time();
    echo(date("d.m.Y",$t));?></i></time>
    
    <p style="color:white;">Ce site va vous permettre aux professeurs, comme aux élèves, de consulter des données géopolitiques et économiques de la planète en vous reportant toutes les information concernant les continents et leurs pays</p>
    <h2 style="color:aqua;">Nous mettons à votre disposition:</h2>
    <li style="color:Powderblue;">Une <a href="cartemonde.php"> carte du monde</a></li>
    <li style="color:Powderblue;">Les differents continents</li>
    <li style="color:Powderblue;">Une barre de rechercher pour trouver des information specifique</li>
</body>
</html>
<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>