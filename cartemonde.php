<?php require_once 'header.php'; ?>

<body>
    <h1 style="color:Powderblue;">Carte Monde</h1>
    <h2 style="color:Powderblue;"><b>Aide:</b></h2>
    <li style="color:aqua;"> Touche + : <b>Zoomer</b></li>
    <li style="color:aqua;"> Touche - : <b>Dézoomer</b></li>
</body>

<iframe id="inlineFrameExample"
    title="carte_monde"
    width=100%;
    height=500px;
    src="https://www.openstreetmap.org/export/embed.html?bbox=-0.004017949104309083%2C51.47612752641776%2C0.00030577182769775396%2C51.478569861898606&layer=mapnik">
</iframe>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>