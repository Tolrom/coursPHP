<?php
    echo '<h2>EXERCICE 1</h2>';

    $var = 5;
    echo $var;
    echo '<br>';
    echo gettype($var);
    echo '<br>';
    $name = 'maxime';
    echo $name;
    echo '<br>';
    $bool = false;
    echo gettype($bool);
    echo '<br>';

    echo '<h2>EXERCICE 2</h2>';

    $a = "bon";
    $b = "jour";
    $c = 10;
    echo $a.$b.$c+1;
    
    echo '<h2>EXERCICE 3</h2>';

    $a = 'Bonjour ';
    echo '<p>'.$a.'l\'Adrar</p>';
    
    echo '<h2>EXERCICE 4</h2>';

    $prixHt = 2.49;
    $quantite = 5;
    $tva = 1.2;
    $total = $prixHt*$quantite*$tva;
    echo "Le total est égal à : $total €<br>";
    echo "Le total est égal à : ".$total." €<br>";
    echo 'Le total est égal à : '.$total.' €<br>';
    echo 'Le total est égal à : '.($prixHt*$quantite*$tva).' €';

    echo '<h2>EXERCICE 5</h2>';

    function sous($a,$b){
        $c = $a - $b;
        echo "<p>La soustraction $a - $b est égal à  $c </p>";
    }
    sous(58,42);

    echo '<h2>EXERCICE 6</h2>';   

    function arrondi(float $a){
        echo "<p>L'arrondi de $a est ".round($a,2)."</p>";
    }
    arrondi(15.7895423);

    echo '<h2>EXERCICE 7</h2>';   

    function somme($a, $b, $c){
        $d = $a+$b+$c;
        echo "<p>La somme de $a, $b et $c est égale à  $d </p>";
    }

    somme(18,26,78);

    function sommeInf(...$a){
        $b = 0;
        $c = 0;
        foreach($a as $value){
            $b += $value;
            $c++;
        }
        echo "<p>La somme des $c nombres est égale à  $b </p>";
    }
    
    sommeInf(12,15,78,54,69,63,25,85,77,75,16);

    echo '<h2>EXERCICE 8</h2>'; 

    function moy($a,$b,$c){
        $d = ($a+$b+$c)/3;
        echo "<p>La moyenne de $a, $b et $c est de ".round($d,2).".</p>";
    }
    moy(45,83,62);

    function moyInf(...$val){
        $cpt = 0;
        $moy = 0;
        foreach($val as $value){
            $moy += $value;
            $cpt++;
        }
        $moy /= $cpt;
        echo "<p>La moyenne des $cpt nombres est égale à ".round($moy,2).".</p>";
    }
    moyInf(24,68,53,92,65,3,185,123,12)
?>