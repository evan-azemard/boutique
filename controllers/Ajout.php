<?php

/*Ajouter un produuit*/
require ('model/ajout.php');

function ajout()
{

    class C_Ajout
    {
        private $nom;
        private $resum;
        private $marque;


        public function getNom()
        {
            return $this->nom;
        }

        public function setNom($Nom)
        {
            $this->nom = $Nom;
        }

        public function getResum()
        {
            return $this->resum;
        }

        public function setresum($resum)
        {
            $this->resum = $resum;
        }

         public function getMarque()
        {
            return $this->marque;
        }

        public function setmarque($marque)
        {
            $this->marque = $marque;
        }

        public function ajouter($nom, $resum, $marque)
        {
            $this->setNom($nom);
            $this->setResum($resum);
            $this->setMarque($marque);
            $errors = array();

            if ($this->nom && $this->resum) {
                if (strlen($this->nom) > 15) {
                    array_push($errors, "Le pseudo est trop long");
                }
                if (strlen($this->resum) < 10) {
                    array_push($errors, "La description est trop courte");
                }
            }

            if (count($errors) < 1) {
                if (isset($_SESSION['sellers'])){
                    $this->marque = strtoupper($this->marque);
                    RegisterArticle($this->nom,$this->resum,$this->marque);
                }else{
                    array_push($errors, "Vous n'êtes pas vendeur");
                }
            }else {
                array_push($errors, "Veuillez correctment remplir les champs obligatoire");
            }
        }
    }



    //Template
    $template = 'ajout';
    //Layout (contient header , footer)
    include('view/layout.php');
}