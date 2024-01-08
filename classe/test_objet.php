<?php
include_once "./Maison.php";
include_once "./Vehicule.php";

$maison = new Maison("La villa des Secrets",24.4,12.7,3);
echo "<p>La surface de ".$maison->getNom()." est égale à : ".$maison->surface()." m2.</p>";

$merco = new Vehicule("Mercedes CLK", 4, 250);
$honda = new Vehicule("Honda CBR", 2, 280);

echo "<p>Le véhicule ".$merco->getNom()." est une ".$merco->detect()." qui a une Vmax de ".$merco->getSpeed()." km/h.</p>";
echo "<p>Le véhicule ".$honda->getNom()." est une ".$honda->detect()." qui a une Vmax de ".$honda->getSpeed()." km/h.</p>";
$merco->boost();
echo "<p>Boostée, la nouvelle vitesse de la ".$merco->getNom()." est de ".$merco->getSpeed()." km/h.</p>";
echo "<p>Le véhicule le plus rapide est ".$merco->plusRapide($honda,$merco)."</p>";