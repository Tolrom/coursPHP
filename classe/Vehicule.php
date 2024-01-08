<?php
    class Vehicule {

//          Attributs           //

        private string $nom;
        private int $nbrRoue;
        private int $vitesse;

//          Méthodes            //

        public function getNom(){
            return $this->nom;
        }
        public function getWheels(){
            return $this->nbrRoues;
        }
        public function getSpeed(){
            return $this->vitesse;
        }
        
        public function setNom($nom){
            $this->nom = $nom;
        }
        public function setWheels($nbrRoues){
            $this->nbrRoues = $nbrRoues;
        }
        public function setSpeed($vitesse){
            $this->vitesse = $vitesse;
        }
        public function __construct(string $nom,int $nbrRoues,int $vitesse){
           $this->nom = $nom;
           $this->nbrRoues = $nbrRoues;
           $this->vitesse = $vitesse; 
        }

        public function detect(){
            switch ($this->nbrRoues) {
                case 2 :
                    return "moto";
                case 4 :
                    return "voiture";
                default :
                    return "aucun des deux";                    
            }
        }

        public function boost(){
            $this->setSpeed($this->vitesse + 50);
        }

        public function plusRapide($moto, $voiture){
            $delta = $moto->getSpeed() - $voiture->getSpeed();
            switch ($delta > 0){
                case true :
                    return "la ".$moto->getNom();
                case false :
                    return "la ".$voiture->getNom();
                default :
                    return "ni l'un ni l'autre, ils ont la même vitesse.";
            } 
        }
    }
?>