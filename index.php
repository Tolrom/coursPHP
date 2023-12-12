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
    moyInf(24,68,53,92,65,3,185,123,12);

    echo '<h2>EXERCICE 9</h2>'; 

    function mini(...$tab){
        $min = $tab[0];
        foreach($tab as $value){
            if($value < $min){
                $min = $value;
            }
        }
        echo "<p>La plus petite valeur des nombres donnés est de $min .</p>";
    }
    mini(75,42,56,23,42,10,56);

    function mini2(...$tab){
        echo "<p>La plus petite valeur des nombres donnés est de ".min($tab)."</p>";
    }
    mini2(85,96,23,54,27,86,15,7);
    
    function mini3(...$tab){
        for($i = 0 ; $i < count($tab)-1 ; $i++){
            if($tab[$i] > $tab[$i+1]){
                $valeur = $tab[$i+1];
            }
        }
        echo "<p>La plus petite valeur des nombres donnés est de $valeur </p>";
    }
    mini3(85,96,23,54,27,86,15,7);

    echo '<h2>EXERCICE 10</h2>'; 

    function age(int $age){
        if($age < 6){
            echo "<p>L'enfant est trop jeune.</p>";
        }
        if($age > 6){
            if($age > 6 and $age < 8){
                $cat = 'poussins';
            }
            else if($age == 8 or $age == 9){
                $cat = 'pupilles';
            }
            else if($age > 9 and $age < 12){
                $cat = 'minimes';
            }
            else if($age > 12){
                $cat = 'cadets';
            }
                echo "<p>L'enfant est dans la catégorie des $cat </p>";
        }
    }
    age(7);

    function ageS(int $age){
        switch($age){
            case 6:
            case 7:
                echo "<p>L'enfant est dans la catégorie des poussins.</p>";
                break;
            case 8:
            case 9:
                echo "<p>L'enfant est dans la catégorie des pupilles. </p>";
                break;
            case 10:
            case 11:
                echo "<p>L'enfant est dans la catégorie des minimes. </p>";
                break;
            case $age>11 :
                echo "<p>L'enfant est dans la catégorie des cadets. </p>";
                break;
            default :
                echo "<p>L'enfant est trop jeune!</p>";
        }
    }
    ageS(12);

    echo '<h2>EXERCICE 11</h2>'; 

    function maxi(array $tab){
        $max = $tab[0];
        foreach($tab as $value){
            if($value > $max){
                $max = $value;
            }
        }
        echo "<p>La plus grande valeur du tableau est de $max.</p>";
    }
    $maxTab = [12,75,85,96,3,51,21,85];
    maxi($maxTab);
    
    echo '<h2>EXERCICE 12</h2>'; 
    
    function avg(array $tab){
        $avg = 0;
        $cpt = 0;
        foreach($tab as $value){
            $avg += $value;
            $cpt++;
        }
        $avg /= $cpt;
        echo "<p>La moyenne du tableau est de $avg.</p>";
    }
    $avgTab = [12,75,85,96,3,51,21,85];
    avg($avgTab);

    echo '<h2>EXERCICE 13</h2>'; 

    function miniTab(array $tab){
        $min = $tab[0];
        foreach($tab as $value){
            if($value < $min){
                $min = $value;
            }
        }
        echo "<p>La plus petite valeur du tableau est de $min.</p>";
    }
    $minTab = [12,75,85,96,3,51,21,85];
    miniTab($minTab);
?>