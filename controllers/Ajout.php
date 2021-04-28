<?php

/*Ajouter un produuit*/
require ('model/ajout.php');

function ajout()
{

    class C_Ajout
    {

        private $imgname;
        private $imgsize;
        private $imgtype;
        private $imgtmp;
        private $resum;
        private $description;
        private $systeme;
        private $interface_utilisateur;
        private $processeur;
        private $ratio;
        private $luminosite;
        private $puce_graphique;
        private $ram;
        private $memoire_flash;
        private $dast;
        private $dastr;
        private $dasm;
        private $double_sim;
        private $taille;
        private $type_ecran;
        private $definition_ecran;
        private $batterie;
        private $nb_capteur;
        private $taile_gravure;
        private $nom;
        private $marque;
        private $number;
        private $prix;

        public function getImgname()
        {
            return $this->imgname;
        }
        public function getImgsize()
        {
            return $this->imgsize;
        }
        public function getImgtmp()
        {
            return $this->imgtmp;
        }
        public function getImgtype()
        {
            return $this->imgtype;
        }
        public function getResum()
        {
            return $this->resum;
        }
        public function getDescription()
        {
            return $this->description;
        }
        public function getSysteme()
        {
            return $this->systeme;
        }
        public function getInterface_utilisateur()
        {
            return $this->interface_utilisateur;
        }
         public function getProcesseur()
        {
            return $this->processeur;
        }
         public function getRatio()
        {
            return $this->ratio;
        }
         public function getLuminosite()
        {
            return $this->luminosite;
        }
         public function getPuce_graphique()
        {
            return $this->puce_graphique;
        }
         public function getRam()
        {
            return $this->ram;
        }
         public function getMemoire_flash()
        {
            return $this->memoire_flash;
        }
         public function getDast()
        {
            return $this->dast;
        }
         public function getIDastr()
        {
            return $this->dastr;
        }
         public function getDasm()
        {
            return $this->dasm;
        }
         public function getDouble_sim()
        {
            return $this->double_sim;
        }
         public function getTaille()
        {
            return $this->taille;
        }
         public function getType_ecran()
        {
            return $this->type_ecran;
        }
         public function getDefinition_ecran()
        {
            return $this->definition_ecran;
        }
         public function getBatterie()
        {
            return $this->batterie;
        }
         public function getNb_capteur()
        {
            return $this->nb_capteur;
        }
         public function getTaile_gravure()
        {
            return $this->taile_gravure;
        }
         public function getNom()
        {
            return $this->nom;
        }
         public function getMarque()
        {
            return $this->marque;
        }
         public function getNumber()
        {
            return $this->number;
        }
         public function getPrix()
        {
            return $this->prix;
        }



        public function setResum($resum)
        {
            $this->resum = $resum;
        }
        public function setDescription($description)
        {
            $this->description = $description;
        }
        public function setSysteme($systeme)
        {
            $this->systeme = $systeme;
        }
        public function setInterface_utilisateur($interface_utilisateur)
        {
            $this->interface_utilisateur = $interface_utilisateur;
        }
          public function setProcesseur($processeur)
        {
            $this->processeur = $processeur;
        }
           public function setRatio($ratio)
        {
            $this->ratio = $ratio;
        }
           public function setLuminosite($luminosite)
        {
            $this->luminosite = $luminosite;
        }
           public function setPuce_graphique($puce_graphique)
        {
            $this->puce_graphique = $puce_graphique;
        }
           public function setram($ram)
        {
            $this->ram = $ram;
        }
           public function setMemoire_flash($memoire_flash)
        {
            $this->memoire_flash = $memoire_flash;
        }
           public function setDast($dast)
        {
            $this->dast = $dast;
        }
           public function setDastr($dastr)
        {
            $this->dastr = $dastr;
        }
           public function setDasm($dasm)
        {
            $this->dasm = $dasm;
        }
           public function setDouble_sim($double_sim)
        {
            $this->double_sim = $double_sim;
        }
           public function setTaille($taille)
        {
            $this->taille = $taille;
        }
           public function setType_ecran($type_ecran)
        {
            $this->type_ecran = $type_ecran;
        }
           public function setDefinition_ecran($definition_ecran)
        {
            $this->definition_ecran = $definition_ecran;
        }
           public function setBatterie($batterie)
        {
            $this->batterie = $batterie;
        }
           public function setNb_capteur($nb_capteur)
        {
            $this->nb_capteur = $nb_capteur;
        }
           public function setTaile_gravure($taile_gravure)
        {
            $this->taile_gravure = $taile_gravure;
        }
           public function setNom($nom)
        {
            $this->nom = $nom;
        }
           public function setMarque($marque)
        {
            $this->marque = $marque;
        }
           public function setNumber($number)
        {
            $this->number = $number;
        }
           public function setPrix($prix)
        {
            $this->prix = $prix;
        }
           public function setImgname($imgname)
        {
            $this->imgname = $imgname;
        }
           public function setImgsize($imgsize)
        {
            $this->imgsize = $imgsize;
        }
           public function setImgtype($imgtype)
        {
            $this->imgtype = $imgtype;
        }
           public function setImgtmp($imgtmp)
        {
            $this->imgtmp = $imgtmp;
        }



        public function ajouter($imgname,$imgsize,$imgtype,$imgtmp,$resum,$description,$systeme,$interface_utilisateur,$processeur,
                                $ratio,$luminosite,$puce_graphique,$ram,$memoire_flash,$dast,$dastr,$dasm,$double_sim,$taille,
                                $type_ecran,$definition_ecran,$batterie,$nb_capteur,$taile_gravure,$nom,$marque,$number,$prix,)
        {
            $this->setImgname($imgname);
            $this->setImgsize($imgsize);
            $this->setImgtype($imgtype);
            $this->setImgtmp($imgtmp);
            $this->setResum($resum);
            $this->setDescription($description);
            $this->setSysteme($systeme);
            $this->setInterface_utilisateur($interface_utilisateur);
            $this->setProcesseur($processeur);
            $this->setRatio($ratio);
            $this->setLuminosite($luminosite);
            $this->setPuce_graphique($puce_graphique);
            $this->setram($ram);
            $this->setMemoire_flash($memoire_flash);
            $this->setDast($dast);
            $this->setDastr($dastr);
            $this->setDasm($dasm);
            $this->setDouble_sim($double_sim);
            $this->setTaille($taille);
            $this->setType_ecran($type_ecran);
            $this->setDescription($definition_ecran);
            $this->setBatterie($batterie);
            $this->setNb_capteur($nb_capteur);
            $this->setTaile_gravure($taile_gravure);
            $this->setNom($nom);
            $this->setMarque($marque);
            $this->setNumber($number);
            $this->setPrix($prix);

            $errors = array();
            $size = 650000;

            if ($_SESSION['rank'] = 2)
            {
                if ($this->imgsize > $size) {
                    array_push($errors, "Le poid de l'image est trop grand.(maximum = 650 ko)");
                }
            }else{
                array_push($errors, "Vous n'êtes pas vendeur");
            }

            if (count($errors) < 1) {
                /*                    $this->marque = strtoupper($this->marque);*/
                ajouter($this->imgname,$this->imgsize,$this->imgtype,$this->imgtmp);
            }else {
                return $errors;
            }
        }
    }



    //Template
    $template = 'ajout';
    //Layout (contient header , footer)
    include('view/layout.php');
}