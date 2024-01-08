<?php
    class Maison {
/*
----------Attributs :-------------
*/ 
        private string $nom;
        private float $longueur;
        private float $largeur;
        private int $nbrEtages;
/*
----------Fonctions :-------------
*/ 
        public function getNom(){
            return $this->nom;
        }
        public function getLongueur(){
            return $this->longueur;
        }
        public function getLargeur(){
            return $this->largeur;
        }
        public function getEtages(){
            return $this->largeur;
        }
        public function setNom($nom){
            $this->nom = $nom;
        }
        public function setLongueur($longueur){
            $this->longueur = $longueur;
        }
        public function setLargeur($largeur){
            $this->largeur = $largeur;
        }
        public function setEtages($etages){
            $this->nbrEtages = $etages;
        }
        public function __construct(string $nom,float $longueur,float $largeur,int $etages){
            $this->nom = $nom;
            $this->longueur = $longueur;
            $this->largeur = $largeur;
            $this->nbrEtages = $etages;
        }
        public function surface(){
            $longueur = $this->longueur;
            $largeur = $this->largeur;
            $etages = $this->nbrEtages;
            $surface = $longueur*$largeur*$etages;
            return $surface;
        }
    }
?>