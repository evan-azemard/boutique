<?php

/*Pour la page qui affiche les produits trié*/
require ('model/produit.php');
require ('library/fonctions.php');

function produit ()
{
    $articles_model = article_model();

    //Template
    $template = 'produit';
    //Layout (contient header , footer)
    include('view/layout.php');

    /*
     *  Si il n'y a pas de nom d'article correspondant au nom_model,
     *  Alors on crée un nouvelle article avec le nom model
     *  on selectione les champs qui correspond au nom de l'article
     *
     * Selectionner tout les nom de model
     * Les afficher
     *
     * */



/**
 *  FICHIER : cart.class.php
 *
 */

    class cart
    {

        /**
         * Constructeur de la class
         */


        /**
         *Initialisation du panier
         */
        public function initCart()
        {
            $_SESSION['panier'] = array();
        }

        /**
         * Retourne le contenu du panier
         */
        public function getList()
        {
            return !empty($_SESSION['panier']) ? $_SESSION['panier'] : NULL;
        }

        /**
         * Ajout d'un produit au panier
         */
        public function addProduct($id_produit, $libelle_produit, $qte = 1, $prix_unitaire_produit = 0)
        {
            $errors = array();
            if ($qte > 0) {
                $_SESSION['panier'][$id_produit] = array(
                    'id_produit' => $id_produit, 'produit' => $libelle_produit, 'qte' => $qte, 'prix_unitaire' => $prix_unitaire_produit
                );
                $this->updateTotalPriceProduct($id_produit);
            } else {
                array_push($errors, "Vous ne pouvez pas ajouter un produit sans quantité...");
            }
        }

        private function updateTotalPriceProduct($id_produit)
        {
            if (isset($_SESSION['panier'][$id_produit])) {
                $_SESSION['panier'][$id_produit]['prix_Total'] = $_SESSION['panier'][$id_produit]['qte'] * $_SESSION['panier'][$id_produit]['prix_unitaire'];
            }
        }

        /**
         * Modifie la quantité d'une produit dans le panier
         */
        public function updateQteProduct($id_produit, $qte = 0)
        {
            $errors = array();
            if (isset($_SESSION['panier'][$id_produit])) {
                $_SESSION['panier'][$id_produit]['qte'] = $qte;
                $this->updateTotalPriceProduct($id_produit);
            } else {
                array_push($errors, "produit non présent dans le panier");
            }
        }

        /**
         * Supprime une produit du panier
         */
        public function removeProduct($id_produit)
        {
            if (isset($_SESSION['panier'][$id_produit])) {
                unset($_SESSION['panier'][$id_produit]);
            }
        }

        /**
         * Retourne le nombre de produits dans le panier
         */
        public function getNbProductsInCart()
        {
            $panier = !empty($_SESSION['panier']) ? $_SESSION['panier'] : NULL;
            $nb = 0;
            $panier = !empty($_SESSION['panier']) ? $_SESSION['panier'] : NULL;
            if (!empty($panier)) {
                foreach ($panier as $P) {
                    $nb += $P['qte'];
                }
            }
            return $nb;
        }

        public function getTotalPriceCart()
        {
            $total = 0;
            $panier = !empty($_SESSION['panier']) ? $_SESSION['panier'] : NULL;
            if (!empty($panier)) {
                foreach ($panier as $P) {
                    $total += $P['prix_Total'];
                }
            }
            return $total;
        }
    }
}

